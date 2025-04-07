<?php

namespace App\Controller;

use App\Entity\Espacesportif;
use App\Form\EspacesportifType;
use App\Repository\EspacesportifRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bridge\Doctrine\Attribute\MapEntity;

#[Route('/espace')]
class EspacesportifController extends AbstractController
{
    #[Route('/', name: 'espace_index', methods: ['GET'])]
    public function index(EspacesportifRepository $espaceSportifRepository): Response
    {
        $espaces = $espaceSportifRepository->findAll();
        $topCapacite = $espaceSportifRepository->findTopCapacite(5);

        // Data for widgets
        $totalEspaces = $espaceSportifRepository->countTotalEspaces();
        $espacesWithReservations = count(array_filter($espaces, fn($espace) => $espace->getReservations()->count() > 0));

        return $this->render('espace/index.html.twig', [
            'espaces' => $espaces,
            'top_capacite' => $topCapacite,
            'totalEspaces' => $totalEspaces,
            'espacesWithReservations' => $espacesWithReservations,
        ]);
    }

    #[Route('/new', name: 'espace_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $espace = new Espacesportif();
        $form = $this->createForm(EspacesportifType::class, $espace);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $entityManager->persist($espace);
                $entityManager->flush();

                $this->addFlash('success', 'Espace sportif créé avec succès!');
                return $this->redirectToRoute('espace_index');
            } else {
                $this->addFlash('error', 'Erreur lors de la création de l\'espace sportif. Veuillez vérifier les champs.');
            }
        }

        return $this->render('espace/new.html.twig', [
            'espace' => $espace,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id_lieu}', name: 'espace_show', methods: ['GET'], requirements: ['id_lieu' => '\d+'])]
    public function show(#[MapEntity(mapping: ['id_lieu' => 'id_lieu'])] Espacesportif $espace = null, Request $request): Response
    {
        if (!$espace) {
            throw $this->createNotFoundException('L\'espace sportif avec l\'ID ' . $request->attributes->get('id_lieu') . ' n\'existe pas');
        }

        return $this->render('espace/show.html.twig', [
            'espace' => $espace,
        ]);
    }

    #[Route('/{id_lieu}/edit', name: 'espace_edit', methods: ['GET', 'POST'], requirements: ['id_lieu' => '\d+'])]
    public function edit(Request $request, #[MapEntity(mapping: ['id_lieu' => 'id_lieu'])] Espacesportif $espace = null, EntityManagerInterface $entityManager): Response
    {
        if (!$espace) {
            throw $this->createNotFoundException('L\'espace sportif avec l\'ID ' . $request->attributes->get('id_lieu') . ' n\'existe pas');
        }

        $form = $this->createForm(EspacesportifType::class, $espace);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $entityManager->flush();

                $this->addFlash('success', 'Espace sportif mis à jour avec succès!');
                return $this->redirectToRoute('espace_index');
            } else {
                $this->addFlash('error', 'Erreur lors de la mise à jour de l\'espace sportif. Veuillez vérifier les champs.');
            }
        }

        return $this->render('espace/edit.html.twig', [
            'espace' => $espace,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id_lieu}', name: 'espace_delete', methods: ['POST'], requirements: ['id_lieu' => '\d+'])]
    public function delete(Request $request, #[MapEntity(mapping: ['id_lieu' => 'id_lieu'])] Espacesportif $espace = null, EntityManagerInterface $entityManager): Response
    {
        if (!$espace) {
            throw $this->createNotFoundException('L\'espace sportif avec l\'ID ' . $request->attributes->get('id_lieu') . ' n\'existe pas');
        }

        if ($this->isCsrfTokenValid('delete'.$espace->getIdLieu(), $request->request->get('_token'))) {
            $entityManager->remove($espace);
            $entityManager->flush();

            $this->addFlash('success', 'Espace sportif supprimé avec succès!');
        } else {
            $this->addFlash('error', 'Erreur lors de la suppression de l\'espace sportif.');
        }

        return $this->redirectToRoute('espace_index');
    }

    #[Route('/statistics', name: 'espace_statistics', methods: ['GET'])]
    public function statistics(EntityManagerInterface $entityManager): Response
    {
        $espaceSportifRepository = $entityManager->getRepository(Espacesportif::class);

        $allEspaces = $espaceSportifRepository->findAll();

        // Total number of espaces
        $totalEspaces = $espaceSportifRepository->countTotalEspaces();

        // Average capacity
        $averageCapacite = $espaceSportifRepository->averageCapacite();

        // Category distribution
        $categories = ['terrain foot', 'terrain basket', 'salle gym', 'football', 'Football\''];
        $categorieDistribution = [];
        foreach ($categories as $categorie) {
            $categorieDistribution[$categorie] = count($espaceSportifRepository->findByCategorie($categorie));
        }

        // Reservations per espace
        $reservationDistribution = $espaceSportifRepository->getReservationDistribution();

        // Espaces with vs without reservations
        $reservationStatusDistribution = $espaceSportifRepository->getReservationStatusDistribution();

        return $this->render('espace/statistics.html.twig', [
            'totalEspaces' => $totalEspaces,
            'averageCapacite' => $averageCapacite,
            'categorieDistribution' => $categorieDistribution,
            'reservationDistribution' => $reservationDistribution,
            'reservationStatusDistribution' => $reservationStatusDistribution,
            'allEspaces' => $allEspaces,
        ]);
    }
}