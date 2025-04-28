<?php

namespace App\Controller;

use App\Entity\Joueur;
use App\Entity\EvaluationPhysique;
use App\Entity\PerformanceJoueur; 
use App\Entity\Sport;
use App\Form\JoueurType;
use App\Repository\JoueurRepository;
use App\Repository\PerformanceJoueurRepository;
use App\Repository\EvaluationPhysiqueRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Knp\Component\Pager\PaginatorInterface;
use Knp\Snappy\Pdf;

#[Route('/joueur')]
class JoueurController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/test', name: 'joueur_test', methods: ['GET'])]
    public function test(JoueurRepository $joueurRepository): Response
    {
        $joueurs = $joueurRepository->findAll();
        return $this->json([
            'count' => count($joueurs),
            'first_id' => $joueurs[0]->getIdJoueur() ?? 'None',
        ]);
    }
    
    #[Route('/', name: 'joueur_main', methods: ['GET'])]
    public function index(
        JoueurRepository $joueurRepository,
        PerformanceJoueurRepository $performanceRepository,
        EvaluationPhysiqueRepository $evaluationRepository,
        Request $request,
        PaginatorInterface $paginator
    ): Response {
        // Get all players for stats calculation
        $allJoueurs = $joueurRepository->findAll();
        $activePlayers = count(array_filter($allJoueurs, fn($joueur) => $joueur->getStatut() === 'Actif'));

        // Create query for pagination
        $query = $joueurRepository->createQueryBuilder('j')
            ->orderBy('j.nom', 'ASC')
            ->getQuery();

        // Paginate the results (5 players per page)
        $joueurs = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            5
        );

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
            $topPerformers[] = ['joueur' => $joueur, 'score' => $totalScore];

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

        $physicalStats = $evaluationRepository->createQueryBuilder('e')
            ->select('AVG(e.niveauEndurance) as endurance, AVG(e.forcePhysique) as strength, AVG(e.vitesse) as speed')
            ->getQuery()
            ->getSingleResult();
        $physicalData = [
            round($physicalStats['endurance'] ?? 0, 1),
            round($physicalStats['strength'] ?? 0, 1),
            round($physicalStats['speed'] ?? 0, 1),
        ];

        return $this->render('joueur/index.html.twig', [
            'joueurs' => $joueurs,
            'topPerformers' => $topPerformers,
            'sport_distribution' => $sportAvgScores,
            'sport_names' => $sportNames,
            'active_players' => $activePlayers,
            'physical_data' => $physicalData,
            'currentPage' => $joueurs->getCurrentPageNumber(),
            'totalPages' => ceil($joueurs->getTotalItemCount() / $joueurs->getItemNumberPerPage()),
        ]);
    }

    #[Route('/new', name: 'joueur_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $joueur = new Joueur();
        $form = $this->createForm(JoueurType::class, $joueur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Handle profile picture upload
            $profilePictureFile = $form->get('profilePicture')->getData();
            if ($profilePictureFile) {
                $newFilename = uniqid().'.'.$profilePictureFile->guessExtension();
                try {
                    $profilePictureFile->move(
                        $this->getParameter('profile_pictures_directory'),
                        $newFilename
                    );
                    $joueur->setProfilePictureUrl('/uploads/profile_pictures/'.$newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Erreur lors du téléchargement de l\'image');
                    return $this->render('joueur/new.html.twig', [
                        'joueur' => $joueur,
                        'form' => $form->createView(),
                    ]);
                }
            }

            // Handle EvaluationPhysique data
            $evaluationPhysique = $form->get('evaluationPhysique')->getData();
            if ($evaluationPhysique) {
                $evaluationPhysique->setJoueur($joueur);
                $this->entityManager->persist($evaluationPhysique);
            }

            // Handle PerformanceJoueur data
            $performanceJoueur = $form->get('performanceJoueur')->getData();
            if ($performanceJoueur && $performanceJoueur->getSaison()) { // Only persist if saison is provided
                $performanceJoueur->setJoueur($joueur);
                $this->entityManager->persist($performanceJoueur);
            }

            $this->entityManager->persist($joueur);
            $this->entityManager->flush();

            $this->addFlash('success', 'Joueur créé avec succès!');
            return $this->redirectToRoute('joueur_main');
        }

        return $this->render('joueur/new.html.twig', [
            'joueur' => $joueur,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/statistics', name: 'joueur_statistics', methods: ['GET'])]
    public function statistics(
        JoueurRepository $joueurRepository,
        EvaluationPhysiqueRepository $evaluationRepository
    ): Response
    {
        // Total number of players
        $totalPlayers = $joueurRepository->count([]);

        // Average height and weight
        $playerStats = $this->entityManager->createQuery(
            'SELECT AVG(j.taille) AS averageHeight, AVG(j.poids) AS averageWeight FROM App\Entity\Joueur j'
        )->getSingleResult();
        $averageHeight = $playerStats['averageHeight'] ?: 0;
        $averageWeight = $playerStats['averageWeight'] ?: 0;

        // Statut distribution
        $statutDistribution = $this->entityManager->createQuery(
            'SELECT j.statut, COUNT(j.idJoueur) AS count FROM App\Entity\Joueur j GROUP BY j.statut'
        )->getResult();
        $statutDist = [];
        foreach ($statutDistribution as $data) {
            $statutDist[$data['statut']] = $data['count'];
        }

        // Sport distribution
        $sportDistribution = $this->entityManager->createQuery(
            'SELECT s.nomSport, COUNT(j.idJoueur) AS count FROM App\Entity\Joueur j JOIN j.sport s GROUP BY s.nomSport'
        )->getResult();
        $sportDist = [];
        foreach ($sportDistribution as $data) {
            $sportDist[$data['nomSport']] = $data['count'];
        }

        // Poste distribution
        $posteDistribution = $this->entityManager->createQuery(
            'SELECT j.poste, COUNT(j.idJoueur) AS count FROM App\Entity\Joueur j GROUP BY j.poste'
        )->getResult();

        // All players
        $allPlayers = $joueurRepository->findAll();

        // Evaluation physique statistics
        // Total evaluated players
        $evaluatedPlayers = $evaluationRepository->createQueryBuilder('e')
            ->select('COUNT(DISTINCT e.joueur) as count')
            ->getQuery()
            ->getSingleScalarResult();
        $evaluationRate = $totalPlayers > 0 ? ($evaluatedPlayers / $totalPlayers) * 100 : 0;

        // Average physical scores
        $averageScores = $evaluationRepository->createQueryBuilder('e')
            ->select('
                AVG(e.niveauEndurance) as niveauEndurance,
                AVG(e.forcePhysique) as forcePhysique,
                AVG(e.vitesse) as vitesse
            ')
            ->getQuery()
            ->getSingleResult();

        // Top 10 players based on physical score
        $topPlayers = $evaluationRepository->createQueryBuilder('e')
            ->select('j.idJoueur, j.nom, j.prenom, AVG((e.niveauEndurance + e.forcePhysique + e.vitesse) / 3) as score')
            ->join('e.joueur', 'j')
            ->groupBy('j.idJoueur')
            ->orderBy('score', 'DESC')
            ->setMaxResults(6)
            ->getQuery()
            ->getResult();

        // Recent evaluations (last 30 days)
        $recentEvaluations = $evaluationRepository->createQueryBuilder('e')
            ->join('e.joueur', 'j')
            ->where('e.dateEvaluation >= :date')
            ->setParameter('date', new \DateTime('-30 days'))
            ->orderBy('e.dateEvaluation', 'DESC')
            ->setMaxResults(5)
            ->getQuery()
            ->getResult();

        return $this->render('joueur/statistics.html.twig', [
            'totalPlayers' => $totalPlayers,
            'averageHeight' => $averageHeight,
            'averageWeight' => $averageWeight,
            'sportDistribution' => $sportDist,
            'statutDistribution' => $statutDist,
            'posteDistribution' => $posteDistribution,
            'allPlayers' => $allPlayers,
            'evaluatedPlayers' => $evaluatedPlayers,
            'evaluationRate' => $evaluationRate,
            'averageScores' => $averageScores,
            'topPlayers' => $topPlayers,
            'recentEvaluations' => $recentEvaluations,
        ]);
    }

    #[Route('/{id}/edit', name: 'joueur_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ?Joueur $joueur, EntityManagerInterface $entityManager, EvaluationPhysiqueRepository $evaluationRepository, PerformanceJoueurRepository $performanceRepository): Response
    {
        if (!$joueur) {
            throw $this->createNotFoundException('Joueur not found');
        }

        // Fetch or create related entities
        $evaluationPhysique = $joueur->getEvaluationPhysique() ?? new EvaluationPhysique();
        $evaluationPhysique->setJoueur($joueur);
        $joueur->setEvaluationPhysique($evaluationPhysique);

        $performanceJoueur = $performanceRepository->findOneBy(['joueur' => $joueur]) ?? new PerformanceJoueur();
        $performanceJoueur->setJoueur($joueur);
        if (!$joueur->getPerformances()->contains($performanceJoueur)) {
            $joueur->addPerformance($performanceJoueur);
        }

        // Create the form and pass initial data for unmapped fields
        $form = $this->createForm(JoueurType::class, $joueur, [
            'evaluation_physique_data' => $evaluationPhysique,
            'performance_joueur_data' => $performanceJoueur,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Handle profile picture upload
            $profilePictureFile = $form->get('profilePicture')->getData();
            if ($profilePictureFile) {
                $newFilename = uniqid().'.'.$profilePictureFile->guessExtension();
                try {
                    $profilePictureFile->move(
                        $this->getParameter('profile_pictures_directory'),
                        $newFilename
                    );
                    if ($joueur->getProfilePictureUrl()) {
                        $oldFile = $this->getParameter('profile_pictures_directory').'/'.basename($joueur->getProfilePictureUrl());
                        if (file_exists($oldFile)) {
                            unlink($oldFile);
                        }
                    }
                    $joueur->setProfilePictureUrl('/uploads/profile_pictures/'.$newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Erreur lors du téléchargement de l\'image');
                    return $this->render('joueur/edit.html.twig', [
                        'joueur' => $joueur,
                        'form' => $form->createView(),
                    ]);
                }
            }

            // Handle EvaluationPhysique (persisted via cascade)
            $evaluationPhysiqueData = $form->get('evaluationPhysique')->getData();
            $joueur->setEvaluationPhysique($evaluationPhysiqueData);

            // Handle PerformanceJoueur
            $performanceJoueurData = $form->get('performanceJoueur')->getData();
            if ($performanceJoueurData && $performanceJoueurData->getSaison()) {
                $performanceJoueurData->setJoueur($joueur);
                if (!$joueur->getPerformances()->contains($performanceJoueurData)) {
                    $joueur->addPerformance($performanceJoueurData);
                }
                $entityManager->persist($performanceJoueurData);
            }

            $entityManager->persist($joueur);
            $entityManager->flush();

            $this->addFlash('success', 'Joueur mis à jour avec succès!');
            return $this->redirectToRoute('joueur_main');
        }

        return $this->render('joueur/edit.html.twig', [
            'joueur' => $joueur,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'joueur_show', methods: ['GET'])]
    public function show(
        int $id,
        JoueurRepository $joueurRepository,
        PerformanceJoueurRepository $performanceRepository,
        EvaluationPhysiqueRepository $evaluationRepository
    ): Response {
        $joueur = $joueurRepository->find($id);
        if (!$joueur) {
            throw $this->createNotFoundException('Joueur not found');
        }

        $performances = $performanceRepository->findBy(['joueur' => $joueur]);
        $evaluations = $evaluationRepository->findBy(['joueur' => $joueur]);

        return $this->render('joueur/show.html.twig', [
            'joueur' => $joueur,
            'performances' => $performances,
            'evaluations' => $evaluations,
        ]);
    }

    #[Route('/{id}/delete', name: 'joueur_delete', methods: ['POST'])]
    public function delete(Request $request, ?Joueur $joueur): Response
    {
        if (!$joueur) {
            throw $this->createNotFoundException('Joueur not found');
        }
        if ($this->isCsrfTokenValid('delete'.$joueur->getIdJoueur(), $request->request->get('_token'))) {
            if ($joueur->getProfilePictureUrl()) {
                $file = $this->getParameter('profile_pictures_directory').'/'.basename($joueur->getProfilePictureUrl());
                if (file_exists($file)) {
                    unlink($file);
                }
            }
            $this->entityManager->remove($joueur);
            $this->entityManager->flush();

            $this->addFlash('success', 'Joueur supprimé avec succès!');
        }

        return $this->redirectToRoute('joueur_main');
    }

    #[Route('/export/csv', name: 'joueur_export_csv')]
    public function exportCsv(JoueurRepository $joueurRepository): Response
    {
        $joueurs = $joueurRepository->findAll();

        // Create a CSV file in memory
        $output = fopen('php://memory', 'w');

        // Add headers
        fputcsv($output, [
            'Nom',
            'Prénom',
            'Sport',
            'Date de Naissance',
            'Poste',
            'Taille (m)',
            'Poids (kg)',
            'Statut',
            'Email',
            'Téléphone',
        ]);

        // Add data
        foreach ($joueurs as $joueur) {
            fputcsv($output, [
                $joueur->getNom(),
                $joueur->getPrenom(),
                $joueur->getSport() ? $joueur->getSport()->getNomSport() : 'N/A',
                $joueur->getDateNaissance() ? $joueur->getDateNaissance()->format('d/m/Y') : 'N/A',
                $joueur->getPoste() ?? 'N/A',
                $joueur->getTaille() ? number_format($joueur->getTaille(), 2, '.', ',') : 'N/A',
                $joueur->getPoids() ? number_format($joueur->getPoids(), 2, '.', ',') : 'N/A',
                $joueur->getStatut() ?? 'N/A',
                $joueur->getEmail() ?? 'N/A',
                $joueur->getTelephone() ?? 'N/A',
            ]);
        }

        // Rewind the file pointer to the beginning
        fseek($output, 0);

        // Create the response with the CSV content
        $response = new Response(stream_get_contents($output));
        fclose($output);

        // Set headers for download
        $disposition = $response->headers->makeDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'joueurs_export_' . date('Y-m-d') . '.csv'
        );
        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', $disposition);

        return $response;
    }

    #[Route('/export/pdf', name: 'joueur_export_pdf')]
    public function exportPdf(JoueurRepository $joueurRepository, Pdf $knpSnappyPdf): Response
    {
        $joueurs = $joueurRepository->findAll();

        $html = $this->renderView('joueur/export_pdf.html.twig', [
            'joueurs' => $joueurs,
            // Pass the logo path directly if needed
            'logo_path' => $this->getParameter('kernel.project_dir').'/public/img/logo_white.svg'
        ]);

        $pdfOptions = [
            'enable-local-file-access' => true,
            'encoding' => 'UTF-8',
            'margin-top' => 10,
            'margin-bottom' => 10,
            'margin-left' => 10,
            'margin-right' => 10,
            'no-stop-slow-scripts' => true,
        ];

        $pdfContent = $knpSnappyPdf->getOutputFromHtml($html, $pdfOptions);

        $response = new Response($pdfContent);
        $disposition = $response->headers->makeDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'joueurs_export_' . date('Y-m-d') . '.pdf'
        );
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Disposition', $disposition);

        return $response;
        
    }

    #[Route('/export/excel', name: 'joueur_export_excel')]
    public function exportExcel(JoueurRepository $joueurRepository): Response
    {
        $joueurs = $joueurRepository->findAll();

        // Create a new Spreadsheet object
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Set headers
        $sheet->setCellValue('A1', 'Nom');
        $sheet->setCellValue('B1', 'Prénom');
        $sheet->setCellValue('C1', 'Sport');
        $sheet->setCellValue('D1', 'Date de Naissance');
        $sheet->setCellValue('E1', 'Poste');
        $sheet->setCellValue('F1', 'Taille (m)');
        $sheet->setCellValue('G1', 'Poids (kg)');
        $sheet->setCellValue('H1', 'Statut');
        $sheet->setCellValue('I1', 'Email');
        $sheet->setCellValue('J1', 'Téléphone');

        // Add data
        $row = 2;
        foreach ($joueurs as $joueur) {
            $sheet->setCellValue('A' . $row, $joueur->getNom());
            $sheet->setCellValue('B' . $row, $joueur->getPrenom());
            $sheet->setCellValue('C' . $row, $joueur->getSport() ? $joueur->getSport()->getNomSport() : 'N/A');
            $sheet->setCellValue('D' . $row, $joueur->getDateNaissance() ? $joueur->getDateNaissance()->format('d/m/Y') : 'N/A');
            $sheet->setCellValue('E' . $row, $joueur->getPoste() ?? 'N/A');
            $sheet->setCellValue('F' . $row, $joueur->getTaille() ? number_format($joueur->getTaille(), 2, '.', ',') : 'N/A');
            $sheet->setCellValue('G' . $row, $joueur->getPoids() ? number_format($joueur->getPoids(), 2, '.', ',') : 'N/A');
            $sheet->setCellValue('H' . $row, $joueur->getStatut() ?? 'N/A');
            $sheet->setCellValue('I' . $row, $joueur->getEmail() ?? 'N/A');
            $sheet->setCellValue('J' . $row, $joueur->getTelephone() ?? 'N/A');
            $row++;
        }

        // Create the Excel file in memory
        $writer = new Xlsx($spreadsheet);
        $fileName = 'joueurs_export_' . date('Y-m-d') . '.xlsx';
        $tempFile = tempnam(sys_get_temp_dir(), 'joueurs_export');
        $writer->save($tempFile);

        // Create the response with the Excel content
        $response = new Response(file_get_contents($tempFile));
        unlink($tempFile);

        // Set headers for download
        $disposition = $response->headers->makeDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            $fileName
        );
        $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        $response->headers->set('Content-Disposition', $disposition);

        return $response;
    }

    #[Route('/tracking', name: 'joueur_tracking', methods: ['GET'])]
    public function trackingRedirect(): Response
    {
        return $this->render('maintenance.html.twig', [
            'message' => 'Player Tracking is currently under maintenance. Please check back later.',
        ]);
    }
}