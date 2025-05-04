<?php

namespace App\Security;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use KnpU\OAuth2ClientBundle\Security\Authenticator\OAuth2Authenticator;
use League\OAuth2\Client\Provider\GoogleUser;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\Authenticator\Passport\SelfValidatingPassport;

class GoogleAuthenticator extends OAuth2Authenticator
{
    private $clientRegistry;
    private $entityManager;
    private $router;
    private $logger;

    public function __construct(
        ClientRegistry $clientRegistry,
        EntityManagerInterface $entityManager,
        RouterInterface $router,
        LoggerInterface $logger
    ) {
        $this->clientRegistry = $clientRegistry;
        $this->entityManager = $entityManager;
        $this->router = $router;
        $this->logger = $logger;
    }

    public function supports(Request $request): ?bool
    {
        $supports = $request->attributes->get('_route') === 'connect_google_check';
        $this->logger->debug('GoogleAuthenticator supports route: {route}, result: {result}', [
            'route' => $request->attributes->get('_route'),
            'result' => $supports ? 'true' : 'false'
        ]);
        return $supports;
    }

    public function authenticate(Request $request): Passport
    {
        $this->logger->debug('Starting Google authentication');
        $client = $this->clientRegistry->getClient('google');

        // Récupérer la session depuis la requête
        $session = $request->getSession();

        try {
            $accessToken = $this->fetchAccessToken($client);
            $this->logger->debug('Access token fetched successfully');
        } catch (\Exception $e) {
            $this->logger->error('Failed to fetch access token: {message}', ['message' => $e->getMessage()]);
            throw new AuthenticationException('Failed to fetch access token: ' . $e->getMessage());
        }

        return new SelfValidatingPassport(
            new UserBadge($accessToken->getToken(), function () use ($accessToken, $client, $session) {
                $this->logger->debug('Fetching Google user from token');
                try {
                    /** @var GoogleUser $googleUser */
                    $googleUser = $client->fetchUserFromToken($accessToken);
                    $this->logger->debug('Google user fetched: {email}', ['email' => $googleUser->getEmail()]);
                } catch (\Exception $e) {
                    $this->logger->error('Failed to fetch Google user: {message}', ['message' => $e->getMessage()]);
                    throw new AuthenticationException('Failed to fetch Google user: ' . $e->getMessage());
                }

                $email = $googleUser->getEmail();
                $firstName = $googleUser->getFirstName() ?? 'Utilisateur';
                $lastName = $googleUser->getLastName() ?? 'Google';
                $userData = $googleUser->toArray();
                $picture = $userData['picture'] ?? 'default.jpg'; // Récupérer la photo Google

                // Find user by email
                $user = $this->entityManager->getRepository(User::class)->findOneBy(['email' => $email]);
                $this->logger->debug('User lookup for email: {email}, found: {found}', [
                    'email' => $email,
                    'found' => $user ? 'yes' : 'no'
                ]);

                if (!$user) {
                    $this->logger->debug('Creating new user for email: {email}', ['email' => $email]);
                    // Create new user with all required fields
                    $user = new User();
                    $user->setEmail($email);
                    $user->setPrenom($firstName);
                    $user->setNom($lastName);
                    $user->setImage($picture); // Utiliser la photo Google
                    $user->setPassword(bin2hex(random_bytes(16))); // Random password
                    $user->setNumTelephone('00000000'); // Default phone number
                    $user->setDateDeNaissance(new \DateTime('1990-01-01')); // Default birth date
                    $user->setGenre('Homme'); // Default gender
                    $user->setRole('ROLE_UTILISATEUR'); // Format Symfony pour les rôles
                    $user->setResetCode(0); // Default reset code

                    try {
                        $this->entityManager->persist($user);
                        $this->entityManager->flush();
                        $this->logger->debug('New user created: {email}', ['email' => $email]);
                    } catch (\Exception $e) {
                        $this->logger->error('Failed to create user: {message}', ['message' => $e->getMessage()]);
                        throw new AuthenticationException('Failed to create user: ' . $e->getMessage());
                    }
                }

                // Stocker les informations de l'utilisateur dans la session
                $session->set('user', [
                    'id' => $user->getIdUser(),
                    'email' => $user->getEmail(),
                    'nom' => $user->getNom(),
                    'prenom' => $user->getPrenom(),
                    'image' => $user->getImage(),
                    'role' => $user->getRole(),
                    'date_de_naissance' => $user->getDateDeNaissance() ? $user->getDateDeNaissance()->format('Y-m-d') : null,
                    'num_telephone' => $user->getNumTelephone(),
                    'genre' => $user->getGenre(),
                ]);

                return $user;
            })
        );
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {
        $this->logger->debug('Authentication successful for user: {identifier}', [
            'identifier' => $token->getUserIdentifier()
        ]);
        return new RedirectResponse($this->router->generate('app_acceuil'));
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception): ?Response
    {
        $this->logger->error('Authentication failed: {message}', ['message' => $exception->getMessage()]);
        return new RedirectResponse(
            $this->router->generate('app_login') . '?error=' . urlencode('Échec de l\'authentification avec Google: ' . $exception->getMessage())
        );
    }
}