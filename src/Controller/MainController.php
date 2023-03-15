<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('main/', name: 'main_portfolio')]
    #[Route('', name: 'portfolio')]

    public function index(): Response
    {
        return $this->render('main/portfolio.html.twig');
    }
    #[Route('main/information', name: 'main_information')]
    public function information(): Response
    {
        return $this->render('main/information.html.twig');
    }
    #[Route('main/diplome', name: 'main_diplome')]
    public function diplome(): Response
    {
        return $this->render('main/diplome.html.twig');
    }
    #[Route('main/experience', name: 'main_experience')]
    public function experience(): Response
    {
        return $this->render('main/experience.html.twig');
    }
    #[Route('main/contact', name: 'main_contact')]
    public function contact(): Response
    {
        return $this->render('contact/formulaire.html.twig');
    }
}
