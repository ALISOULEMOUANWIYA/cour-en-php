<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    #[Route('/index', name: 'index')]
    public function index(): Response
    {
        return $this->render('login/login.html.twig');
    }

    #[Route('/login', name: 'login')]
    public function loginS(): Response
    {
        return $this->render('login/login.html.twig');
    }

    #[Route('/logon', name: 'logon')]
    public function logon(): Response
    {
        return $this->redirectToRoute('accueil');
    }
}
