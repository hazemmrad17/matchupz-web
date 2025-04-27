<?php

namespace App\Controller;

use App\Entity\Espacesportif;
use App\Form\EspacesportifType;
use App\Repository\EspacesportifRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bridge\Doctrine\Attribute\MapEntity;
use Knp\Component\Pager\PaginatorInterface;
use Knp\Snappy\Pdf; // For PDF export
use PhpOffice\PhpSpreadsheet\Spreadsheet; // For Excel export
use PhpOffice\PhpSpreadsheet\Writer\Xlsx; // For Excel export

#[Route('/espace')]
class EspacesportifController extends AbstractController
{
    #[Route('/', name: 'espace_index', methods: ['GET'])]
    public function index(EspacesportifRepository $espaceSportifRepository, Request $request, PaginatorInterface $paginator): Response
    {
        $topCapacite = $espaceSportifRepository->findTopCapacite(5);

        // Data for widgets
        $totalEspaces = $espaceSportifRepository->countTotalEspaces();

        // Calculate espaces with reservations
        $espacesWithReservations = $espaceSportifRepository->createQueryBuilder('e')
            ->select('COUNT(DISTINCT e.id_lieu)')
            ->leftJoin('e.reservations', 'r')
            ->where('r.id_reservation IS NOT NULL')
            ->getQuery()
            ->getSingleScalarResult();

        // Get the search term from the query parameters
        $searchTerm = $request->query->get('search', '');

        // Create query for pagination with search filter
        $queryBuilder = $espaceSportifRepository->createQueryBuilder('e')
            ->orderBy('e.nom_espace', 'ASC');

        // Apply search filter if a search term is provided
        if ($searchTerm) {
            $queryBuilder
                ->where('e.nom_espace LIKE :searchTerm')
                ->orWhere('e.adresse LIKE :searchTerm')
                ->orWhere('e.categorie LIKE :searchTerm')
                ->setParameter('searchTerm', '%' . $searchTerm . '%');
        }

        $query = $queryBuilder->getQuery();

        // Paginate the results (5 espaces per page)
        $espaces = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            5
        );

        return $this->render('espace/index.html.twig', [
            'espaces' => $espaces,
            'top_capacite' => $topCapacite,
            'totalEspaces' => $totalEspaces,
            'espacesWithReservations' => $espacesWithReservations,
            'searchTerm' => $searchTerm,
        ]);
    }

    #[Route('/export/csv', name: 'espace_export_csv')]
    public function exportCsv(EspacesportifRepository $espaceSportifRepository): Response
    {
        $espaces = $espaceSportifRepository->findAll();

        // Create a CSV file in memory
        $output = fopen('php://memory', 'w');

        // Add headers
        fputcsv($output, [
            'Nom',
            'Adresse',
            'Catégorie',
            'Capacité',
        ]);

        // Add data
        foreach ($espaces as $espace) {
            fputcsv($output, [
                $espace->getNomEspace(),
                $espace->getAdresse(),
                $espace->getCategorie() ?? 'N/A',
                $espace->getCapacite() ?? 'N/A',
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
            'espaces_export_' . date('Y-m-d') . '.csv'
        );
        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', $disposition);

        return $response;
    }

    #[Route('/export/pdf', name: 'espace_export_pdf')]
    public function exportPdf(EspacesportifRepository $espaceSportifRepository, Pdf $knpSnappyPdf): Response
    {
        $espaces = $espaceSportifRepository->findAll();

        $html = $this->renderView('espace/export_pdf.html.twig', [
            'espaces' => $espaces,
            'logo_path' => $this->getParameter('kernel.project_dir') . '/public/img/logo_white.svg'
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
            'espaces_export_' . date('Y-m-d') . '.pdf'
        );
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Disposition', $disposition);

        return $response;
    }

    #[Route('/export/excel', name: 'espace_export_excel')]
    public function exportExcel(EspacesportifRepository $espaceSportifRepository): Response
    {
        $espaces = $espaceSportifRepository->findAll();

        // Create a new Spreadsheet object
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Set headers
        $sheet->setCellValue('A1', 'Nom');
        $sheet->setCellValue('B1', 'Adresse');
        $sheet->setCellValue('C1', 'Catégorie');
        $sheet->setCellValue('D1', 'Capacité');

        // Add data
        $row = 2;
        foreach ($espaces as $espace) {
            $sheet->setCellValue('A' . $row, $espace->getNomEspace());
            $sheet->setCellValue('B' . $row, $espace->getAdresse());
            $sheet->setCellValue('C' . $row, $espace->getCategorie() ?? 'N/A');
            $sheet->setCellValue('D' . $row, $espace->getCapacite() ?? 'N/A');
            $row++;
        }

        // Create the Excel file in memory
        $writer = new Xlsx($spreadsheet);
        $fileName = 'espaces_export_' . date('Y-m-d') . '.xlsx';
        $tempFile = tempnam(sys_get_temp_dir(), 'espaces_export');
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

    #[Route('/new', name: 'espace_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, EspacesportifRepository $espaceSportifRepository): Response
    {
        $espace = new Espacesportif();
        $form = $this->createForm(EspacesportifType::class, $espace, [
            'espace_repository' => $espaceSportifRepository,
        ]);
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
    public function edit(Request $request, #[MapEntity(mapping: ['id_lieu' => 'id_lieu'])] Espacesportif $espace = null, EntityManagerInterface $entityManager, EspacesportifRepository $espaceSportifRepository): Response
    {
        if (!$espace) {
            throw $this->createNotFoundException('L\'espace sportif avec l\'ID ' . $request->attributes->get('id_lieu') . ' n\'existe pas');
        }

        $form = $this->createForm(EspacesportifType::class, $espace, [
            'espace_repository' => $espaceSportifRepository,
        ]);
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

    // New route for the front-end display of espaces using espaceF.html.twig
    #[Route('/front', name: 'app_espace_sportifs', methods: ['GET'])]
    public function front(EspacesportifRepository $espaceSportifRepository): Response
    {
        // Fetch all espaces for the front-end display
        $espaces = $espaceSportifRepository->findAll();

        return $this->render('espace/espaceF.html.twig', [
            'espaces' => $espaces,
            'espaces_description' => 'Découvrez nos espaces sportifs pour vos activités préférées.',
            'social_media' => [
                ['url' => '#', 'icon' => 'fab fa-facebook-f'],
                ['url' => '#', 'icon' => 'fab fa-twitter'],
                ['url' => '#', 'icon' => 'fab fa-instagram'],
                ['url' => '#', 'icon' => 'fab fa-linkedin-in'],
            ],
            'contact_email' => 'info@fitness.com',
            'working_hours' => 'Mon - Sat: 8.00 am-7.00 pm',
            'contact_address' => '123 street New York',
            'contact_phone' => '(+012) 3456 7890 123',
            'footer_description' => 'Dolor amet sit justo amet elitr clita ipsum elitr est.',
            'site_name' => 'Fitness',
            'recent_works' => [],
        ]);
    }
}