<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Repository\ContactRepository;

use phpDocumentor\Reflection\Types\String_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/contact', name: 'contact_')]
class ContactController extends AbstractController
{
    #[Route('/', name: 'formulaire')]
    public function formulaire(ContactRepository $contactRepository, Request $request): Response
    {
        $contact = new Contact();

        $form = $this->createForm(ContactType::class, $contact);
        $form = $form->handleRequest($request, $contact);
        if ($form->isSubmitted() && $form->isValid()){
            $contactRepository->save($contact, true);
            $this->addFlash("sucess",'Envoie réussi');
        }
        return $this->render('contact/formulaire.html.twig', [
          'form'=>  $form->createView()
        ]);
    }
}
