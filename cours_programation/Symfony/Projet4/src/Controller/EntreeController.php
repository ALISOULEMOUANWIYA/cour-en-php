<?php

namespace App\Controller;

use App\Entity\Entree;
use App\Entity\Produit;
use App\Form\EntreeType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EntreeController extends AbstractController
{
    #[Route('/entree/liste', name: 'entree_liste')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();

        $e = new Entree();
        $form = $this->createForm(EntreeType::class, $e, array('action'=>$this->generateUrl('entree_add')));
        $data['form'] = $form->createView(); 
        
        $data['entree'] = $entityManager->getRepository(Entree::class)->findAll();
        return $this->render('entree/liste.html.twig', $data);
    }

    #[Route('/entree/add', name: 'entree_add')]
    public function add(ManagerRegistry $doctrine, Request $request): Response
    {
        $e = new Entree();
        $form = $this->createForm(EntreeType::class, $e);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $e = $form->getData();
            $e->setUser($this->getUser());
            $entityManager = $doctrine->getManager();
            // tell Doctrine you want to (eventually) save the Product (no queries yet)
            $entityManager->persist($e);
            // actually executes the queries (i.e. the INSERT query)
            $entityManager->flush();

            //Mis a jour du produit
            $p = $entityManager->getRepository(Produit::class)->find($e->getProduit()->getId());
            $stock = $p->getQtStock() +  $e->getQteE();
            $p->setQtStock($stock);
            $entityManager->flush();

        }

        return $this->redirectToRoute('entree_liste');
    }
}
