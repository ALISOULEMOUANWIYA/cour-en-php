<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('login/index.html.twig');
    }

    #[Route('/login', name: 'login')]
    public function login(): Response
    {
        // $data['message'] = 'DITI 4';
        return $this->render('login/index.html.twig');
    }

    #[Route('/logon', name: 'logon')]
    public function logon(): Response
    {
        return $this->redirectToRoute('accueil');
    }
}
