<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    #[Route('/home', name: 'maintenance')]
    public function index(): Response
    {
        // Placeholder stats until entities are implemented
        $stats = [
            'users' => ['total' => 0, 'active' => 0],
            'joueurs' => ['total' => 0, 'clubs' => 0],
            'clubs' => ['total' => 0, 'active' => 0],
            'historique' => ['total' => 0, 'recent' => 0],
            'matchs' => ['total' => 0, 'upcoming' => 0],
            'espace' => ['total' => 0, 'reservations' => 0],
            'logistique' => ['total' => 0, 'equipment' => 0],
            'sponsoring' => ['total' => 0, 'contracts' => 0],
        ];

        return $this->render('dashboard.html.twig', [
            'stats' => $stats,
        ]);
    }
}