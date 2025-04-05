<?php

namespace App\Controller;

use App\Entity\Club;
use App\Form\ClubType;
use App\Repository\ClubRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/club')]
class ClubController extends AbstractController
{
    #[Route('/', name: 'club_index', methods: ['GET'])]
    public function index(ClubRepository $clubRepository): Response
    {
        $clubs = $clubRepository->findAll();
        $clubsWithPhotos = count(array_filter($clubs, fn($club) => $club->getPhotoUrl() !== null));

        return $this->render('club/index.html.twig', [
            'clubs' => $clubs,
            'clubs_with_photos' => $clubsWithPhotos,
        ]);
    }

    #[Route('/new', name: 'club_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $club = new Club();
        $form = $this->createForm(ClubType::class, $club);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($club);
            $entityManager->flush();

            $this->addFlash('success', 'Club created successfully!');
            return $this->redirectToRoute('club_index');
        }

        return $this->render('club/new.html.twig', [
            'club' => $club,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{idClub}', name: 'club_show', methods: ['GET'], requirements: ['idClub' => '\d+'])]
    public function show(?Club $club, Request $request): Response
    {
        if (!$club) {
            throw $this->createNotFoundException('The club with ID ' . $request->attributes->get('idClub') . ' does not exist');
        }

        return $this->render('club/show.html.twig', [
            'club' => $club,
        ]);
    }

    #[Route('/{idClub}/edit', name: 'club_edit', methods: ['GET', 'POST'], requirements: ['idClub' => '\d+'])]
    public function edit(Request $request, ?Club $club, EntityManagerInterface $entityManager): Response
    {
        if (!$club) {
            throw $this->createNotFoundException('The club with ID ' . $request->attributes->get('idClub') . ' does not exist');
        }

        $form = $this->createForm(ClubType::class, $club);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Club updated successfully!');
            return $this->redirectToRoute('club_index');
        }

        return $this->render('club/edit.html.twig', [
            'club' => $club,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{idClub}', name: 'club_delete', methods: ['POST'], requirements: ['idClub' => '\d+'])]
    public function delete(Request $request, ?Club $club, EntityManagerInterface $entityManager): Response
    {
        if (!$club) {
            throw $this->createNotFoundException('The club with ID ' . $request->attributes->get('idClub') . ' does not exist');
        }

        if ($this->isCsrfTokenValid('delete'.$club->getIdClub(), $request->request->get('_token'))) {
            $entityManager->remove($club);
            $entityManager->flush();

            $this->addFlash('success', 'Club deleted successfully!');
        }

        return $this->redirectToRoute('club_index');
    }

    #[Route('/statistics', name: 'club_statistics', methods: ['GET'])]
    public function statistics(ClubRepository $clubRepository): Response
    {
        $clubs = $clubRepository->findAll();

        $totalClubs = count($clubs);
        $clubsWithPhotos = count(array_filter($clubs, fn($club) => $club->getPhotoUrl() !== null));
        $clubsWithoutPhotos = $totalClubs - $clubsWithPhotos;

        return $this->render('club/statistics.html.twig', [
            'totalClubs' => $totalClubs,
            'clubsWithPhotos' => $clubsWithPhotos,
            'clubsWithoutPhotos' => $clubsWithoutPhotos,
            'allClubs' => $clubs,
        ]);
    }


}