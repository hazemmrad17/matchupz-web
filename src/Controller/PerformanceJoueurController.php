<?php

namespace App\Controller;

use App\Entity\PerformanceJoueur;
use App\Form\PerformanceJoueurType;
use App\Repository\PerformanceJoueurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/performance_joueur')]
class PerformanceJoueurController extends AbstractController
{
    private function getStats(PerformanceJoueurRepository $repository): array
    {
        $performances = $repository->findAll();
        
        $stats = [
            'total_performances' => count($performances),
            'total_matches' => 0,
            'total_minutes' => 0,
            'total_goals' => 0,
            'total_assists' => 0,
            'total_yellow_cards' => 0,
            'total_red_cards' => 0
        ];

        foreach ($performances as $performance) {
            $stats['total_matches'] += $performance->getNombreMatches() ?? 0;
            $stats['total_minutes'] += $performance->getMinutesJouees() ?? 0;
            $stats['total_goals'] += $performance->getButsMarques() ?? 0;
            $stats['total_assists'] += $performance->getPassesDecisives() ?? 0;
            $stats['total_yellow_cards'] += $performance->getCartonsJaunes() ?? 0;
            $stats['total_red_cards'] += $performance->getCartonsRouges() ?? 0;
        }

        return $stats;
    }

    #[Route('/stats', name: 'performance_joueur_stats', methods: ['GET'])]
    public function stats(PerformanceJoueurRepository $repository): Response
    {
        $stats = $this->getStats($repository);

        return $this->render('performance_joueur/statistics.html.twig', [
            'stats' => $stats,
        ]);
    }

    #[Route('/', name: 'performance_joueur_index', methods: ['GET'])]
    public function index(PerformanceJoueurRepository $repository): Response
    {
        $performanceJoueurs = $repository->findAll();
        $stats = $this->getStats($repository);

        return $this->render('performance_joueur/index.html.twig', [
            'performance_joueurs' => $performanceJoueurs,
            'stats' => $stats,
        ]);
    }

    #[Route('/new', name: 'performance_joueur_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $performanceJoueur = new PerformanceJoueur();
        $form = $this->createForm(PerformanceJoueurType::class, $performanceJoueur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($performanceJoueur);
            $entityManager->flush();

            return $this->redirectToRoute('performance_joueur_index');
        }

        return $this->render('performance_joueur/new.html.twig', [
            'performance_joueur' => $performanceJoueur,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{idPerformance}', name: 'performance_joueur_show', methods: ['GET'])]
    public function show(PerformanceJoueur $performanceJoueur): Response
    {
        return $this->render('performance_joueur/show.html.twig', [
            'performance_joueur' => $performanceJoueur,
        ]);
    }

    #[Route('/{idPerformance}/edit', name: 'performance_joueur_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, PerformanceJoueur $performanceJoueur, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PerformanceJoueurType::class, $performanceJoueur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('performance_joueur_index');
        }

        return $this->render('performance_joueur/edit.html.twig', [
            'performance_joueur' => $performanceJoueur,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{idPerformance}', name: 'performance_joueur_delete', methods: ['POST'])]
    public function delete(Request $request, PerformanceJoueur $performanceJoueur, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$performanceJoueur->getIdPerformance(), $request->request->get('_token'))) {
            $entityManager->remove($performanceJoueur);
            $entityManager->flush();
        }

        return $this->redirectToRoute('performance_joueur_index');
    }

    
}