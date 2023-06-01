<?php

namespace App\Controller;
use App\Entity\Produit;
use Doctrine\ORM\Mapping\OneToMany;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProduitController extends AbstractController
{
    #[Route('/Produit/liste', name: 'produit_liste')]
    public function index(): Response
    {
        return $this->render('produit/liste.html.twig');
    }

    #[Route('/Produit/get/{id}', name: 'produit_get')]
    public function get($id): Response
    {
        return $this->render('produit/liste.html.twig');
    }
}
