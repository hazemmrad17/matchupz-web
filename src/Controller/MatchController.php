<?php

namespace App\Controller;

use App\Entity\MatchEntity;
use App\Form\MatchType;
use App\Repository\MatchEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/match')]
class MatchController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/main', name: 'match_main', methods: ['GET'])]
    public function index(MatchEntityRepository $matchEntityRepository): Response
    {
        $matches = $matchEntityRepository->findAll();
        // For MatchEntity, we don't have a 'taille' equivalent, so let's sort by sportType as an example
        $topMatches = $matchEntityRepository->findBy([], ['sportType' => 'ASC'], 4);

        return $this->render('match/main.html.twig', [
            'matches' => $matches,
            'topMatches' => $topMatches,
        ]);
    }

    #[Route('/new', name: 'match_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $match = new MatchEntity();
        $form = $this->createForm(MatchType::class, $match);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // MatchEntity doesn't have a profile picture, so we skip the file upload logic
            $this->entityManager->persist($match);
            $this->entityManager->flush();

            $this->addFlash('success', 'Match créé avec succès!');
            return $this->redirectToRoute('match_main');
        }

        return $this->render('match/new.html.twig', [
            'match' => $match,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/stats', name: 'match_statistics', methods: ['GET'])]
    public function statistics(): Response
    {
        // Total number of matches
        $totalMatches = $this->entityManager->getRepository(MatchEntity::class)->count([]);

        // MatchEntity doesn't have numeric fields like taille or poids, so we'll skip average calculations
        // Instead, we can count matches per sportType
        $sportTypeDistribution = $this->entityManager->createQuery(
            'SELECT m.sportType, COUNT(m.idMatch) AS count FROM App\Entity\MatchEntity m GROUP BY m.sportType'
        )->getResult();
        $sportTypeDist = [];
        foreach ($sportTypeDistribution as $data) {
            $sportTypeDist[$data['sportType'] ?? 'Unknown'] = $data['count'];
        }

        // Count matches with schedules
        $scheduleDistribution = $this->entityManager->createQuery(
            'SELECT CASE WHEN SIZE(m.schedules) > 0 THEN \'With Schedules\' ELSE \'No Schedules\' END AS hasSchedules, COUNT(m.idMatch) AS count FROM App\Entity\MatchEntity m GROUP BY hasSchedules'
        )->getResult();
        $scheduleDist = [];
        foreach ($scheduleDistribution as $data) {
            $scheduleDist[$data['hasSchedules']] = $data['count'];
        }

        // All matches
        $allMatches = $this->entityManager->getRepository(MatchEntity::class)->findAll();

        return $this->render('match/statistics.html.twig', [
            'totalMatches' => $totalMatches,
            'sportTypeDistribution' => $sportTypeDist,
            'scheduleDistribution' => $scheduleDist,
            'allMatches' => $allMatches,
        ]);
    }

    #[Route('/{id}/edit', name: 'match_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ?MatchEntity $match): Response
    {
        if (!$match) {
            throw $this->createNotFoundException('Match not found');
        }
        $form = $this->createForm(MatchType::class, $match);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // MatchEntity doesn't have a profile picture, so we skip the file upload logic
            $this->entityManager->flush();

            $this->addFlash('success', 'Match mis à jour avec succès!');
            return $this->redirectToRoute('match_main');
        }

        return $this->render('match/edit.html.twig', [
            'match' => $match,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/delete', name: 'match_delete', methods: ['POST'])]
    public function delete(Request $request, ?MatchEntity $match): Response
    {
        if (!$match) {
            throw $this->createNotFoundException('Match not found');
        }
        if ($this->isCsrfTokenValid('delete'.$match->getIdMatch(), $request->request->get('_token'))) {
            // MatchEntity doesn't have a profile picture, so we skip the file deletion logic
            $this->entityManager->remove($match);
            $this->entityManager->flush();

            $this->addFlash('success', 'Match supprimé avec succès!');
        }

        return $this->redirectToRoute('match_main');
    }

    #[Route('/{id}', name: 'match_show', methods: ['GET'])]
    public function show(?MatchEntity $match): Response
    {
        if (!$match) {
            throw $this->createNotFoundException('Match not found');
        }
        return $this->render('match/show.html.twig', [
            'match' => $match,
        ]);
    }
}