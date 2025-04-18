<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FitnessController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('front/index.html.twig');
    }

    #[Route('/features', name: 'app_features')]
    public function features(): Response
    {
        return $this->render('joueur/feature.html.twig');
    }

    #[Route('/course', name: 'app_course')]
    public function course(): Response
    {
        return $this->render('course.html.twig');
    }

    #[Route('/blog', name: 'app_blog')]
    public function blog(): Response
    {
        return $this->render('blog.html.twig');
    }

    #[Route('/feature', name: 'app_feature')]
    public function feature(): Response
    {
        return $this->render('feature.html.twig');
    }

    #[Route('/team', name: 'app_team')]
    public function team(): Response
    {
        return $this->render('team.html.twig');
    }

    #[Route('/testimonial', name: 'app_testimonial')]
    public function testimonial(): Response
    {
        return $this->render('testimonial.html.twig');
    }

    #[Route('/404', name: 'app_404')]
    public function notFound(): Response
    {
        return $this->render('404.html.twig');
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('contact.html.twig');
    }
}