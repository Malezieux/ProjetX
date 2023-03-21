<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\FormationRepository;
use App\Repository\UserRepository;


use Symfony\Component\HttpFoundation\Request;

class UserController extends AbstractController
{

    #[Route('/user', name: 'app_user')]
    public function User(UserRepository $userRepository, FormationRepository $FormationRepository): Response
    {
        // Récupérer les données des entités User et Profil depuis la base de données
        $users = $userRepository->findByAllUsers();
dump($users);

        $formation = $FormationRepository->findAll();
        
        
        // Transmettre les données à la vue Twig pour les afficher
        return $this->render('user/index.html.twig', [
            'users' => $users,
            'idformation' => $formation,
        ]);
    }

    #[Route('/toto', name: 'app_toto', methods: ['GET', 'POST'])]
    public function Toto(Request $request, UserRepository $userRepository): Response
    {
        $users = new User();
        $form = $this->createForm(UserType::class, $users);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $userRepository->save($users, true);

            return $this->redirectToRoute('app_book_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('user/test.html.twig', [
            'users' => $users,
            'form' => $form,
        ]);
    }
}
