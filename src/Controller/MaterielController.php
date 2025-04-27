<?php

namespace App\Controller;

use App\Entity\Materiel;
use App\Form\MaterielType;
use App\Repository\MaterielRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Knp\Component\Pager\PaginatorInterface;
use TCPDF;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\String\Slugger\SluggerInterface; // Correct import
use Symfony\Component\HttpFoundation\File\Exception\FileException;

#[Route('/materiel')]
final class MaterielController extends AbstractController
{
    #[Route('/', name: 'app_materiel_index', methods: ['GET'])]
    public function index(
        MaterielRepository $repository,
        Request $request,
        PaginatorInterface $paginator
    ): Response {
        $query = $repository->createQueryBuilder('m')
            ->leftJoin('m.fournisseur', 'f')
            ->addSelect('f')
            ->getQuery();

        $pagination = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            6
        );
        
        // Get all materials for stats
        $allMaterials = $repository->findAll();
        $totalMaterials = count($allMaterials);
        
        // Get type distribution
        $typeDistribution = array_count_values(
            array_map(fn($m) => $m->getType(), $allMaterials)
        );
        
        // Get state distribution
        $stateDistribution = array_count_values(
            array_map(fn($m) => $m->getEtat(), $allMaterials)
        );
        
        // Calculate inventory value
        $inventoryValue = array_reduce(
            $allMaterials,
            fn($carry, $m) => $carry + ($m->getPrix() * $m->getQuantite()),
            0
        );

        return $this->render('materiel/index.html.twig', [
            'pagination' => $pagination,
            'totalMateriels' => $totalMaterials,
            'typeDistribution' => $typeDistribution,
            'stateDistribution' => $stateDistribution,
            'inventoryValue' => $inventoryValue
        ]);
    }

    #[Route('/materiel', name: 'app_materiel_indexF', methods: ['GET'])]
    public function indexF(
        MaterielRepository $repository,
        Request $request,
        PaginatorInterface $paginator
    ): Response {
        $query = $repository->createQueryBuilder('m')
            ->leftJoin('m.fournisseur', 'f')
            ->addSelect('f')
            ->getQuery();

        $pagination = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            6
        );
        
        // Get all materials for stats
        $allMaterials = $repository->findAll();
        $totalMaterials = count($allMaterials);
        
        // Get type distribution
        $typeDistribution = array_count_values(
            array_map(fn($m) => $m->getType(), $allMaterials)
        );
        
        // Get state distribution
        $stateDistribution = array_count_values(
            array_map(fn($m) => $m->getEtat(), $allMaterials)
        );
        
        // Calculate inventory value
        $inventoryValue = array_reduce(
            $allMaterials,
            fn($carry, $m) => $carry + ($m->getPrix() * $m->getQuantite()),
            0
        );

        return $this->render('materiel/indexF.html.twig', [
            'pagination' => $pagination,
            'totalMateriels' => $totalMaterials,
            'typeDistribution' => $typeDistribution,
            'stateDistribution' => $stateDistribution,
            'inventoryValue' => $inventoryValue
        ]);
    }


    #[Route('/new', name: 'app_materiel_new', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        EntityManagerInterface $entityManager,
        SluggerInterface $slugger
    ): Response {
        $materiel = new Materiel();
        $form = $this->createForm(MaterielType::class, $materiel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Handle file upload
            /** @var UploadedFile|null $imageFile */
            $imageFile = $form->get('image')->getData();

            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                // Create a safe filename
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

                try {
                    // Move the file to the uploads directory
                    $imageFile->move(
                        $this->getParameter('materiels_directory'),
                        $newFilename
                    );
                    // Set the image path in the entity
                    $materiel->setImage($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Une erreur est survenue lors du téléchargement de l\'image.');
                    return $this->render('materiel/new.html.twig', [
                        'materiel' => $materiel,
                        'form' => $form->createView(),
                    ]);
                }
            } else {
                // Explicitly set image to null if no file is uploaded
                $materiel->setImage(null);
            }

            $entityManager->persist($materiel);
            $entityManager->flush();

            $this->addFlash('success', 'Le matériel a été créé avec succès.');
            return $this->redirectToRoute('app_materiel_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('materiel/new.html.twig', [
            'materiel' => $materiel,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_materiel_show', methods: ['GET'])]
    public function show(Materiel $materiel = null): Response
    {
        if (!$materiel) {
            throw $this->createNotFoundException('Matériel non trouvé');
        }

        return $this->render('materiel/show.html.twig', [
            'materiel' => $materiel,
        ]);
    }


    #[Route('/materiel/{id}', name: 'app_materiel_showF', methods: ['GET'])]
    public function showF(Materiel $materiel = null): Response
    {
        if (!$materiel) {
            throw $this->createNotFoundException('Matériel non trouvé');
        }

        return $this->render('materiel/showF.html.twig', [
            'materiel' => $materiel,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_materiel_edit', methods: ['GET', 'POST'])]
public function edit(
    Request $request,
    Materiel $materiel,
    EntityManagerInterface $entityManager,
    SluggerInterface $slugger
): Response {
    $form = $this->createForm(MaterielType::class, $materiel);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        /** @var UploadedFile|null $imageFile */
        $imageFile = $form->get('image')->getData();
        if ($imageFile) {
            $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = $slugger->slug($originalFilename);
            $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

            try {
                $imageFile->move(
                    $this->getParameter('materiels_directory'),
                    $newFilename
                );
                if ($materiel->getImage()) {
                    $oldImage = $this->getParameter('materiels_directory').'/'.$materiel->getImage();
                    if (file_exists($oldImage)) {
                        unlink($oldImage);
                    }
                }
                $materiel->setImage($newFilename);
            } catch (FileException $e) {
                $this->addFlash('error', 'Erreur lors du téléchargement de l’image.');
                return $this->render('materiel/edit.html.twig', [
                    'materiel' => $materiel,
                    'form' => $form->createView(),
                ]);
            }
        }

        $entityManager->flush();
        $this->addFlash('success', 'Le matériel a été mis à jour avec succès.');
        return $this->redirectToRoute('app_materiel_show', ['id' => $materiel->getId()], Response::HTTP_SEE_OTHER);
    }

    if ($form->isSubmitted() && !$form->isValid()) {
        $this->addFlash('error', 'Veuillez remplir tous les champs obligatoires.');
    }

    return $this->render('materiel/edit.html.twig', [
        'materiel' => $materiel,
        'form' => $form->createView(),
    ]);
}
    #[Route('/{id}', name: 'app_materiel_delete', methods: ['POST'])]
    public function delete(
        Request $request, 
        Materiel $materiel, 
        EntityManagerInterface $entityManager
    ): Response {
        if ($this->isCsrfTokenValid('delete'.$materiel->getId(), $request->request->get('_token'))) {
            $entityManager->remove($materiel);
            $entityManager->flush();
            $this->addFlash('success', 'Le matériel a été supprimé avec succès.');
        }

        return $this->redirectToRoute('app_materiel_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/statistics', name: 'app_materiel_statistics', methods: ['GET'])]
    public function statistics(MaterielRepository $repository): Response
    {
        $allMaterials = $repository->findAll();
        $totalMaterials = count($allMaterials);

        if ($totalMaterials === 0) {
            return $this->render('materiel/statistics.html.twig', [
                'totalMateriels' => 0,
                'typeDistribution' => [],
                'stateDistribution' => [],
                'inventoryValue' => 0
            ]);
        }

        // Calculate statistics
        $typeDistribution = array_count_values(
            array_map(fn($m) => $m->getType(), $allMaterials)
        );
        
        $stateDistribution = array_count_values(
            array_map(fn($m) => $m->getEtat(), $allMaterials)
        );
        
        $inventoryValue = array_reduce(
            $allMaterials,
            fn($carry, $m) => $carry + ($m->getPrix() * $m->getQuantite()),
            0
        );

        return $this->render('materiel/statistics.html.twig', [
            'totalMateriels' => $totalMaterials,
            'typeDistribution' => $typeDistribution,
            'stateDistribution' => $stateDistribution,
            'inventoryValue' => $inventoryValue
        ]);
    }

    #[Route('/export/csv', name: 'app_materiel_export_csv')]
    public function exportCsv(MaterielRepository $repository): Response
    {
        $materiels = $repository->findAll();
        $output = fopen('php://memory', 'w');

        // Headers
        fputcsv($output, [
            'ID', 'Nom', 'Type', 'Quantité', 'État', 
            'Prix Unitaire', 'Code-barres', 'Fournisseur'
        ]);

        // Data
        foreach ($materiels as $m) {
            fputcsv($output, [
                $m->getId(),
                $m->getNom(),
                $m->getType(),
                $m->getQuantite(),
                $m->getEtat(),
                $m->getPrix(),
                $m->getBarcode(),
                $m->getFournisseur() ? $m->getFournisseur()->getNom() : 'N/A'
            ]);
        }

        fseek($output, 0);
        $response = new Response(stream_get_contents($output));
        fclose($output);

        $disposition = $response->headers->makeDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'materiels_export_' . date('Y-m-d') . '.csv'
        );
        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', $disposition);

        return $response;
    }

    #[Route('/export/pdf', name: 'app_materiel_export_pdf')]
    public function exportPdf(MaterielRepository $repository): Response
    {
        $mpdf = new \Mpdf\Mpdf();
        $html = $this->renderView('materiel/exportPDF.html.twig', [
            'materiels' => $repository->findAll(),
            'date' => new \DateTime()
        ]);

        $mpdf->WriteHTML($html);
        return new Response(
            $mpdf->Output('materiels.pdf', 'I'),
            Response::HTTP_OK,
            ['Content-Type' => 'application/pdf']
        );
    }

    #[Route('/export/excel', name: 'app_materiel_export_excel')]
    public function exportExcel(MaterielRepository $repository): Response
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Headers
        $sheet->fromArray(
            ['ID', 'Nom', 'Type', 'Quantité', 'État', 'Prix', 'Code-barres', 'Fournisseur'],
            null,
            'A1'
        );

        // Data
        $data = [];
        foreach ($repository->findAll() as $m) {
            $data[] = [
                $m->getId(),
                $m->getNom(),
                $m->getType(),
                $m->getQuantite(),
                $m->getEtat(),
                $m->getPrix(),
                $m->getBarcode(),
                $m->getFournisseur() ? $m->getFournisseur()->getNom() : 'N/A'
            ];
        }
        $sheet->fromArray($data, null, 'A2');

        // Auto-size columns
        foreach (range('A', 'H') as $column) {
            $sheet->getColumnDimension($column)->setAutoSize(true);
        }

        $writer = new Xlsx($spreadsheet);
        $response = new StreamedResponse(
            function () use ($writer) {
                $writer->save('php://output');
            }
        );

        $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        $response->headers->set('Content-Disposition', 'attachment;filename="materiels_export.xlsx"');
        $response->headers->set('Cache-Control', 'max-age=0');

        return $response;
    }
}