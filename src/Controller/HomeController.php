<?php
namespace App\Controller;
use App\Repository\MaterielRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


class HomeController extends AbstractController
{
    #[Route('/baseM', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('/front/baseM.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/front', name: 'sponsor_front')]
    public function blog(): Response
    {
        return $this->render('/sponsor/{idSponsor}/front.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    
}
