<?php

namespace App\Controller;
use App\Entity\Produit;
use App\Entity\Sortie;
use App\Form\SortieType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SortieController extends AbstractController
{
    #[Route('/sortie/liste', name: 'sortie_liste')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();

        $s = new Sortie();
        $form = $this->createForm(SortieType::class, $s, array('action'=>$this->generateUrl('sortie_add')));
        $data['form'] = $form->createView(); 
        
        $data['sortie'] = $entityManager->getRepository(Sortie::class)->findAll();
        return $this->render('sortie/liste.html.twig', $data);
    }

    #[Route('/sortie/add', name: 'sortie_add')]
    public function add(ManagerRegistry $doctrine, Request $request): Response
    {
        $s = new Sortie();
        $form = $this->createForm(SortieType::class, $s);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $entityManager = $doctrine->getManager();
            $s = $form->getData();
            $s->setUser($this->getUser());
            $qSortie = $s->getQteS();
            $p = $entityManager->getRepository(Produit::class)->find($s->getProduit()->getId());
            if($p->getQtStock() < $s->getQteS()){
                $form = $this->createForm(SortieType::class, $s, array('action'=>$this->generateUrl('sortie_add')));
                $data['form'] = $form->createView();
                $data['sortie'] = $entityManager->getRepository(Sortie::class)->findAll();
                $data['error_message'] = 'le stock disponible est inferieur à '. $qSortie;
                echo $data['error_message'];
                return $this->render('sortie/liste.html.twig', $data);
            }else{
                // tell Doctrine you want to (eventually) save the Product (no queries yet)
                $entityManager->persist($s);

                // actually executes the queries (i.e. the INSERT query)
                $entityManager->flush();

                // Mis a jour du produit
                $stock = $p->getQtStock() -  $s->getQteS();
                $p->setQtStock($stock);
                $entityManager->flush();
                return $this->redirectToRoute('sortie_liste');
            }
        }  
    }
}
