<?php

namespace App\Controller;

use App\Repository\JoueurRepository;
use App\Repository\ClubRepository;
use App\Repository\HistoriqueClubRepository;
use App\Repository\MatchEntityRepository;
use App\Repository\EspacesportifRepository;
use App\Repository\SponsorRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'dashboard')]
    public function index(
        JoueurRepository $joueurRepository,
        ClubRepository $clubRepository,
        HistoriqueClubRepository $historiqueRepository,
        MatchEntityRepository $matchRepository,
        EspacesportifRepository $espaceRepository,
        SponsorRepository $sponsoringRepository
    ): Response {
        // Fetch data for dashboard statistics
        $stats = [
            'joueurs' => [
                'total' => $joueurRepository->count([]),
                'clubs' => $joueurRepository->countPlayersInClubs(),
            ],
            'clubs' => [
                'total' => $clubRepository->count([]),
                'active' => $clubRepository->count(['isActive' => true]),
            ],
            'historique' => [
                'total' => $historiqueRepository->count([]),
                'recent' => $historiqueRepository->findRecentActivities(5),
            ],
            'matchs' => [
                'total' => $matchRepository->count([]),
                'upcoming' => $matchRepository->countUpcomingMatches(),
            ],
            'espace' => [
                'total' => $espaceRepository->count([]),
                'reservations' => $espaceRepository->countActiveReservations(),
            ],
            'logistique' => [
                'total' => $logistiqueRepository->count([]),
                'equipment' => $logistiqueRepository->countAvailableEquipment(),
            ],
            'sponsoring' => [
                'total' => $sponsoringRepository->count([]),
                'contracts' => $sponsoringRepository->countActiveContracts(),
            ],
        ];

        return $this->render('dashboard.html.twig', [
            'stats' => $stats,
        ]);
    }
}