<?php

namespace Gestion\StockBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Gestion\StockBundle\Entity\Stock;
use Gestion\StockBundle\Form\StockType as StockType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Response;

class StockController extends Controller
{
    public function indexAction()
    {
        return $this->render('GestionStockBundle:Default:index.html.twig');
    }

    public function ajouterAction(Request $request)
    {
		$entite_stock = new Stock();
        $form_stock = new StockType();
        $form = $this->get('form.factory')->create($form_stock, $entite_stock);
         if ($form->handleRequest($request)->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($entite_stock);
                $em->flush();
                $request->getSession()->getFlashBag()->add('notice', 'Ajout réussi.');
                return $this->redirect($this->generateUrl('gestion_stockage_lister_stock'));
            }

        return $this->render('GestionStockBundle:Stock:ajouter.html.twig',array('formulaire' => $form->createView()));
    }

    public function listerAction()
    {
    	$em = $this->getDoctrine()->getManager();
        $stock = $em->getRepository('GestionStockBundle:Stock')->findAll();
        return $this->render('GestionStockBundle:Stock:lister.html.twig', array('stocks' => $stock));
    }

     public function afficherAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $stock = $em->getRepository('GestionStockBundle:Stock')->findOneBy( array('Identifiant' => $id));
        return $this->render('GestionStockBundle:Stock:afficher.html.twig', array("Identifiant"  => $stock ));
    }

	public function modifierAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $stock = $em->getRepository('GestionStockBundle:Stock')->findOneBy(array('Identifiant' => $id));
        $stocks = $em->getRepository('GestionStockBundle:Stock')->findAll();
         // On vérifie que le stock avec un identifiant existe bien, sinon, erreur 404.
        if(!$stock)
        {
           throw $this->createNotFoundException('Stock[identifiant ='.$id.'] n\'existe pas');
        }
      
        $form = $this->get('form.factory')->create(new StockType, $stock);
               
        if ($form->handleRequest($request)->isValid()) 
        {
            if ($form->get('Modifier')->isClicked())  
            {
              $em->persist($stock);
              $em->flush();
              return $this->redirect($this->generateUrl('gestion_stockage_afficher_stock', array('Identifiant' => $id)));
            
            }
             if ($form->get('Annuler')->isClicked())  
            {
                 return $this->redirect($this->generateUrl('gestion_stockage_lister_stock',array('stocks' => $stocks)));
            }          
            
        }
        return $this->render('GestionStockBundle:Stock:modifier.html.twig', array(
                'Identifiant' => $id,
                'formulaire' => $form->createView(), 
                'Identifiant' => $stock));
    }
    //supprimer un stock
    public function supprimerAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('GestionStockBundle:Stock')->findOneBy(array('Identifiant' => $id));
        $produits = $em->getRepository('GestionStockBundle:Stock')->findAll();
         // On vérifie que le produit avec un identifiant existe bien, sinon, erreur 404.
        if(!$stock)
        {
            throw $this->createNotFoundException('Stock[Identifiant='.$id.'] n\'existe pas');
        }
      
       $form = $this->get('form.factory')->create(new StockType, $stock);
               
        if ($form->handleRequest($request)->isValid()) 
        {
            if ($form->get('Supprimer')->isClicked())  
            {
             $em->remove($stock);
             $em->flush();
                 return $this->redirect($this->generateUrl('gestion_stockage_lister_stock',array('stocks' => $stocks)));
            
            }
             if ($form->get('Annuler')->isClicked())  
            {
                 return $this->redirect($this->generateUrl('gestion_stockage_lister_stock',array('stocks' => $stocks)));
            }
        }
        return $this->render('GestionStockBundle:Stock:supprimer.html.twig', array(
            'Identifiant' => $id,
            'formulaire'=> $form->createView(),
            'Identifiant' => $stock));
    }



}
