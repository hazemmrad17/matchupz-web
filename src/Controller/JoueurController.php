<?php

namespace App\Controller;

use App\Entity\Joueur;
use App\Form\JoueurType;
use App\Repository\JoueurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

#[Route('/joueur')]
class JoueurController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/main', name: 'joueur_main', methods: ['GET'])]
    public function index(JoueurRepository $joueurRepository): Response
    {
        $joueurs = $joueurRepository->findAll();
        $topPerformers = $joueurRepository->findBy([], ['taille' => 'DESC'], 4);

        return $this->render('joueur/main.html.twig', [
            'joueurs' => $joueurs,
            'topPerformers' => $topPerformers,
        ]);
    }

    #[Route('/new', name: 'joueur_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $joueur = new Joueur();
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
                    $joueur->setProfilePictureUrl('/uploads/profile_pictures/'.$newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Erreur lors du téléchargement de l\'image');
                    return $this->render('joueur/new.html.twig', [
                        'joueur' => $joueur,
                        'form' => $form->createView(),
                    ]);
                }
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

    #[Route('/stats', name: 'joueur_statistics', methods: ['GET'])]
    public function statistics(): Response
    {
        // Total number of players
        $totalPlayers = $this->entityManager->getRepository(Joueur::class)->count([]);

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

        // Poste distribution (already in correct format for template)
        $posteDistribution = $this->entityManager->createQuery(
            'SELECT j.poste, COUNT(j.idJoueur) AS count FROM App\Entity\Joueur j GROUP BY j.poste'
        )->getResult();

        // All players
        $allPlayers = $this->entityManager->getRepository(Joueur::class)->findAll();

        return $this->render('joueur/statistics.html.twig', [
            'totalPlayers' => $totalPlayers,
            'averageHeight' => $averageHeight,
            'averageWeight' => $averageWeight,
            'sportDistribution' => $sportDist,
            'statutDistribution' => $statutDist,
            'posteDistribution' => $posteDistribution, // Keep as array of arrays
            'allPlayers' => $allPlayers,
        ]);
    }

    #[Route('/{id}/edit', name: 'joueur_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ?Joueur $joueur): Response
    {
        if (!$joueur) {
            throw $this->createNotFoundException('Joueur not found');
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

            $this->entityManager->flush();

            $this->addFlash('success', 'Joueur mis à jour avec succès!');
            return $this->redirectToRoute('joueur_main');
        }

        return $this->render('joueur/edit.html.twig', [
            'joueur' => $joueur,
            'form' => $form->createView(),
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

    #[Route('/{id}', name: 'joueur_show', methods: ['GET'])]
    public function show(?Joueur $joueur): Response
    {
        if (!$joueur) {
            throw $this->createNotFoundException('Joueur not found');
        }
        return $this->render('joueur/show.html.twig', [
            'joueur' => $joueur,
        ]);
    }
}