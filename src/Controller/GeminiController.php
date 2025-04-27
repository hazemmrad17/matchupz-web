<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpClient\HttpClient;

#[Route("/gemini")]
final class GeminiController extends AbstractController
{
    private string $geminiApiKey;

    // Persistent context about Matchupz
    private const MATCHUPZ_CONTEXT = "Matchupz est une application desktop innovante de gestion d'événements sportifs, d'équipes et des joueurs, ainsi que la gestion logistique du stade et des sponsors qui financent les transactions. Elle offre une interface utilisateur intuitive pour gérer les sponsors, les joueurs, les matchs, les espaces sportifs, la logistique, les statistiques, les contrats, les paiements via Stripe, et bien plus encore. L'objectif est de simplifier l'organisation des événements sportifs en centralisant toutes les fonctionnalités clés dans une seule plateforme.";

    // List of keywords related to Matchupz for prioritization
    private array $keywords = [
        'Matchupz', 'matchupz', 'matchupz desktop application', 'gestion des sponsors', 'gestion des joueurs',
        'gestion des espaces sportifs', 'gestion des matches', 'gestion du logistique', 'statistique',
        'gestion des fournisseurs', 'contrat', 'profil utilisateur', 'interface utilisateur', 'macth',
        'stade', 'paiement', 'stripe', 'players tracker', 'crud'
    ];

    public function __construct(string $geminiApiKey)
    {
        $this->geminiApiKey = $geminiApiKey;
    }

    #[Route('/', name: 'gemini_chat', methods: ['GET'])]
    public function index(SessionInterface $session): Response
    {
        // Initialize chat history if empty
        $chatHistory = $session->get('gemini_chat_history', []);
        if (empty($chatHistory)) {
            $chatHistory[] = [
                'sender' => 'Gemini',
                'message' => 'Bonjour ! Je suis votre assistant pour Matchupz. Posez-moi des questions sur la gestion d’événements sportifs, les sponsors, les joueurs, ou toute autre fonctionnalité de Matchupz. Je peux aussi répondre à des questions générales si elles se rapportent à l’univers sportif ou à l’organisation d’événements !',
            ];
            $session->set('gemini_chat_history', $chatHistory);
        }

        return $this->render('sponsor/gemini.html.twig', [
            'controller_name' => 'GeminiController',
            'chat_history' => $chatHistory,
        ]);
    }

    #[Route('/ask', name: 'gemini_chat_ask', methods: ['POST'])]
    public function ask(Request $request, SessionInterface $session): JsonResponse
    {
        // Verify CSRF token
        $token = $request->headers->get('X-CSRF-Token');
        if (!$this->isCsrfTokenValid('gemini_chat', $token)) {
            return new JsonResponse(['error' => 'Jeton CSRF invalide'], 403);
        }

        $data = json_decode($request->getContent(), true);
        $message = trim($data['message'] ?? '');

        if (empty($message)) {
            return new JsonResponse(['error' => 'Message vide'], 400);
        }

        // Get or initialize chat history
        $chatHistory = $session->get('gemini_chat_history', []);

        // Add user message to chat history
        $chatHistory[] = [
            'sender' => 'Moi',
            'message' => $message,
        ];

        try {
            // Enhanced system prompt
            $systemPrompt = <<<EOT
Tu es Gemini, l'assistant intelligent de l'application Matchupz. Ton rôle principal est d'aider les utilisateurs avec des questions liées à Matchupz, une plateforme de gestion d'événements sportifs. Voici le contexte de Matchupz : 

{MATCHUPZ_CONTEXT}

Priorise les réponses aux questions contenant ces mots-clés : {KEYWORDS}. Pour ces questions, fournis des réponses détaillées, précises et utiles basées sur le contexte de Matchupz.

Pour les questions qui ne contiennent pas ces mots-clés :
1. Si la question est liée au domaine sportif, à l'organisation d'événements, à la gestion d'équipes, ou à des sujets connexes, réponds de manière intelligente en faisant un lien avec Matchupz si possible. Par exemple, pour une question sur la planification d'événements, explique comment Matchupz peut aider.
2. Si la question est hors sujet (par exemple, une question sur un sujet non lié aux sports ou à Matchupz), réponds poliment : "Désolé, je suis spécialisé dans Matchupz et les sujets liés aux événements sportifs. Pouvez-vous poser une question sur Matchupz, la gestion d'événements, ou un sujet sportif ?"

Instructions supplémentaires :
- Adopte un ton professionnel, amical et engageant.
- Fournis des réponses claires, concises et structurées.
- Si la question est vague, pose une question de clarification pour mieux répondre.
- Évite de partager des informations sensibles ou hors contexte.

Question de l'utilisateur : {USER_MESSAGE}
EOT;

            // Replace placeholders
            $systemPrompt = str_replace(
                ['{MATCHUPZ_CONTEXT}', '{KEYWORDS}', '{USER_MESSAGE}'],
                [self::MATCHUPZ_CONTEXT, implode(', ', $this->keywords), $message],
                $systemPrompt
            );

            $client = HttpClient::create(['timeout' => 30]);
            $response = $client->request('POST', 'https://generativelanguage.googleapis.com/v1/models/gemini-1.5-flash:generateContent?key=' . $this->geminiApiKey, [
                'headers' => [
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'contents' => [
                        [
                            'parts' => [
                                ['text' => $systemPrompt]
                            ]
                        ]
                    ]
                ]
            ]);

            $statusCode = $response->getStatusCode();
            if ($statusCode !== 200) {
                $errorData = $response->toArray(false);
                $errorMessage = $errorData['error']['message'] ?? 'Unknown API error';
                throw new \Exception('API request failed with status ' . $statusCode . ': ' . $errorMessage);
            }

            $result = $response->toArray();
            $generatedText = $result['candidates'][0]['content']['parts'][0]['text'] ?? 'Aucune réponse générée.';

            // Add the API response to chat history
            $chatHistory[] = [
                'sender' => 'Gemini',
                'message' => $generatedText,
            ];

            // Save updated chat history
            $session->set('gemini_chat_history', $chatHistory);

            return new JsonResponse([
                'response' => $generatedText,
                'chat_history' => $chatHistory
            ]);
        } catch (\Exception $e) {
            $chatHistory[] = [
                'sender' => 'Gemini',
                'message' => 'Erreur lors de la communication avec l\'API. Veuillez réessayer plus tard.',
            ];
            $session->set('gemini_chat_history', $chatHistory);

            // Log detailed error information
            error_log('Gemini API Error: ' . $e->getMessage() . 
                      ' | Code: ' . $e->getCode() . 
                      ' | File: ' . $e->getFile() . 
                      ' | Line: ' . $e->getLine() . 
                      ' | Trace: ' . $e->getTraceAsString());

            return new JsonResponse([
                'error' => 'Erreur lors de la communication avec l\'API : ' . $e->getMessage(),
                'chat_history' => $chatHistory
            ], 500);
        }
    }

    /**
     * Vérifie si la réponse générée est pertinente pour les mots-clés autorisés
     * @param string $response
     * @param array $keywords
     * @return bool
     */
    private function isResponseRelevant(string $response, array $keywords): bool
    {
        // Convertir la réponse en minuscules pour la comparaison
        $responseLower = strtolower($response);

        // Vérifier si la réponse contient au moins un mot-clé autorisé
        foreach ($keywords as $keyword) {
            if (stripos($responseLower, strtolower($keyword)) !== false) {
                return true;
            }
        }

        return false;
    }
}