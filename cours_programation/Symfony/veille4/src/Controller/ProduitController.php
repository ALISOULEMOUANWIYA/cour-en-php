<?php

namespace App\Controller;
// use App\Entity\Comment;
// use App\Entity\Post;
// use App\Event\CommentCreatedEvent;
// use App\Form\CommentType;
// use App\Repository\PostRepository;
// use App\Repository\TagRepository;
// use Doctrine\ORM\EntityManagerInterface;

use App\Entity\Produit;
use Doctrine\Persistence\ManagerRegistry;
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

    #[Route('/Produit/add', name: 'produit_liste')]
    public function add(): Response
    {
        $p = new Produit();
        $p->setLibelle("Scanner");
        $p->setQtStock(0.0);

        //$em = $this->getDoctrine()->getManager()->persist($p);

        $entityManager = $this->getDoctrine();

        

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($p);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return $this->render('produit/liste.html.twig');
    }
}
