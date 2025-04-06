<?php

namespace App\Controller;

use App\Entity\HistoriqueClub;
use App\Form\HistoriqueClubType;
use App\Repository\HistoriqueClubRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/historique/club')]
class HistoriqueClubController extends AbstractController
{
    #[Route('/', name: 'app_historique_club_index', methods: ['GET'])]
    public function index(HistoriqueClubRepository $historiqueClubRepository): Response
    {
        return $this->render('historique_club/index.html.twig', [
            'historique_clubs' => $historiqueClubRepository->findAll(),
        ]);
    }

    #[Route('/statistics', name: 'app_historique_club_stats', methods: ['GET'])]
    public function stats(HistoriqueClubRepository $historiqueClubRepository): Response
    {
        // Example statistics - customize with your actual data needs
        $stats = [
            'total_entries' => $historiqueClubRepository->count([]),
            'current_players' => $historiqueClubRepository->createQueryBuilder('h')
                ->select('COUNT(h.idHistorique)')
                ->where('h.saisonFin IS NULL')
                ->getQuery()
                ->getSingleScalarResult(),
            // Add more statistics as needed
    ];

    return $this->render('historique_club/stats.html.twig', [
        'stats' => $stats,
    ]);
}

    #[Route('/new', name: 'app_historique_club_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $historiqueClub = new HistoriqueClub();
        $form = $this->createForm(HistoriqueClubType::class, $historiqueClub);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($historiqueClub);
            $entityManager->flush();

            return $this->redirectToRoute('app_historique_club_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('historique_club/new.html.twig', [
            'historique_club' => $historiqueClub,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{idHistorique}', name: 'app_historique_club_show', methods: ['GET'])]
    public function show(HistoriqueClub $historiqueClub): Response
    {
        return $this->render('historique_club/show.html.twig', [
            'historique_club' => $historiqueClub,
        ]);
    }

    #[Route('/{idHistorique}/edit', name: 'app_historique_club_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, HistoriqueClub $historiqueClub, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(HistoriqueClubType::class, $historiqueClub);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_historique_club_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('historique_club/edit.html.twig', [
            'historique_club' => $historiqueClub,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{idHistorique}', name: 'app_historique_club_delete', methods: ['POST'])]
    public function delete(Request $request, HistoriqueClub $historiqueClub, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$historiqueClub->getIdHistorique(), $request->request->get('_token'))) {
            $entityManager->remove($historiqueClub);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_historique_club_index', [], Response::HTTP_SEE_OTHER);
    }
    
    #[Route('/joueur/{joueurId}', name: 'app_historique_club_by_joueur', methods: ['GET'])]
    public function findByJoueur(int $joueurId, HistoriqueClubRepository $historiqueClubRepository): Response
    {
        $historique = $historiqueClubRepository->findByJoueur($joueurId);
        
        return $this->render('historique_club/by_joueur.html.twig', [
            'historique' => $historique,
            'joueurId' => $joueurId
        ]);
    }
    
    #[Route('/club/{clubId}/current', name: 'app_historique_club_current_by_club', methods: ['GET'])]
    public function findCurrentPlayersByClub(int $clubId, HistoriqueClubRepository $historiqueClubRepository): Response
    {
        $currentPlayers = $historiqueClubRepository->findCurrentPlayersByClub($clubId);
        
        return $this->render('historique_club/current_by_club.html.twig', [
            'currentPlayers' => $currentPlayers,
            'clubId' => $clubId
        ]);
    }
}