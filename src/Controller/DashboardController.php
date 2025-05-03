<?php

namespace App\Controller;

use App\Repository\JoueurRepository;
use App\Repository\PerformanceJoueurRepository;
use App\Repository\EvaluationPhysiqueRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/dashboard')]
class DashboardController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/', name: 'app_dashboard', methods: ['GET'])]
    public function index(
        JoueurRepository $joueurRepository,
        PerformanceJoueurRepository $performanceRepository,
        EvaluationPhysiqueRepository $evaluationRepository
    ): Response {
        // Total and Active Players
        $allJoueurs = $joueurRepository->findAll();
        $totalPlayers = count($allJoueurs);
        $activePlayers = count(array_filter($allJoueurs, fn($joueur) => $joueur->getStatut() === 'Actif'));

        // Players Added Today (not tracked, set to 0)
        $joueursAddedTodayCount = 0;

        // Top Performers and Sport Distribution
        $maxGoals = $performanceRepository->createQueryBuilder('p')
            ->select('MAX(p.butsMarques)')->getQuery()->getSingleScalarResult() ?: 1;
        $maxAssists = $performanceRepository->createQueryBuilder('p')
            ->select('MAX(p.passesDecisives)')->getQuery()->getSingleScalarResult() ?: 1;
        $maxMinutes = $performanceRepository->createQueryBuilder('p')
            ->select('MAX(p.minutesJouees)')->getQuery()->getSingleScalarResult() ?: 1;

        $topPerformers = [];
        $sportScores = [];
        foreach ($allJoueurs as $joueur) {
            $performance = $performanceRepository->findOneBy(['joueur' => $joueur]);
            $evaluation = $evaluationRepository->findOneBy(['joueur' => $joueur]);

            $performanceScore = 0;
            if ($performance) {
                $performanceScore += min(($performance->getButsMarques() ?? 0) / $maxGoals * 25, 25);
                $performanceScore += min(($performance->getPassesDecisives() ?? 0) / $maxAssists * 15, 15);
                $performanceScore += min(($performance->getMinutesJouees() ?? 0) / $maxMinutes * 10, 10);
                $penalty = ($performance->getCartonsJaunes() ?? 0) * 1 + ($performance->getCartonsRouges() ?? 0) * 3;
                $performanceScore = max($performanceScore - $penalty, 0);
            }

            $physicalScore = 0;
            if ($evaluation) {
                $physicalScore = (($evaluation->getNiveauEndurance() ?? 0) +
                                ($evaluation->getForcePhysique() ?? 0) +
                                ($evaluation->getVitesse() ?? 0)) / 30 * 50;
            }

            $totalScore = round(min(max($performanceScore + $physicalScore, 0), 100));

            if ($joueur->getProfilePicture()) {
                $topPerformers[] = ['joueur' => $joueur, 'score' => $totalScore];
            }

            $sportName = $joueur->getSport() ? $joueur->getSport()->getNomSport() : 'Unknown';
            if (!isset($sportScores[$sportName])) {
                $sportScores[$sportName] = ['total' => 0, 'count' => 0];
            }
            $sportScores[$sportName]['total'] += $totalScore;
            $sportScores[$sportName]['count']++;
        }

        usort($topPerformers, fn($a, $b) => $b['score'] <=> $a['score']);
        $topPerformers = array_slice($topPerformers, 0, 4);

        $sportNames = [];
        $sportAvgScores = [];
        foreach ($sportScores as $sport => $data) {
            $sportNames[] = $sport;
            $sportAvgScores[] = round($data['total'] / $data['count'], 1);
        }

        // Physical Stats
        $physicalStats = $evaluationRepository->createQueryBuilder('e')
            ->select('AVG(e.niveauEndurance) as endurance, AVG(e.forcePhysique) as strength, AVG(e.vitesse) as speed')
            ->getQuery()
            ->getSingleResult();
        $physicalData = [
            round($physicalStats['endurance'] ?? 0, 1),
            round($physicalStats['strength'] ?? 0, 1),
            round($physicalStats['speed'] ?? 0, 1),
        ];

        return $this->render('dashboard/index.html.twig', [
            'joueurs_added_today' => $joueursAddedTodayCount,
            'total_players' => $totalPlayers,
            'active_players' => $activePlayers,
            'topPerformers' => $topPerformers,
            'sport_distribution' => $sportAvgScores,
            'sport_names' => $sportNames,
            'physical_data' => $physicalData,
        ]);
    }
}