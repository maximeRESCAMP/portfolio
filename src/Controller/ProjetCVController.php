<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjetCVController extends AbstractController
{
    #[Route('/projet/cv', name: 'project_cv')]
    public function cv(): Response
    {
        return $this->render('projet/cv.html.twig', [
            'controller_name' => 'ProjetCVController',
        ]);
    }
}
