<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/submit-contact-form', name: 'submit_contact_form', methods: ['POST'])]
    public function submitContactForm(Request $request): JsonResponse
    {
        // Récupérer les données du formulaire
        $name = $request->request->get('name');
        $email = $request->request->get('email');
        $message = $request->request->get('message');
        $hiddenField1 = $request->request->get('hiddenField1');
        $hiddenField2 = $request->request->get('hiddenField2');

        // Effectuer des validations ou d'autres traitements ici (comme envoyer un email)

        // Si tout est OK, renvoyer une réponse JSON avec succès
        return new JsonResponse(['success' => true]);
    }
}
