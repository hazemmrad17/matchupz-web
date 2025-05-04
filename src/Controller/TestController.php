<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class TestController extends AbstractController
{
    #[Route('/test-auth', name: 'test_auth')]
    public function testAuth(Security $security): Response
    {
        $user = $security->getUser();
        if ($user) {
            return new Response('Authenticated as: ' . $user->getUserIdentifier() . ', Roles: ' . implode(', ', $user->getRoles()));
        }
        return new Response('Not authenticated');
    }
}