<?php

namespace App\Controller;

use App\Entity\EvaluationPhysique;
use App\Form\EvaluationPhysiqueType;
use App\Repository\EvaluationPhysiqueRepository;
use App\Repository\JoueurRepository;  // Fixed the use statement
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/evaluation/physique')]
class EvaluationPhysiqueController extends AbstractController
{
    #[Route('/statistiques', name: 'app_evaluation_physique_stats', methods: ['GET'])]
    public function statistics(
        EvaluationPhysiqueRepository $evaluationRepository,
        JoueurRepository $joueurRepository
    ): Response {
        // Basic stats
        $totalPlayers = $joueurRepository->count([]);
        $evaluatedPlayersCount = $evaluationRepository->countDistinctPlayers();
        
        // Performance trends (last 6 months)
        $performanceTrends = $evaluationRepository->getPerformanceTrends();
        
        // Average scores
        $averageScores = $evaluationRepository->getAverageScores();
        
        // Recent evaluations (last 30 days)
        $recentEvaluations = $evaluationRepository->findRecentEvaluations();
        
        // Player rankings (top 10)
        $topPlayers = $evaluationRepository->findTopPlayers(10);
        
        return $this->render('evaluation_physique/statistics.html.twig', [
            'total_players' => $totalPlayers,
            'evaluated_players' => $evaluatedPlayersCount,
            'performance_trends' => $performanceTrends,
            'average_scores' => $averageScores,
            'recent_evaluations' => $recentEvaluations,
            'top_players' => $topPlayers,
            'evaluation_rate' => $totalPlayers > 0 ? 
                ($evaluatedPlayersCount / $totalPlayers * 100) : 0
        ]);
    }

    #[Route('/maintenance', name: 'app_maintenance')]
    public function maintenance(): Response
    {
        return $this->render('maintenance.html.twig', [
            'show_upgrade_button' => false // Set to true if you want the upgrade button
        ]);
    }

    #[Route('/', name: 'app_evaluation_physique_index', methods: ['GET'])]
    public function index(
        EvaluationPhysiqueRepository $evaluationRepository,
        JoueurRepository $joueurRepository
    ): Response {
        // Get all evaluations
        $evaluations = $evaluationRepository->findAll();
        $totalPlayers = $joueurRepository->count([]);
        
        // Initialize variables
        $playerNames = [];
        $enduranceScores = [];
        $forceScores = [];
        $vitesseScores = [];
        $evaluatedPlayers = [];
        
        // Process evaluations
        foreach ($evaluations as $evaluation) {
            if ($evaluation->getJoueur()) {
                $playerId = $evaluation->getJoueur()->getIdJoueur();
                if (!in_array($playerId, $evaluatedPlayers)) {
                    $evaluatedPlayers[] = $playerId;
                }
                $playerNames[] = $evaluation->getJoueur()->getNom() . ' ' . $evaluation->getJoueur()->getPrenom();
                $enduranceScores[] = $evaluation->getNiveauEndurance() ?? 0;
                $forceScores[] = $evaluation->getForcePhysique() ?? 0;
                $vitesseScores[] = $evaluation->getVitesse() ?? 0;
            }
        }
        
        // Calculate statistics
        $stats = [
            'players_evaluated' => count($evaluatedPlayers),
            'total_players' => $totalPlayers,
            'avg_endurance' => $this->calculateAverage($enduranceScores),
            'avg_force' => $this->calculateAverage($forceScores),
            'avg_vitesse' => $this->calculateAverage($vitesseScores),
            'eval_count' => count($evaluations)
        ];
        
        return $this->render('evaluation_physique/index.html.twig', [
            'evaluation_physiques' => $evaluations,
            'playerNames' => $playerNames,
            'enduranceScores' => $enduranceScores,
            'forceScores' => $forceScores,
            'vitesseScores' => $vitesseScores,
            'stats' => $stats
        ]);
    }
    
    private function calculateAverage(array $scores): float 
    {
        if (empty($scores)) {
            return 0;
        }
        return array_sum($scores) / count($scores);
    }

    #[Route('/new', name: 'app_evaluation_physique_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $evaluationPhysique = new EvaluationPhysique();
        $form = $this->createForm(EvaluationPhysiqueType::class, $evaluationPhysique);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($evaluationPhysique);
            $entityManager->flush();

            return $this->redirectToRoute('app_evaluation_physique_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('evaluation_physique/new.html.twig', [
            'evaluation_physique' => $evaluationPhysique,
            'form' => $form,
        ]);
    }

    #[Route('/{idEvaluation}', name: 'app_evaluation_physique_show', methods: ['GET'])]
    public function show(EvaluationPhysique $evaluationPhysique): Response
    {
        return $this->render('evaluation_physique/show.html.twig', [
            'evaluation_physique' => $evaluationPhysique,
        ]);
    }

    #[Route('/{idEvaluation}/edit', name: 'app_evaluation_physique_edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request, 
        EvaluationPhysique $evaluationPhysique, 
        EntityManagerInterface $entityManager
    ): Response {
        $form = $this->createForm(EvaluationPhysiqueType::class, $evaluationPhysique);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash('success', 'Évaluation mise à jour avec succès');
            return $this->redirectToRoute('app_evaluation_physique_show', [
                'idEvaluation' => $evaluationPhysique->getIdEvaluation()
            ], Response::HTTP_SEE_OTHER);
        }

        return $this->render('evaluation_physique/edit.html.twig', [
            'evaluation_physique' => $evaluationPhysique,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{idEvaluation}', name: 'app_evaluation_physique_delete', methods: ['POST'])]
    public function delete(
        Request $request, 
        EvaluationPhysique $evaluationPhysique, 
        EntityManagerInterface $entityManager
    ): Response {
        if ($this->isCsrfTokenValid('delete'.$evaluationPhysique->getIdEvaluation(), $request->request->get('_token'))) {
            $entityManager->remove($evaluationPhysique);
            $entityManager->flush();
            $this->addFlash('success', 'Évaluation supprimée avec succès');
        }

        return $this->redirectToRoute('app_evaluation_physique_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/club/{clubName}/current', name: 'app_historique_club_current_by_club', methods: ['GET'])]
    public function findCurrentPlayersByClub(string $clubName, HistoriqueClubRepository $historiqueClubRepository): Response
    {
        $currentPlayers = $historiqueClubRepository->findCurrentPlayersByClub($clubName);
        
        return $this->render('historique_club/current_by_club.html.twig', [
            'currentPlayers' => $currentPlayers,
            'clubName' => $clubName
        ]);
    }

}