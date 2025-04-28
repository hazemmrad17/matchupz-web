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
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Knp\Snappy\Pdf;
<<<<<<< HEAD
=======
use Knp\Component\Pager\PaginatorInterface;
>>>>>>> match

#[Route('/historique/club')]
class HistoriqueClubController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/', name: 'app_historique_club_index', methods: ['GET'])]
<<<<<<< HEAD
    public function index(HistoriqueClubRepository $historiqueClubRepository): Response
    {
        $stats = [
            'total_players' => $historiqueClubRepository->countDistinctPlayers(),
            'new_players_this_month' => $historiqueClubRepository->countNewPlayersThisMonth(),
            'active_clubs' => $historiqueClubRepository->countActiveClubs(),
            'clubs_with_players' => $historiqueClubRepository->countClubsWithPlayers(),
            'avg_duration' => $historiqueClubRepository->getAverageDuration() / 30, // Convert days to months
            'max_duration' => $historiqueClubRepository->getMaxDuration() / 30, // Convert days to months
            'recent_updates' => $historiqueClubRepository->countRecentUpdates(),
        ];

        return $this->render('historique_club/index.html.twig', [
            'historique_clubs' => $historiqueClubRepository->findAll(),
            'stats' => $stats,
=======
    public function index(Request $request, HistoriqueClubRepository $historiqueClubRepository, PaginatorInterface $paginator): Response
    {
        // Get the current page from the query parameter (default to 1)
        $page = $request->query->getInt('page', 1);

        // Create a query for pagination
        $query = $historiqueClubRepository->createQueryBuilder('h')
            ->orderBy('h.saisonDebut', 'DESC')
            ->getQuery();

        // Paginate the results (5 items per page)
        $pagination = $paginator->paginate(
            $query,
            $page,
            5
        );

        $stats = [
            'total_players' => $historiqueClubRepository->countDistinctPlayers() ?? 0,
            'new_players_this_month' => $historiqueClubRepository->countNewPlayersThisMonth() ?? 0,
            'active_clubs' => $historiqueClubRepository->countActiveClubs() ?? 0,
            'clubs_with_players' => $historiqueClubRepository->countClubsWithPlayers() ?? 0,
            'avg_duration' => ($historiqueClubRepository->getAverageDuration() / 30) ?? 0.0,
            'max_duration' => ($historiqueClubRepository->getMaxDuration() / 30) ?? 0.0,
            'recent_updates' => $historiqueClubRepository->countRecentUpdates() ?? 0,
        ];

        return $this->render('historique_club/index.html.twig', [
            'historique_clubs' => $pagination->getItems(),
            'stats' => $stats,
            'currentPage' => $pagination->getCurrentPageNumber(),
            'totalPages' => ceil($pagination->getTotalItemCount() / $pagination->getItemNumberPerPage()),
>>>>>>> match
        ]);
    }

    #[Route('/statistics', name: 'app_historique_club_stats', methods: ['GET'])]
    public function stats(HistoriqueClubRepository $historiqueClubRepository): Response
    {
        $stats = [
<<<<<<< HEAD
            'total_entries' => $historiqueClubRepository->count([]),
=======
            'total_entries' => $historiqueClubRepository->count([]) ?? 0,
>>>>>>> match
            'current_players' => $historiqueClubRepository->createQueryBuilder('h')
                ->select('COUNT(h.idHistorique)')
                ->where('h.saisonFin IS NULL')
                ->getQuery()
<<<<<<< HEAD
                ->getSingleScalarResult(),
            'distinct_players' => $historiqueClubRepository->countDistinctPlayers(),
            'new_players_this_month' => $historiqueClubRepository->countNewPlayersThisMonth(),
            'active_clubs' => $historiqueClubRepository->countActiveClubs(),
            'clubs_with_players' => $historiqueClubRepository->countClubsWithPlayers(),
            'average_duration' => $historiqueClubRepository->getAverageDuration(),
            'max_duration' => $historiqueClubRepository->getMaxDuration(),
            'recent_updates' => $historiqueClubRepository->countRecentUpdates(),
            'club_distribution' => $historiqueClubRepository->getClubDistribution(), // For chart
=======
                ->getSingleScalarResult() ?? 0,
            'distinct_players' => $historiqueClubRepository->countDistinctPlayers() ?? 0,
            'new_players_this_month' => $historiqueClubRepository->countNewPlayersThisMonth() ?? 0,
            'active_clubs' => $historiqueClubRepository->countActiveClubs() ?? 0,
            'clubs_with_players' => $historiqueClubRepository->countClubsWithPlayers() ?? 0,
            'average_duration' => $historiqueClubRepository->getAverageDuration() ?? 0.0,
            'max_duration' => $historiqueClubRepository->getMaxDuration() ?? 0.0,
            'recent_updates' => $historiqueClubRepository->countRecentUpdates() ?? 0,
            'club_distribution' => $historiqueClubRepository->getClubDistribution() ?: [],
>>>>>>> match
        ];

        return $this->render('historique_club/statistics.html.twig', [
            'stats' => $stats,
        ]);
    }

    #[Route('/new', name: 'app_historique_club_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
<<<<<<< HEAD
        $historiqueClub = new HistoriqueClub();
=======
        $historiqueClub = new HistoriqueClub;
>>>>>>> match
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

    #[Route('/club/{clubName}/current', name: 'app_historique_club_current_by_club', methods: ['GET'])]
    public function findCurrentPlayersByClub(string $clubName, HistoriqueClubRepository $historiqueClubRepository): Response
    {
        $currentPlayers = $historiqueClubRepository->findCurrentPlayersByClub($clubName);

        return $this->render('historique_club/current_by_club.html.twig', [
            'currentPlayers' => $currentPlayers,
            'clubName' => $clubName
        ]);
    }

    #[Route('/export/csv', name: 'app_historique_club_export_csv')]
    public function exportCsv(HistoriqueClubRepository $historiqueClubRepository): Response
    {
        $historiqueClubs = $historiqueClubRepository->findAll();

        $output = fopen('php://memory', 'w');

        fputcsv($output, [
            'Joueur',
            'Club',
            'Saison Début',
            'Saison Fin',
            'Durée',
        ]);

        foreach ($historiqueClubs as $historique) {
            $duration = $historique->getSaisonFin() 
                ? $historique->getSaisonDebut()->diff($historique->getSaisonFin())->format('%y ans, %m mois')
                : 'En cours (' . $historique->getSaisonDebut()->diff(new \DateTime())->format('%y ans, %m mois') . ')';
            fputcsv($output, [
                $historique->getJoueur()->getNom() . ' ' . $historique->getJoueur()->getPrenom(),
                $historique->getNomClub(),
                $historique->getSaisonDebut() ? $historique->getSaisonDebut()->format('m/Y') : 'N/A',
                $historique->getSaisonFin() ? $historique->getSaisonFin()->format('m/Y') : 'Actuel',
                $duration,
            ]);
        }

        fseek($output, 0);

        $response = new Response(stream_get_contents($output));
        fclose($output);

        $disposition = $response->headers->makeDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'historique_clubs_export_' . date('Y-m-d') . '.csv'
        );
        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', $disposition);

        return $response;
    }

    #[Route('/export/pdf', name: 'app_historique_club_export_pdf')]
    public function exportPdf(HistoriqueClubRepository $historiqueClubRepository, Pdf $knpSnappyPdf): Response
    {
        $historiqueClubs = $historiqueClubRepository->findAll();

        $html = $this->renderView('historique_club/export_pdf.html.twig', [
            'historique_clubs' => $historiqueClubs,
            'logo_path' => $this->getParameter('kernel.project_dir') . '/public/img/logo_white.png'
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
            'historique_clubs_export_' . date('Y-m-d') . '.pdf'
        );
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Disposition', $disposition);

        return $response;
    }

    #[Route('/export/excel', name: 'app_historique_club_export_excel')]
    public function exportExcel(HistoriqueClubRepository $historiqueClubRepository): Response
    {
        $historiqueClubs = $historiqueClubRepository->findAll();

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A1', 'Joueur');
        $sheet->setCellValue('B1', 'Club');
        $sheet->setCellValue('C1', 'Saison Début');
        $sheet->setCellValue('D1', 'Saison Fin');
        $sheet->setCellValue('E1', 'Durée');

        $row = 2;
        foreach ($historiqueClubs as $historique) {
            $duration = $historique->getSaisonFin() 
<<<<<<< HEAD
            ? $historique->getSaisonDebut()->diff($historique->getSaisonFin())->format('%y ans, %m mois')
            : 'En cours (' . $historique->getSaisonDebut()->diff(new \DateTime())->format('%y ans, %m mois') . ')';

        $sheet->setCellValue('A' . $row, $historique->getJoueur()->getNom() . ' ' . $historique->getJoueur()->getPrenom());
        $sheet->setCellValue('B' . $row, $historique->getNomClub());
        $sheet->setCellValue('C' . $row, $historique->getSaisonDebut() ? $historique->getSaisonDebut()->format('m/Y') : 'N/A');
        $sheet->setCellValue('D' . $row, $historique->getSaisonFin() ? $historique->getSaisonFin()->format('m/Y') : 'Actuel');
        $sheet->setCellValue('E' . $row, $duration);

        $row++;
    }

    $writer = new Xlsx($spreadsheet);
    $filename = 'historique_clubs_export_' . date('Y-m-d') . '.xlsx';

    // Create temporary file in memory
    $temp_file = tempnam(sys_get_temp_dir(), $filename);
    $writer->save($temp_file);

    return $this->file($temp_file, $filename, ResponseHeaderBag::DISPOSITION_ATTACHMENT);
}
}
=======
                ? $historique->getSaisonDebut()->diff($historique->getSaisonFin())->format('%y ans, %m mois')
                : 'En cours (' . $historique->getSaisonDebut()->diff(new \DateTime())->format('%y ans, %m mois') . ')';

            $sheet->setCellValue('A' . $row, $historique->getJoueur()->getNom() . ' ' . $historique->getJoueur()->getPrenom());
            $sheet->setCellValue('B' . $row, $historique->getNomClub());
            $sheet->setCellValue('C' . $row, $historique->getSaisonDebut() ? $historique->getSaisonDebut()->format('m/Y') : 'N/A');
            $sheet->setCellValue('D' . $row, $historique->getSaisonFin() ? $historique->getSaisonFin()->format('m/Y') : 'Actuel');
            $sheet->setCellValue('E' . $row, $duration);

            $row++;
        }

        $writer = new Xlsx($spreadsheet);
        $filename = 'historique_clubs_export_' . date('Y-m-d') . '.xlsx';

        // Create temporary file in memory
        $temp_file = tempnam(sys_get_temp_dir(), $filename);
        $writer->save($temp_file);

        return $this->file($temp_file, $filename, ResponseHeaderBag::DISPOSITION_ATTACHMENT);
    }
}
>>>>>>> match
