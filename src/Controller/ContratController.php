<?php

namespace App\Controller;

use App\Entity\Contrat;
use App\Entity\Sponsor;
use App\Form\ContratType;
use App\Repository\ContratRepository;
use App\Repository\SponsorRepository; // Add this import
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

#[Route('/contrat')]
class ContratController extends AbstractController
{
    #[Route('/main', name: 'contrat_main', methods: ['GET'])]
    public function index(ContratRepository $contratRepository): Response
    {
    $contrats = $contratRepository->findAll();
    $recentContrats = $contratRepository->findRecentContracts(5); // Fetch the 5 most recent contracts

    return $this->render('contrat/main.html.twig', [
        'contrats' => $contrats,
        'recentContrats' => $recentContrats,
    ]);
    }

    #[Route('/new', name: 'contrat_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $contrat = new Contrat();
        $form = $this->createForm(ContratType::class, $contrat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($contrat);
            $entityManager->flush();

            return $this->redirectToRoute('contrat_main');
        }

        return $this->render('contrat/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/edit', name: 'contrat_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Contrat $contrat, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ContratType::class, $contrat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('contrat_main');
        }

        return $this->render('contrat/edit.html.twig', [
            'form' => $form->createView(),
            'contrat' => $contrat,
        ]);
    }

    #[Route('/{id}', name: 'contrat_show', methods: ['GET'])]
    public function show(Contrat $contrat): Response
    {
        return $this->render('contrat/show.html.twig', [
            'contrat' => $contrat,
        ]);
    }

    #[Route('/{id}', name: 'contrat_delete', methods: ['POST'])]
    public function delete(Request $request, Contrat $contrat, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$contrat->getIdContrat(), $request->request->get('_token'))) {
            $entityManager->remove($contrat);
            $entityManager->flush();
        }

        return $this->redirectToRoute('contrat_main');
    }

    #[Route('/statistics', name: 'contrat_statistics', methods: ['GET'])]
public function statistics(Request $request): Response
{
    $this->logger->info('Entering statistics action', ['uri' => $request->getUri()]);

    // Total number of contracts
    $totalContracts = $this->contratRepository->count([]);
    $this->logger->info('Total contracts: ' . $totalContracts);

    // Fetch all contracts
    $allContracts = $this->contratRepository->findAll();
    $this->logger->info('Fetched ' . count($allContracts) . ' contracts');

    // Compute montant distribution (histogram-like)
    $montantDistribution = $this->getMontantDistribution($allContracts);
    $this->logger->info('Computed montant distribution: ' . json_encode($montantDistribution));

    $this->logger->info('Rendering statistics.html.twig');
    return $this->render('contrat/statistics.html.twig', [
        'totalContracts' => $totalContracts,
        'montantDistribution' => $montantDistribution,
        'allContracts' => $allContracts,
    ]);
}

    private function getMontantDistribution(array $contracts): array
    {
        // Define bins for the montant distribution
        $bins = [
            '0-2500' => 0,
            '2500-5000' => 0,
            '5000-10000' => 0,
            '10000-15000' => 0,
            '15000-20000' => 0,
            '20000+' => 0,
        ];

        foreach ($contracts as $contract) {
            $montant = $contract->getMontant();
            if ($montant < 2500) {
                $bins['0-2500']++;
            } elseif ($montant < 5000) {
                $bins['2500-5000']++;
            } elseif ($montant < 10000) {
                $bins['5000-10000']++;
            } elseif ($montant < 15000) {
                $bins['10000-15000']++;
            } elseif ($montant < 20000) {
                $bins['15000-20000']++;
            } else {
                $bins['20000+']++;
            }
        }

        return $bins;
    }

}