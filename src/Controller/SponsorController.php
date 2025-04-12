<?php

namespace App\Controller;

use App\Entity\Sponsor;
use App\Form\SponsorType;
use App\Repository\SponsorRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/sponsor')]
class SponsorController extends AbstractController
{
    private $sponsorRepository;

    public function __construct(SponsorRepository $sponsorRepository)
    {
        $this->sponsorRepository = $sponsorRepository;
    }

    #[Route('/main', name: 'sponsor_main', methods: ['GET'])]
    public function main(): Response
    {
        $sponsors = $this->sponsorRepository->findAll();

        return $this->render('sponsor/main.html.twig', [
            'sponsors' => $sponsors,
        ]);
    }

    #[Route('/statistics', name: 'sponsor_statistics', methods: ['GET'])]
    public function statistics(): Response
    {
        // Total number of sponsors
        $totalSponsors = $this->sponsorRepository->count([]);

        // Fetch all sponsors
        $allSponsors = $this->sponsorRepository->findAll();

        // Compute pack distribution
        $packDistribution = $this->getPackDistribution($allSponsors);

        // Compute top sponsors (e.g., by number of contracts)
        $topSponsors = $this->getTopSponsors($allSponsors);

        return $this->render('sponsor/statistics.html.twig', [
            'totalSponsors' => $totalSponsors,
            'packDistribution' => $packDistribution,
            'allSponsors' => $allSponsors,
            'topSponsors' => $topSponsors,
        ]);
    }

    private function getPackDistribution(array $sponsors): array
    {
        $packs = ['Bronze' => 0, 'Silver' => 0, 'Gold' => 0, 'Platinum' => 0];
        foreach ($sponsors as $sponsor) {
            $pack = $sponsor->getPack();
            if (isset($packs[$pack])) {
                $packs[$pack]++;
            }
        }
        return $packs;
    }

    private function getTopSponsors(array $sponsors): array
    {
        // Sort sponsors by number of contracts (descending)
        usort($sponsors, function ($a, $b) {
            return $b->getContrats()->count() <=> $a->getContrats()->count();
        });

        // Take the top 5 sponsors
        return array_slice($sponsors, 0, 5);
    }

    #[Route('/new', name: 'sponsor_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $sponsor = new Sponsor();
        $form = $this->createForm(SponsorType::class, $sponsor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($sponsor);
            $entityManager->flush();

            return $this->redirectToRoute('sponsor_main');
        }

        return $this->render('sponsor/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'sponsor_show', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function show(int $id): Response
    {
        $sponsor = $this->sponsorRepository->find($id);

        if (!$sponsor) {
            throw $this->createNotFoundException('The sponsor with ID ' . $id . ' does not exist.');
        }

        return $this->render('sponsor/show.html.twig', [
            'sponsor' => $sponsor,
        ]);
    }

    #[Route('/{id}/edit', name: 'sponsor_edit', methods: ['GET', 'POST'], requirements: ['id' => '\d+'])]
    public function edit(Request $request, int $id, EntityManagerInterface $entityManager): Response
    {
        $sponsor = $this->sponsorRepository->find($id);

        if (!$sponsor) {
            throw $this->createNotFoundException('The sponsor with ID ' . $id . ' does not exist.');
        }

        $form = $this->createForm(SponsorType::class, $sponsor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('sponsor_main');
        }

        return $this->render('sponsor/edit.html.twig', [
            'form' => $form->createView(),
            'sponsor' => $sponsor,
        ]);
    }

    #[Route('/{id}', name: 'sponsor_delete', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function delete(Request $request, int $id, EntityManagerInterface $entityManager): Response
    {
        $sponsor = $this->sponsorRepository->find($id);

        if (!$sponsor) {
            throw $this->createNotFoundException('The sponsor with ID ' . $id . ' does not exist.');
        }

        if ($this->isCsrfTokenValid('delete' . $sponsor->getIdSponsor(), $request->request->get('_token'))) {
            $entityManager->remove($sponsor);
            $entityManager->flush();
        }

        return $this->redirectToRoute('sponsor_main');
    }
}