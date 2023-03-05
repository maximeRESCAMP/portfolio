<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('main/', name: 'main_')]
class MainController extends AbstractController
{
    #[Route('', name: 'portfolio')]
    public function index(): Response
    {
        return $this->render('main/portfolio.html.twig');
    }
    #[Route('information', name: 'information')]
    public function information(): Response
    {
        return $this->render('main/information.html.twig');
    }
    #[Route('diplome', name: 'diplome')]
    public function diplome(): Response
    {
        return $this->render('main/diplome.html.twig');
    }
    #[Route('experience', name: 'experience')]
    public function experience(): Response
    {
        return $this->render('main/experience.html.twig');
    }
    #[Route('contact', name: 'contact')]
    public function contact(): Response
    {
        return $this->render('main/contact.html.twig');
    }
}
