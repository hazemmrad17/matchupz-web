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
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Knp\Component\Pager\PaginatorInterface;
use Knp\Snappy\Pdf;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

#[Route('/joueur')]
class JoueurController extends AbstractController
{
    private EntityManagerInterface $entityManager;
    private $processId = null;
    private $currentOutputFile = null;
    private HttpClientInterface $httpClient;

    public function __construct(EntityManagerInterface $entityManager, HttpClientInterface $httpClient)
    {
        $this->entityManager = $entityManager;
        $this->httpClient = $httpClient;
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
        $allJoueurs = $joueurRepository->findAll();
        $activePlayers = count(array_filter($allJoueurs, fn($joueur) => $joueur->getStatut() === 'Actif'));

        $query = $joueurRepository->createQueryBuilder('j')
            ->orderBy('j.nom', 'ASC')
            ->getQuery();

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

            if ($joueur->getProfilePicture()) {
                $topPerformers[] = ['joueur' => $joueur, 'score' => $totalScore];
            }

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

    #[Route('/statistics', name: 'joueur_statistics', methods: ['GET'])]
    public function statistics(
        JoueurRepository $joueurRepository,
        EvaluationPhysiqueRepository $evaluationRepository
    ): Response {
        $totalPlayers = $joueurRepository->count([]);

        $playerStats = $this->entityManager->createQuery(
            'SELECT AVG(j.taille) AS averageHeight, AVG(j.poids) AS averageWeight FROM App\Entity\Joueur j'
        )->getSingleResult();
        $averageHeight = $playerStats['averageHeight'] ?: 0;
        $averageWeight = $playerStats['averageWeight'] ?: 0;

        $statutDistribution = $this->entityManager->createQuery(
            'SELECT j.statut, COUNT(j.idJoueur) AS count FROM App\Entity\Joueur j GROUP BY j.statut'
        )->getResult();
        $statutDist = [];
        foreach ($statutDistribution as $data) {
            $statutDist[$data['statut']] = $data['count'];
        }

        $sportDistribution = $this->entityManager->createQuery(
            'SELECT s.nomSport, COUNT(j.idJoueur) AS count FROM App\Entity\Joueur j JOIN j.sport s GROUP BY s.nomSport'
        )->getResult();
        $sportDist = [];
        foreach ($sportDistribution as $data) {
            $sportDist[$data['nomSport']] = $data['count'];
        }

        $posteDistribution = $this->entityManager->createQuery(
            'SELECT j.poste, COUNT(j.idJoueur) AS count FROM App\Entity\Joueur j GROUP BY j.poste'
        )->getResult();

        $allPlayers = $joueurRepository->findAll();

        $evaluatedPlayers = $evaluationRepository->createQueryBuilder('e')
            ->select('COUNT(DISTINCT e.joueur) as count')
            ->getQuery()
            ->getSingleScalarResult();
        $evaluationRate = $totalPlayers > 0 ? ($evaluatedPlayers / $totalPlayers) * 100 : 0;

        $averageScores = $evaluationRepository->createQueryBuilder('e')
            ->select('
                AVG(e.niveauEndurance) as niveauEndurance,
                AVG(e.forcePhysique) as forcePhysique,
                AVG(e.vitesse) as vitesse
            ')
            ->getQuery()
            ->getSingleResult();

        $topPlayers = $evaluationRepository->createQueryBuilder('e')
            ->select('j.idJoueur, j.nom, j.prenom, AVG((e.niveauEndurance + e.forcePhysique + e.vitesse) / 3) as score')
            ->join('e.joueur', 'j')
            ->groupBy('j.idJoueur')
            ->orderBy('score', 'DESC')
            ->setMaxResults(6)
            ->getQuery()
            ->getResult();

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

    #[Route('/new', name: 'joueur_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $joueur = new Joueur();
        $form = $this->createForm(JoueurType::class, $joueur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $profilePictureFile = $form->get('profilePicture')->getData();
            if ($profilePictureFile) {
                $newFilename = uniqid() . '.' . $profilePictureFile->guessExtension();
                try {
                    $profilePictureFile->move(
                        $this->getParameter('profile_pictures_directory'),
                        $newFilename
                    );
                    $joueur->setProfilePicture($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('danger', 'Erreur lors du téléchargement de l\'image.');
                    return $this->render('joueur/new.html.twig', [
                        'form' => $form->createView(),
                    ]);
                }
            }

            $entityManager->persist($joueur);
            $entityManager->flush();

            $this->addFlash('success', 'Joueur créé avec succès.');
            return $this->redirectToRoute('joueur_main');
        }

        if ($form->isSubmitted() && !$form->isValid()) {
            $this->addFlash('danger', 'Veuillez corriger les erreurs dans le formulaire.');
        }

        return $this->render('joueur/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/edit', name: 'joueur_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ?Joueur $joueur, EntityManagerInterface $entityManager): Response
    {
        if (!$joueur) {
            throw $this->createNotFoundException('Joueur non trouvé');
        }

        if (!$joueur->getEvaluationPhysique()) {
            $evaluationPhysique = new EvaluationPhysique();
            $evaluationPhysique->setJoueur($joueur);
            $joueur->setEvaluationPhysique($evaluationPhysique);
        }
        if (!$joueur->getPerformanceJoueur()) {
            $performanceJoueur = new PerformanceJoueur();
            $performanceJoueur->setJoueur($joueur);
            $joueur->setPerformanceJoueur($performanceJoueur);
        }

        $form = $this->createForm(JoueurType::class, $joueur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $profilePictureFile = $form->get('profilePicture')->getData();
            if ($profilePictureFile) {
                $newFilename = uniqid().'.'.$profilePictureFile->guessExtension();
                try {
                    $profilePictureFile->move(
                        $this->getParameter('profile_pictures_directory'),
                        $newFilename
                    );
                    if ($joueur->getProfilePicture()) {
                        $oldFile = $this->getParameter('profile_pictures_directory').'/'.$joueur->getProfilePicture();
                        if (file_exists($oldFile)) {
                            unlink($oldFile);
                        }
                    }
                    $joueur->setProfilePicture($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Erreur lors du téléchargement de l\'image');
                    return $this->render('joueur/edit.html.twig', [
                        'joueur' => $joueur,
                        'form' => $form->createView(),
                    ]);
                }
            }

            $entityManager->persist($joueur);
            $entityManager->flush();

            $this->addFlash('success', 'Joueur mis à jour avec succès!');
            return $this->redirectToRoute('joueur_main');
        }

        if ($form->isSubmitted() && !$form->isValid()) {
            foreach ($form->getErrors(true) as $error) {
                $this->addFlash('error', $error->getMessage());
            }
        }

        return $this->render('joueur/edit.html.twig', [
            'joueur' => $joueur,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'joueur_show', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function show(
        ?Joueur $joueur,
        PerformanceJoueurRepository $performanceRepository,
        EvaluationPhysiqueRepository $evaluationRepository
    ): Response {
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
            if ($joueur->getProfilePicture()) {
                $file = $this->getParameter('profile_pictures_directory').'/'.$joueur->getProfilePicture();
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

        $output = fopen('php://memory', 'w');

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

        fseek($output, 0);

        $response = new Response(stream_get_contents($output));
        fclose($output);

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

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

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

        $writer = new Xlsx($spreadsheet);
        $fileName = 'joueurs_export_' . date('Y-m-d') . '.xlsx';
        $tempFile = tempnam(sys_get_temp_dir(), 'joueurs_export');
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

    #[Route('/formations', name: 'football_layout')]
public function layout(JoueurRepository $joueurRepository, Request $request): Response
{
    $formations = [
        '4-4-2' => ['GK' => 1, 'RB' => 1, 'CB' => 2, 'LB' => 1, 'RM' => 1, 'CM' => 2, 'LM' => 1, 'ST' => 2],
        '4-3-3' => ['GK' => 1, 'RB' => 1, 'CB' => 2, 'LB' => 1, 'CM' => 3, 'RW' => 1, 'LW' => 1, 'ST' => 1],
        '3-5-2' => ['GK' => 1, 'CB' => 3, 'RM' => 1, 'CM' => 3, 'LM' => 1, 'ST' => 2],
    ];

    $selectedFormation = $request->query->get('formation', '4-4-2');
    if (!isset($formations[$selectedFormation])) {
        $selectedFormation = '4-4-2';
    }

    // Fetch all active football players
    $joueurs = $joueurRepository->findBy(['sport' => 1, 'statut' => 'Actif']);

    return $this->render('joueur/football_layout.html.twig', [
        'joueurs' => $joueurs,
        'formations' => array_keys($formations),
        'selected_formation' => $selectedFormation,
        'formation_positions' => $formations[$selectedFormation],
    ]);
}

    #[Route('/features', name: 'app_features')]
    public function features(): Response
    {
        return $this->render('joueur/feature.html.twig');
    }

    #[Route('/scouting', name: 'joueur_scouting', methods: ['GET', 'POST'])]
    public function scouting(
        Request $request,
        JoueurRepository $joueurRepository,
        EntityManagerInterface $entityManager,
        ValidatorInterface $validator
    ): Response {
        $error = null;
        $topScorers = [];
        $selectedLeague = $request->query->getInt('league', 39); // Default to Premier League
        $selectedSeason = $request->query->getInt('season', 2023); // Default to 2023
        $logFile = $this->getParameter('kernel.logs_dir') . '/scouting.log';

        // Helper function to log messages
        $log = function ($message) use ($logFile) {
            error_log(date('[Y-m-d H:i:s] ') . $message . "\n", 3, $logFile);
        };

        // Debug: Log selected league and season
        $log("Selected League: $selectedLeague, Selected Season: $selectedSeason");

        // Valid leagues and seasons for free plan
        $validLeagues = [39, 40, 135, 78, 61, 140]; // Premier League, Championship, Serie A, Bundesliga, Ligue 1, La Liga
        $validSeasons = [2023, 2022, 2021];

        // Validate user input
        if (!in_array($selectedLeague, $validLeagues)) {
            $selectedLeague = 39; // Fallback to Premier League
            $error = "Ligue non valide. Sélection par défaut : Premier League.";
            $log("Invalid league selected: {$request->query->get('league')}. Falling back to league 39.");
        }
        if (!in_array($selectedSeason, $validSeasons)) {
            $selectedSeason = 2023; // Fallback to 2023
            $error = "Saison non valide. Sélection par défaut : 2023.";
            $log("Invalid season selected: {$request->query->get('season')}. Falling back to season 2023.");
        }

        // Fetch top scorers using API-Football
        try {
            $apiKey = $this->getParameter('api_football_api_key');

            // Validate API key
            if (empty($apiKey)) {
                $log("API-Football API key is empty or not set in configuration.");
                throw new \Exception("API-Football API key is not configured. Please set API_FOOTBALL_API_KEY in your .env file.");
            }
            $log("Fetching top scorers with API key: " . substr($apiKey, 0, 5) . "...");

            // Try the selected season first, then fallbacks
            $seasonsToTry = [$selectedSeason, ...array_diff($validSeasons, [$selectedSeason])];
            $seasonData = null;
            $fetchedSeasonId = null;

            foreach ($seasonsToTry as $season) {
                $log("Attempting to fetch top scorers for league $selectedLeague, season $season...");
                $baseUrl = "https://v3.football.api-sports.io/players/topscorers";
                $queryParams = [
                    'league' => $selectedLeague,
                    'season' => $season,
                ];
                $fullUrl = $baseUrl . '?' . http_build_query($queryParams);
                $log("Request URL: $fullUrl");

                $response = $this->httpClient->request('GET', $baseUrl, [
                    'query' => $queryParams,
                    'headers' => [
                        'x-rapidapi-key' => $apiKey,
                        'x-rapidapi-host' => 'v3.football.api-sports.io',
                    ],
                ]);

                $data = $response->toArray();
                $log("API Response for season $season: " . json_encode($data));

                if (isset($data['response']) && !empty($data['response'])) {
                    $seasonData = $data;
                    $fetchedSeasonId = $season;
                    $log("Successfully fetched data for league $selectedLeague, season $season");
                    break;
                } else {
                    $log("No valid data for league $selectedLeague, season $season");
                    if (isset($data['errors']) && !empty($data['errors'])) {
                        $log("API Errors: " . json_encode($data['errors']));
                    }
                }
            }

            if (!$seasonData) {
                throw new \Exception("No top scorer data available from API-Football for league $selectedLeague, seasons " . implode(', ', $seasonsToTry) . ". Please check your API key, subscription plan, or data availability.");
            }

            // Process the top scorer data
            foreach ($seasonData['response'] as $index => $scorer) {
                $playerName = $scorer['player']['name'] ?? 'Unknown';
                $teamName = $scorer['statistics'][0]['team']['name'] ?? 'Unknown';
                $goals = $scorer['statistics'][0]['goals']['total'] ?? 0;
                $position = $index + 1;

                $topScorers[] = [
                    'position' => $position,
                    'player_name' => $playerName,
                    'team_name' => $teamName,
                    'goals' => $goals,
                    'season_id' => $fetchedSeasonId,
                ];
            }

            $log("Total top scorers processed: " . count($topScorers));
        } catch (\Exception $e) {
            $error = 'Erreur lors de la récupération des meilleurs buteurs : ' . $e->getMessage();
            $log("API Error: " . $e->getMessage());
            $topScorers = [];
        }

        // Debug: Log variables passed to template
        $log("Rendering template with selected_league: $selectedLeague, selected_season: $selectedSeason");

        return $this->render('joueur/scouting.html.twig', [
            'error' => $error,
            'top_scorers' => $topScorers,
            'selected_league' => $selectedLeague,
            'selected_season' => $selectedSeason,
        ]);
    }

    #[Route('/football_analysis', name: 'football_analysis')]
    public function footballAnalysis(Request $request): Response
    {
        $outputVideoUrl = null;
        $error = null;
        $trackingData = null;

        // Custom logging function using universal log path
        $logFile = $this->getParameter('kernel.logs_dir') . '/controller.log';
        $logMessage = function ($message) use ($logFile) {
            error_log(date('[Y-m-d H:i:s] ') . $message . "\n", 3, $logFile);
        };

        // Ensure directories exist and are writable
        $inputDir = $this->getParameter('videos_directory');
        $outputDir = $this->getParameter('output_videos_directory');
        $processedDataDir = realpath($this->getParameter('kernel.project_dir') . '/public/uploads/processed_data');
        $logMessage("Input directory: $inputDir");
        $logMessage("Output directory: $outputDir");
        $logMessage("Processed data directory: $processedDataDir");

        if (!is_dir($inputDir)) {
            mkdir($inputDir, 0755, true);
            $logMessage("Created input directory: $inputDir");
        }
        if (!is_dir($outputDir)) {
            mkdir($outputDir, 0755, true);
            $logMessage("Created output directory: $outputDir");
        }
        if (!is_writable($inputDir)) {
            $error = "Input directory is not writable: $inputDir";
            $logMessage($error);
        }
        if (!is_writable($outputDir)) {
            $error = "Output directory is not writable: $outputDir";
            $logMessage($error);
        }

        if ($request->isMethod('POST') && !$error) {
            $action = $request->request->get('action');

            if ($action === 'stop') {
                if ($this->processId) {
                    if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
                        exec("taskkill /PID {$this->processId} /F 2>&1", $output, $returnVar);
                    } else {
                        exec("kill -9 {$this->processId} 2>&1", $output, $returnVar);
                    }
                    $this->processId = null;
                    if ($this->currentOutputFile && file_exists($this->currentOutputFile)) {
                        $relativePath = str_replace(
                            $this->getParameter('output_videos_directory'),
                            '',
                            $this->currentOutputFile
                        );
                        $outputVideoUrl = $this->getParameter('output_videos_directory_url') . $relativePath;
                        $logMessage("Stop: Output video URL set to: $outputVideoUrl");
                    } else {
                        $logMessage("Stop: No output file found at: " . ($this->currentOutputFile ?? 'null'));
                    }
                    $this->currentOutputFile = null;
                    return new JsonResponse(['status' => 'stopped', 'output_video_url' => $outputVideoUrl]);
                }
                return new JsonResponse(['status' => 'no_process']);
            }

            /** @var UploadedFile $videoFile */
            $videoFile = $request->files->get('video');

            if ($videoFile && $videoFile->isValid()) {
                $extension = $videoFile->guessExtension();
                if (!in_array($extension, ['mp4', 'mov', 'avi'])) {
                    $error = 'Unsupported video format. Please upload MP4, MOV, or AVI.';
                } else {
                    $originalFilename = pathinfo($videoFile->getClientOriginalName(), PATHINFO_FILENAME);
                    $safeFilename = preg_replace('/[^A-Za-z0-9_-]/', '', $originalFilename);
                    $newFilename = $safeFilename . '-' . uniqid() . '.' . $extension;

                    try {
                        $videoFile->move(
                            $this->getParameter('videos_directory'),
                            $newFilename
                        );

                        $inputVideoPath = $this->getParameter('videos_directory') . DIRECTORY_SEPARATOR . $newFilename;
                        $outputVideoPath = $this->getParameter('output_videos_directory') . DIRECTORY_SEPARATOR . 'output-' . $newFilename;
                        $pythonScriptPath = $this->getParameter('python_script_path');

                        $logMessage("Input Video Path: $inputVideoPath");
                        $logMessage("Output Video Path: $outputVideoPath");
                        $logMessage("Python Script Path: $pythonScriptPath");

                        if (!file_exists($pythonScriptPath)) {
                            $error = "Python script not found at: $pythonScriptPath";
                        } else {
                            $pythonExecutable = 'C:\\Users\\Hazem Mrad\\AppData\\Local\\Programs\\Python\\Python310\\python.exe';
                            if (!file_exists($pythonExecutable)) {
                                $error = "Python executable not found at: $pythonExecutable";
                            } else {
                                $this->currentOutputFile = $outputVideoPath;
                                $command = sprintf(
                                    '"%s" %s --input_video %s --output_video %s 2>&1',
                                    $pythonExecutable,
                                    escapeshellarg($pythonScriptPath),
                                    escapeshellarg($inputVideoPath),
                                    escapeshellarg($outputVideoPath)
                                );

                                $logMessage("Executing command: $command");

                                $output = [];
                                $returnVar = 0;
                                $descriptorspec = [
                                    0 => ['pipe', 'r'],
                                    1 => ['pipe', 'w'],
                                    2 => ['pipe', 'w']
                                ];
                                $process = proc_open($command, $descriptorspec, $pipes);
                                if (is_resource($process)) {
                                    $this->processId = proc_get_status($process)['pid'];
                                    fclose($pipes[0]);
                                    $output = stream_get_contents($pipes[1]);
                                    $errorOutput = stream_get_contents($pipes[2]);
                                    fclose($pipes[1]);
                                    fclose($pipes[2]);
                                    $returnVar = proc_close($process);

                                    if ($returnVar === 0 && file_exists($outputVideoPath)) {
                                        $relativePath = str_replace(
                                            $this->getParameter('output_videos_directory'),
                                            '',
                                            $outputVideoPath
                                        );
                                        $outputVideoUrl = $this->getParameter('output_videos_directory_url') . $relativePath;
                                        $logMessage("Processing complete: Output video URL set to: $outputVideoUrl");
                                        if (!file_exists($outputVideoPath)) {
                                            $logMessage("Output file does not exist at: $outputVideoPath");
                                        } else {
                                            $logMessage("Output file exists at: $outputVideoPath, size: " . filesize($outputVideoPath) . " bytes");
                                        }
                                    } else {
                                        $error = 'Error processing video: Return code ' . $returnVar . '. Output: ' . ($output ?: $errorOutput);
                                        $logMessage("Processing failed: $error");
                                    }
                                } else {
                                    $error = 'Failed to start video processing.';
                                    $logMessage("Failed to start process: $error");
                                }
                                $this->currentOutputFile = null;
                            }
                        }
                    } catch (FileException $e) {
                        $error = 'Failed to upload video: ' . $e->getMessage();
                        $logMessage("FileException: " . $e->getMessage());
                    }
                }
            } else {
                $error = 'No valid video file uploaded.';
                $logMessage("Invalid video file upload");
            }
        }

        // Check for the latest output video and load tracking data
        if (!$outputVideoUrl) {
            $outputDir = realpath($this->getParameter('output_videos_directory'));
            if ($outputDir === false) {
                $logMessage("Output directory does not exist: " . $this->getParameter('output_videos_directory'));
            } else {
                $logMessage("Normalized output directory: $outputDir");
                $allFiles = scandir($outputDir);
                $logMessage("All files in $outputDir: " . implode(', ', $allFiles));
                $pattern = $outputDir . DIRECTORY_SEPARATOR . 'output-*.mp4';
                $logMessage("Looking for output videos with pattern: $pattern");
                $files = glob($pattern, GLOB_NOSORT);
                $logMessage("Found " . count($files) . " output videos in $outputDir");
                if (!empty($files)) {
                    foreach ($files as $file) {
                        $logMessage("Found output video: $file");
                    }
                    $latestFile = array_reduce($files, function($a, $b) {
                        return filemtime($a) > filemtime($b) ? $a : $b;
                    });
                    $relativePath = str_replace($outputDir, '', $latestFile);
                    $relativePath = str_replace(DIRECTORY_SEPARATOR, '/', $relativePath);
                    $outputVideoUrl = $this->getParameter('output_videos_directory_url') . $relativePath;
                    $logMessage("Latest output video URL set to: $outputVideoUrl");
                    if (!file_exists($latestFile)) {
                        $logMessage("Latest output file does not exist at: $latestFile");
                    } else {
                        $logMessage("Latest output file exists at: $latestFile, size: " . filesize($latestFile) . " bytes");
                    }
                    // Load tracking data from processed_data/
                    if ($processedDataDir) {
                        $jsonFiles = glob($processedDataDir . DIRECTORY_SEPARATOR . 'output-*.json', GLOB_NOSORT);
                        $logMessage("Found " . count($jsonFiles) . " JSON files in $processedDataDir");
                        if (!empty($jsonFiles)) {
                            $latestJsonFile = array_reduce($jsonFiles, function($a, $b) {
                                return filemtime($a) > filemtime($b) ? $a : $b;
                            });
                            $logMessage("Latest JSON file: $latestJsonFile");
                            $trackingDataContent = file_get_contents($latestJsonFile);
                            $trackingData = json_decode($trackingDataContent, true);
                            if ($trackingData === null) {
                                $logMessage("Failed to decode JSON from $latestJsonFile: " . json_last_error_msg());
                                $logMessage("Raw JSON content: $trackingDataContent");
                            } else {
                                $logMessage("Tracking data loaded from: $latestJsonFile");
                                $logMessage("Tracking data contents: " . json_encode($trackingData));
                            }
                        } else {
                            $logMessage("No JSON files found in $processedDataDir");
                        }
                    } else {
                        $logMessage("Processed data directory does not exist: $processedDataDir");
                    }
                } else {
                    $logMessage("No output videos found in $outputDir");
                }
            }
        }

        $logMessage("Rendering template with output_video_url: " . ($outputVideoUrl ?? 'null'));
        $logMessage("Rendering template with tracking_data: " . json_encode($trackingData));

        return $this->render('joueur/tracking.html.twig', [
            'output_video_url' => $outputVideoUrl,
            'error' => $error,
            'tracking_data' => $trackingData,
        ]);
    }
}