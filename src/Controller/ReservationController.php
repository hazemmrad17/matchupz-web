<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Form\ReservationType;
use App\Repository\ReservationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/reservation')]
class ReservationController extends AbstractController
{
    #[Route('/', name: 'reservation_index', methods: ['GET'])]
    public function index(ReservationRepository $reservationRepository): Response
    {
        $reservations = $reservationRepository->findAll();
        $upcomingReservations = $reservationRepository->findUpcomingConfirmed(5);

        return $this->render('reservation/index.html.twig', [
            'reservations' => $reservations,
            'upcoming_reservations' => $upcomingReservations,
        ]);
    }

    #[Route('/new', name: 'reservation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reservation = new Reservation();
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reservation);
            $entityManager->flush();

            $this->addFlash('success', 'Réservation créée avec succès!');
            return $this->redirectToRoute('reservation_index');
        }

        return $this->render('reservation/new.html.twig', [
            'reservation' => $reservation,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/statistics', name: 'reservation_statistics', methods: ['GET'])]
    public function statistics(ReservationRepository $reservationRepository): Response
    {
        $reservations = $reservationRepository->findAll();

        // Total number of reservations
        $totalReservations = count($reservations);

        // Status distribution
        $statusDistribution = $reservationRepository->getStatusDistribution();

        // Motif distribution
        $motifDistribution = $reservationRepository->getMotifDistribution();

        // Reservations per espace sportif
        $espaceDistribution = $reservationRepository->getEspaceDistribution();

        return $this->render('reservation/statistics.html.twig', [
            'totalReservations' => $totalReservations,
            'statusDistribution' => $statusDistribution,
            'motifDistribution' => $motifDistribution,
            'espaceDistribution' => $espaceDistribution,
            'allReservations' => $reservations,
        ]);
    }

    #[Route('/{id_reservation}', name: 'reservation_show', methods: ['GET'], requirements: ['id_reservation' => '\d+'])]
    public function show(?Reservation $reservation, Request $request): Response
    {
        if (!$reservation) {
            throw $this->createNotFoundException('La réservation avec l\'ID ' . $request->attributes->get('id_reservation') . ' n\'existe pas');
        }

        return $this->render('reservation/show.html.twig', [
            'reservation' => $reservation,
        ]);
    }

    #[Route('/{id_reservation}/edit', name: 'reservation_edit', methods: ['GET', 'POST'], requirements: ['id_reservation' => '\d+'])]
    public function edit(Request $request, ?Reservation $reservation, EntityManagerInterface $entityManager): Response
    {
        if (!$reservation) {
            throw $this->createNotFoundException('La réservation avec l\'ID ' . $request->attributes->get('id_reservation') . ' n\'existe pas');
        }

        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Réservation mise à jour avec succès!');
            return $this->redirectToRoute('reservation_index');
        }

        return $this->render('reservation/edit.html.twig', [
            'reservation' => $reservation,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id_reservation}', name: 'reservation_delete', methods: ['POST'], requirements: ['id_reservation' => '\d+'])]
    public function delete(Request $request, ?Reservation $reservation, EntityManagerInterface $entityManager): Response
    {
        if (!$reservation) {
            throw $this->createNotFoundException('La réservation avec l\'ID ' . $request->attributes->get('id_reservation') . ' n\'existe pas');
        }

        if ($this->isCsrfTokenValid('delete'.$reservation->getIdReservation(), $request->request->get('_token'))) {
            $entityManager->remove($reservation);
            $entityManager->flush();

            $this->addFlash('success', 'Réservation supprimée avec succès!');
        }

        return $this->redirectToRoute('reservation_index');
    }
}