<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Form\ProduitType;
use App\Controller\JsonResponse;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProduitController extends AbstractController
{
    #[Route('/Produit/liste', name: 'produit_liste')]
    public function liste(ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();

        $p = new Produit();
        $form = $this->createForm(ProduitType::class, $p, array('action' => $this->generateUrl('produit_add')));
        $data['form'] = $form->createView();

        // $data['produits'] = $entityManager->getRepository(Produit::class)->findAll();
        return $this->render('produit/listeTableau.html.twig', $data);
    }

    #[Route('/Produit/listes', name: 'produit_listes')]
    public function listes(ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();

        $p = new Produit();
        $form = $this->createForm(ProduitType::class, $p, array('action' => $this->generateUrl('produit_add')));
        // $data['form'] = $form->createView();

        $data['produits'] = $entityManager->getRepository(Produit::class)->findAll();
        return $this->render('produit/tableau.html.twig', $data);
    }



    // #[Route('/Produit/add', name: 'produit_add', methods: ['POST'])]
    // public function add(ManagerRegistry $doctrine, Request $request): Response
    // {
    //     $p = new Produit();
    //     $form = $this->createForm(ProduitType::class, $p);
    //     $form->handleRequest($request);
    //     if ($form->isSubmitted() && $form->isValid()) {
    //         $p = $form->getData();
    //         $p->setUser($this->getUser());
    //         $entityManager = $doctrine->getManager();
    //         // tell Doctrine you want to (eventually) save the Product (no queries yet)
    //         $entityManager->persist($p);
    //         // actually executes the queries (i.e. the INSERT query)
    //         $entityManager->flush();
    //     }

    //     return $this->redirectToRoute('produit_liste');
    // }

    #[Route('/Produit/delete/{id}', name: 'produit_delete')]
    public function delete(ManagerRegistry $doctrine, $id): Response
    {
        $entityManager = $doctrine->getManager();
        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $produit = $entityManager->getRepository(Produit::class)->find($id);
        // actually executes the queries (i.e. the INSERT query)
        if ($produit != null) {
            $entityManager->remove($produit);
            $entityManager->flush();
        }
        return $this->redirectToRoute('produit_liste');
    }

    #[Route('/Produit/edite/{id}', name: 'produit_edit')]
    public function edite(ManagerRegistry $doctrine, $id)
    {
        $entityManager = $doctrine->getManager();
        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $p = $entityManager->getRepository(Produit::class)->find($id);

        // actually executes the queries (i.e. the INSERT query)
        $form = $this->createForm(ProduitType::class, $p, array('action' => $this->generateUrl('produit_update', ['id' => $id])));
        $data['form'] = $form->createView();

        $data['produits'] = $entityManager->getRepository(Produit::class)->findAll();
        return $this->render('produit/listeTableau.html.twig', $data);
    }

    #[Route('/Produit/update/{id}', name: 'produit_update')]
    public function update(ManagerRegistry $doctrine, Request $request, $id): Response
    {
        $status = "error";
        $message = "";
        $p = new Produit();
        $form = $this->createForm(ProduitType::class, $p);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $p = $form->getData();
            $p->setUser($this->getUser());
            $p->setId($id);
            $entityManager = $doctrine->getManager();
            $produit = $entityManager->getRepository(Produit::class)->find($id);
            $produit->setLebelle($p->getLebelle());
            $produit->setQtStock($p->getQtStock());
            // actually executes the queries (i.e. the INSERT query)
            $entityManager->flush();
        }else {
            $message = "invalid form Ali : " . $form->isSubmitted() . " : " . $form->isValid();
        }
        $response = array(
            'status' => $status,
            'message' => $message
        );
        return $this->json($response);
    }

    #[Route('/Produit/add', name: 'produit_add', methods: ['POST'])]
    public function add(ManagerRegistry $doctrine, Request $request)
    {
        $status = "error";
        $message = "";

        $p = new Produit();
        $form = $this->createForm(ProduitType::class, $p);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() ) {
            $p = $form->getData();
            $p->setUser($this->getUser());
            $entityManager = $doctrine->getManager();
            // tell Doctrine you want to (eventually) save the Product (no queries yet)
            $entityManager->persist($p);
            // actually executes the queries (i.e. the INSERT query)
            $entityManager->flush();
            $status = "success";
            $message = "new department saved";
        } else {
            $message = "invalid form Ali : " . $form->isSubmitted() . " : " . $form->isValid();
        }
        $response = array(
            'status' => $status,
            'message' => $message
        );
        return $this->json($response);
    }
}
