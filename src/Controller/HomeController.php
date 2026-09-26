<?php

namespace App\Controller;

use App\Form\ContactType;
use App\Repository\ProjectRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(Request $request, MailerInterface $mailer, ProjectRepository $projectRepository): Response
    {
        // 1. Création du formulaire de contact
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);

        // 2. Traitement lors de l'envoi du formulaire
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $email = (new Email())
                ->from('jchassin.developpement@gmail.com')
                ->replyTo($data['email'])
                ->to('jchassin.developpement@gmail.com')
                ->subject('[Portfolio Contact] ' . $data['subject'])
                ->html("
                    <h2>Nouveau message depuis le portfolio</h2>
                    <p><strong>Nom :</strong> {$data['name']}</p>
                    <p><strong>Email :</strong> {$data['email']}</p>
                    <p><strong>Sujet :</strong> {$data['subject']}</p>
                    <hr>
                    <p><strong>Message :</strong></p>
                    <p>" . nl2br(htmlspecialchars($data['message'])) . "</p>
                ");

            $mailer->send($email);

            $this->addFlash('success', 'Votre message a bien été envoyé ! Je vous répondrai dans les plus brefs délais.');

            return $this->redirectToRoute('app_home', ['_fragment' => 'contact']);
        }

        // 3. Rendu de la vue avec la liste des projets ET le formulaire
        return $this->render('home/index.html.twig', [
            'projects' => $projectRepository->findAll(),
            'contactForm' => $form->createView(),
        ]);
    }
}