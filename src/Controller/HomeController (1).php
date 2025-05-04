<?php
namespace App\Controller;
use App\Repository\EspacesportifRepository;
use App\Service\GeocodingService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(EspacesportifRepository $espaceSportifRepository, GeocodingService $geocodingService): Response
    {
        $espaces = $espaceSportifRepository->findAll();
        $espacesWithCoords = [];

        foreach ($espaces as $espace) {
            $coords = $geocodingService->getCoordinates($espace->getAdresse());
            $weather = null;
            if ($coords && isset($coords['latitude'], $coords['longitude'])) {
                $weather = $geocodingService->getWeather($coords['latitude'], $coords['longitude']);
            } else {
                error_log("Geocoding failed for address: " . $espace->getAdresse());
            }
            $espacesWithCoords[] = [
                'espace' => $espace,
                'latitude' => $coords['latitude'] ?? null,
                'longitude' => $coords['longitude'] ?? null,
                'weather' => $weather,
            ];
        }

        return $this->render('Home.html.twig', [
            'controller_name' => 'HomeController',
            'espacesWithCoords' => $espacesWithCoords,
            'espaces_description' => 'Découvrez nos espaces sportifs modernes et bien équipés, parfaits pour vos activités physiques et compétitions.'
        ]);
    }
}