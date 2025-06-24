<?php

// src/Controller/HomeController.php

namespace App\Controller;

use App\Entity\Message;
use App\Form\MessageFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Mime\Email;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(Request $request, MailerInterface $mailer, EntityManagerInterface $entityManager): Response
    {
        $message = new Message();
        $form = $this->createForm(MessageFormType::class, $message);  // Crée le formulaire sur la page d'accueil

        $form->handleRequest($request);

        // Vérifier si la requête est AJAX
        if ($request->isXmlHttpRequest()) {
            if ($form->isSubmitted() && $form->isValid()) {
                $message->setSentAt(new \DateTimeImmutable());

                // Sauvegarde du message dans la base de données
                $entityManager->persist($message);
                $entityManager->flush();

                // Envoi d'email
                $emailMessage = (new Email())
                    ->from($message->getEmail())
                    ->to('belkermi.moubarek@gmail.com')
                    ->subject('Nouveau message de ' . $message->getName())
                    ->text($message->getMessage());

                $mailer->send($emailMessage);

                // Retourner une réponse JSON de succès
                return new JsonResponse(['success' => true, 'message' => 'Votre message a été envoyé avec succès.']);
            }

            // Retourner une réponse JSON d'erreur si le formulaire est invalide
            return new JsonResponse(['success' => false, 'message' => 'Formulaire invalide. Veuillez vérifier les champs.'], 400);
        }

        // Afficher la page pour une requête normale (GET)
        return $this->render('home/index.html.twig', [
            'contactForm' => $form->createView(),
        ]);
    }
}
