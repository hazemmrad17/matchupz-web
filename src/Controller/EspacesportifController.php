<?php

namespace App\Controller;

use App\Entity\Espacesportif;
use App\Form\EspacesportifType;
use App\Repository\EspacesportifRepository;
use App\Service\GeocodingService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bridge\Doctrine\Attribute\MapEntity;
use Knp\Component\Pager\PaginatorInterface;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Dompdf\Dompdf;

#[Route('/espace')]
class EspacesportifController extends AbstractController
{
    #[Route('/', name: 'espace_index', methods: ['GET'])]
    public function index(EspacesportifRepository $espaceSportifRepository, Request $request, PaginatorInterface $paginator): Response
    {
        $topCapacite = $espaceSportifRepository->findTopCapacite(5);
        $totalEspaces = $espaceSportifRepository->countTotalEspaces();
        $espacesWithReservations = $espaceSportifRepository->createQueryBuilder('e')
            ->select('COUNT(DISTINCT e.id_lieu)')
            ->leftJoin('e.reservations', 'r')
            ->where('r.id_reservation IS NOT NULL')
            ->getQuery()
            ->getSingleScalarResult();
        $searchTerm = $request->query->get('search', '');

        $queryBuilder = $espaceSportifRepository->createQueryBuilder('e')
            ->orderBy('e.nom_espace', 'ASC');

        if ($searchTerm) {
            $queryBuilder
                ->where('LOWER(e.nom_espace) LIKE :searchTerm')
                ->orWhere('LOWER(e.adresse) LIKE :searchTerm')
                ->orWhere('LOWER(e.categorie) LIKE :searchTerm')
                ->setParameter('searchTerm', '%' . strtolower($searchTerm) . '%');
        }

        $query = $queryBuilder->getQuery();
        $pagination = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            5
        );

        // Handle AJAX request
        if ($request->isXmlHttpRequest()) {
            $espaceData = [];
            foreach ($pagination as $espace) {
                $espaceData[] = [
                    'id_lieu' => $espace->getIdLieu(),
                    'nom_espace' => $espace->getNomEspace() ?? '',
                    'adresse' => $espace->getAdresse() ?? '',
                    'categorie' => $espace->getCategorie() ?? '',
                    'capacite' => $espace->getCapacite() ?? 0,
                    'reservation_count' => $espace->getReservations()->count(),
                ];
            }

            // Render pagination HTML
            $paginationHtml = $this->renderView('espace/_pagination.html.twig', [
                'espaces' => $pagination,
                'searchTerm' => $searchTerm,
            ]);

            return new JsonResponse([
                'espaces' => $espaceData,
                'pagination' => $paginationHtml,
            ]);
        }

        return $this->render('espace/index.html.twig', [
            'espaces' => $pagination,
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
        $output = fopen('php://memory', 'w');
        fputcsv($output, ['Nom', 'Adresse', 'Catégorie', 'Capacité']);
        foreach ($espaces as $espace) {
            fputcsv($output, [
                $espace->getNomEspace(),
                $espace->getAdresse(),
                $espace->getCategorie() ?? 'N/A',
                $espace->getCapacite() ?? 'N/A',
            ]);
        }
        fseek($output, 0);
        $response = new Response(stream_get_contents($output));
        fclose($output);
        $disposition = $response->headers->makeDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'espaces_export_' . date('Y-m-d') . '.csv'
        );
        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', $disposition);
        return $response;
    }

    #[Route('/export/pdf', name: 'espace_export_pdf', methods: ['GET'])]
    public function exportPdf(Request $request, EspacesportifRepository $espaceSportifRepository, PaginatorInterface $paginator): Response
    {
        $searchQuery = $request->query->get('search', '');
        $page = $request->query->getInt('page', 1);

        $queryBuilder = $espaceSportifRepository->createQueryBuilder('e');
        if ($searchQuery) {
            $queryBuilder
                ->where('e.nom_espace LIKE :search')
                ->orWhere('e.adresse LIKE :search')
                ->orWhere('e.categorie LIKE :search')
                ->setParameter('search', '%' . $searchQuery . '%');
        }

        $query = $queryBuilder->getQuery();
        $pagination = $paginator->paginate($query, $page, 6);
        $espaces = $pagination->getItems();

        $logoPath = $this->getParameter('kernel.project_dir') . '/public/img/logo_white.png';
        $logoData = null;
        if (file_exists($logoPath)) {
            $logoContent = file_get_contents($logoPath);
            $logoData = 'data:image/png;base64,' . base64_encode($logoContent);
        }

        $html = $this->renderView('espace/export_pdf.html.twig', [
            'espaces' => $espaces,
            'logo_data' => $logoData,
        ]);

        $dompdf = new Dompdf(['isRemoteEnabled' => true]);
        try {
            $dompdf->loadHtml($html);
            $dompdf->setPaper('A4', 'landscape');
            $dompdf->render();
            $pdfOutput = $dompdf->output();
        } catch (\Exception $e) {
            throw new \RuntimeException('Error generating PDF: ' . $e->getMessage());
        }

        $response = new Response($pdfOutput);
        $disposition = $response->headers->makeDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'espaces_sportifs_' . date('Y-m-d') . '.pdf'
        );
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Disposition', $disposition);

        return $response;
    }

    #[Route('/export/excel', name: 'espace_export_excel')]
    public function exportExcel(EspacesportifRepository $espaceSportifRepository): Response
    {
        $espaces = $espaceSportifRepository->findAll();
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'Nom');
        $sheet->setCellValue('B1', 'Adresse');
        $sheet->setCellValue('C1', 'Catégorie');
        $sheet->setCellValue('D1', 'Capacité');
        $row = 2;
        foreach ($espaces as $espace) {
            $sheet->setCellValue('A' . $row, $espace->getNomEspace());
            $sheet->setCellValue('B' . $row, $espace->getAdresse());
            $sheet->setCellValue('C' . $row, $espace->getCategorie() ?? 'N/A');
            $sheet->setCellValue('D' . $row, $espace->getCapacite() ?? 'N/A');
            $row++;
        }
        $writer = new Xlsx($spreadsheet);
        $fileName = 'espaces_export_' . date('Y-m-d') . '.xlsx';
        $tempFile = tempnam(sys_get_temp_dir(), 'espaces_export');
        $writer->save($tempFile);
        $response = new Response(file_get_contents($tempFile));
        unlink($tempFile);
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
        $totalEspaces = $espaceSportifRepository->countTotalEspaces();
        $averageCapacite = $espaceSportifRepository->averageCapacite();
        $categories = ['terrain foot', 'terrain basket', 'salle gym', 'football', 'Football\''];
        $categorieDistribution = [];
        foreach ($categories as $categorie) {
            $categorieDistribution[$categorie] = count($espaceSportifRepository->findByCategorie($categorie));
        }
        $reservationDistribution = $espaceSportifRepository->getReservationDistribution();
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

    #[Route('/front', name: 'app_espace_sportifs', methods: ['GET'])]
    public function front(EspacesportifRepository $espaceSportifRepository, GeocodingService $geocodingService, Request $request): Response
    {
        $espaces = $espaceSportifRepository->findAll();
        $espacesWithCoordsAndWeather = [];

        foreach ($espaces as $espace) {
            $coords = $geocodingService->getCoordinates($espace->getAdresse());
            $weather = null;
            if ($coords && isset($coords['latitude'], $coords['longitude'])) {
                $weather = $geocodingService->getWeather($coords['latitude'], $coords['longitude']);
            } else {
                error_log("Geocoding failed for address: " . $espace->getAdresse());
            }
            $espacesWithCoordsAndWeather[] = [
                'espace' => $espace,
                'latitude' => $coords['latitude'] ?? null,
                'longitude' => $coords['longitude'] ?? null,
                'weather' => $weather,
            ];
        }

        $userLat = null;
        $userLon = null;
        $preferredCategory = $request->query->get('category', 'football');

        return $this->render('espace/espaceF.html.twig', [
            'espacesWithCoords' => $espacesWithCoordsAndWeather,
            'userLat' => $userLat,
            'userLon' => $userLon,
            'preferredCategory' => $preferredCategory,
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

    #[Route('/recommend', name: 'espace_recommend', methods: ['POST'])]
    public function recommend(Request $request, GeocodingService $geocodingService, EspacesportifRepository $espaceSportifRepository): Response
    {
        $address = trim($request->request->get('address', ''));
        $preferredCategory = $request->request->get('category', 'football');

        if (!$address) {
            return new JsonResponse(['error' => 'Veuillez entrer une adresse (format: Ville, Pays).'], 400);
        }

        if (!preg_match('/^[\p{L}\s-]+,\s*[\p{L}\s-]+$/u', $address)) {
            return new JsonResponse(['error' => 'L\'adresse doit être au format "Ville, Pays" (ex: Tunis, Tunisia).'], 400);
        }

        $coords = $geocodingService->getCoordinates($address, ['place']);
        if (!$coords || !isset($coords['latitude'], $coords['longitude'])) {
            error_log("Geocoding failed for user address: " . $address);
            return new JsonResponse(['error' => 'Adresse invalide ou introuvable.'], 400);
        }
        $userLat = $coords['latitude'];
        $userLon = $coords['longitude'];

        $espaces = $espaceSportifRepository->findAll();
        $facilities = [];
        $distances = [];
        foreach ($espaces as $espace) {
            $coords = $geocodingService->getCoordinates($espace->getAdresse(), ['place']);
            $weather = null;
            if ($coords && isset($coords['latitude'], $coords['longitude'])) {
                $weather = $geocodingService->getWeather($coords['latitude'], $coords['longitude']);
            } else {
                error_log("Geocoding failed for facility address: " . $espace->getAdresse());
                $coords = ['latitude' => 0, 'longitude' => 0];
            }
            $distance = $this->haversineDistance($userLat, $userLon, $coords['latitude'], $coords['longitude']);
            $facilities[] = [
                'id' => $espace->getIdLieu(),
                'nom_espace' => $espace->getNomEspace(),
                'adresse' => $espace->getAdresse(),
                'categorie' => $espace->getCategorie(), // Fixed typo: $esapace -> $espace
                'capacite' => $espace->getCapacite(),
                'lat' => $coords['latitude'] ?? 0,
                'lon' => $coords['longitude'] ?? 0,
                'reservation_count' => $espace->getReservations()->count(),
                'temp' => $weather['temp'] ?? 20,
                'humidity' => $weather['humidity'] ?? 50,
                'weather' => $weather,
                'distance' => $distance,
            ];
            $distances[] = $distance;
        }

        if (empty($facilities)) {
            return new JsonResponse(['ids' => [], 'scores' => [], 'facilities' => []]);
        }

        $distanceScores = [];
        $exactMatches = [];
        $minDistance = min($distances);
        $maxDistance = max($distances);
        foreach ($facilities as $idx => $facility) {
            if ($facility['lat'] == 0 && $facility['lon'] == 0) {
                $distanceScores[] = 0;
                $exactMatches[] = false;
                continue;
            }
            $userAddressNormalized = strtolower(preg_replace('/\s+/', '', $address));
            $facilityAddressNormalized = strtolower(preg_replace('/\s+/', '', $facility['adresse']));
            if ($userAddressNormalized === $facilityAddressNormalized) {
                $distanceScores[] = 1.0;
                $exactMatches[] = true;
            } else {
                $exactMatches[] = false;
                $distance = $facility['distance'];
                if ($maxDistance == $minDistance) {
                    $distanceScores[] = 1.0;
                } else {
                    $distanceScores[] = 1.0 - (($distance - $minDistance) / ($maxDistance - $minDistance));
                }
            }
        }

        $features = [];
        $facilityData = [];
        foreach ($facilities as $facility) {
            if ($facility['lat'] == 0 && $facility['lon'] == 0) {
                continue;
            }
            $categoryMatch = strtolower($facility['categorie']) === strtolower($preferredCategory) ? 1.0 : 0.8;
            $capacity = $facility['capacite'] ?? 0;
            $reservationCount = $facility['reservation_count'] ?? 0;
            $temp = $facility['temp'] ?? 20;
            $humidity = $facility['humidity'] ?? 50;

            $features[] = [$categoryMatch, $capacity, $reservationCount, $temp, $humidity];
            $facilityData[] = $facility;
        }

        if (empty($features)) {
            usort($facilities, fn($a, $b) => ($b['capacite'] ?? 0) <=> ($a['capacite'] ?? 0));
            $topFacility = $facilities[0] ?? null;
            if ($topFacility) {
                return new JsonResponse([
                    'ids' => [$topFacility['id']],
                    'scores' => [1.0],
                    'facilities' => [[
                        'id' => $topFacility['id'],
                        'nom_espace' => $topFacility['nom_espace'],
                        'adresse' => $topFacility['adresse'],
                        'categorie' => $topFacility['categorie'],
                        'capacite' => $topFacility['capacite'],
                        'lat' => $topFacility['lat'],
                        'lon' => $topFacility['lon'],
                        'weather' => $topFacility['weather'],
                    ]]
                ]);
            }
            return new JsonResponse(['ids' => [], 'scores' => [], 'facilities' => []]);
        }

        $standardizedFeatures = $this->standardizeFeatures($features);

        $secondaryWeights = [1.0, 0.5, -0.3, -0.2, -0.1];
        $secondaryScores = array_map(function ($feature) use ($secondaryWeights) {
            $score = 0;
            foreach ($feature as $idx => $val) {
                $score += $val * $secondaryWeights[$idx];
            }
            return $score;
        }, $standardizedFeatures);

        $minSecondary = min($secondaryScores);
        $maxSecondary = max($secondaryScores);
        if ($maxSecondary != $minSecondary) {
            $secondaryScores = array_map(
                fn($score) => ($score - $minSecondary) / ($maxSecondary - $minSecondary),
                $secondaryScores
            );
        } else {
            $secondaryScores = array_fill(0, count($secondaryScores), 1.0);
        }

        $finalScores = [];
        $validFacilities = [];
        $validDistanceScores = [];
        $validSecondaryScores = [];
        $facilityIndex = 0;
        foreach ($facilities as $idx => $facility) {
            if ($facility['lat'] == 0 && $facility['lon'] == 0) {
                continue;
            }
            $distanceScore = $distanceScores[$idx];
            if ($exactMatches[$idx]) {
                $finalScores[] = 1.0;
            } else {
                $secondaryScore = $secondaryScores[$facilityIndex];
                $finalScore = (0.8 * $distanceScore) + (0.2 * $secondaryScore);
                $finalScores[] = $finalScore;
            }
            $validFacilities[] = $facility;
            $validDistanceScores[] = $distanceScore;
            $validSecondaryScores[] = $secondaryScores[$facilityIndex];
            $facilityIndex++;
        }

        $indexedScores = array_map(function ($score, $idx) {
            return ['score' => $score, 'idx' => $idx];
        }, $finalScores, array_keys($finalScores));
        usort($indexedScores, fn($a, $b) => $b['score'] <=> $a['score']);
        $topIndices = array_slice(array_column($indexedScores, 'idx'), 0, 2);

        $rankedIds = array_map(fn($idx) => $validFacilities[$idx]['id'], $topIndices);
        $rankedFacilities = array_map(fn($idx) => $validFacilities[$idx], $topIndices);
        $rankedScores = array_map(fn($idx) => $finalScores[$idx], $topIndices);

        if (!empty($rankedScores)) {
            $scoreMin = min($rankedScores);
            $scoreMax = max($rankedScores);
            if ($scoreMax !== $scoreMin) {
                $rankedScores = array_map(fn($score) => ($score - $scoreMin) / ($scoreMax - $scoreMin), $rankedScores);
            } else {
                $rankedScores = array_fill(0, count($rankedScores), 1.0);
            }
        }

        return new JsonResponse([
            'ids' => $rankedIds,
            'scores' => $rankedScores,
            'facilities' => $rankedFacilities,
        ]);
    }

    private function haversineDistance(float $lat1, float $lon1, float $lat2, float $lon2): float
    {
        $R = 6371.0;
        $lat1 = deg2rad($lat1);
        $lon1 = deg2rad($lon1);
        $lat2 = deg2rad($lat2);
        $lon2 = deg2rad($lon2);
        $dlat = $lat2 - $lat1;
        $dlon = $lon2 - $lon1;
        $a = sin($dlat / 2) ** 2 + cos($lat1) * cos($lat2) * sin($dlon / 2) ** 2;
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
        return $R * $c;
    }

    private function standardizeFeatures(array $features): array
    {
        $n = count($features);
        if ($n === 0) {
            return [];
        }

        $nFeatures = count($features[0]);
        $means = array_fill(0, $nFeatures, 0);
        $stds = array_fill(0, $nFeatures, 0);

        foreach ($features as $row) {
            foreach ($row as $j => $val) {
                $means[$j] += $val;
            }
        }
        foreach ($means as &$mean) {
            $mean /= $n;
        }

        foreach ($features as $row) {
            foreach ($row as $j => $val) {
                $stds[$j] += ($val - $means[$j]) ** 2;
            }
        }
        foreach ($stds as &$std) {
            $std = sqrt($std / $n);
            if ($std == 0) {
                $std = 1;
            }
        }

        $standardized = [];
        foreach ($features as $row) {
            $newRow = [];
            foreach ($row as $j => $val) {
                $newRow[] = ($val - $means[$j]) / $stds[$j];
            }
            $standardized[] = $newRow;
        }

        return $standardized;
    }
}