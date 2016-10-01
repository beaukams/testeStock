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

        $em = $this->getDoctrine()->getManager();

        $form_stock = new StockType($this);

        $form = $this->get('form.factory')->create($form_stock, $entite_stock);

        if ($form->handleRequest($request)->isValid()) 
        {
            if ($form->get('Ajouter')->isClicked())  
            {

                //selectionner la produit
                $entite_stock->setProduit($em->getRepository('GestionStockBundle:Produit')->find($entite_stock->produitTemp)); //Ce qui reste: il faut verifier que le ce stock existe, sinon le creer

                $em->persist($entite_stock);
                $em->flush();
                $request->getSession()->getFlashBag()->add('notice', 'Ajout réussi.');
                return $this->redirect($this->generateUrl('gestion_stockage_lister_stock'));
            }

        }

        if ($form->get('Annuler')->isClicked())  
            {
                 return $this->redirect($this->generateUrl('gestion_stockage_lister_stock'));
            }

        return $this->render('GestionStockBundle:Stock:ajouter.html.twig',array('formulaire' => $form->createView()));
    }

    public function listerAction()
    {
    	$em = $this->getDoctrine()->getManager();
        $stocks = $em->getRepository('GestionStockBundle:Stock')->findAll();

        $res = array();
        foreach ($stocks as $key => $stock) {
            $res[$key] = $stock->getContent();
        }


        return $this->render('GestionStockBundle:Stock:lister.html.twig', array('stocks' => $res));
    }

     public function afficherAction($Identifiant)
    {
        $em = $this->getDoctrine()->getManager();
        $stock = $em->getRepository('GestionStockBundle:Stock')->find($Identifiant);
        return $this->render('GestionStockBundle:Stock:afficher.html.twig', array("stock"  => $stock->getContent() ));
    }


    public function getAllProduit(){
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('GestionStockBundle:Produit')->findAll();

        $res = array();
        foreach ($produits as $key => $produit) {
            $cc = $produit->getContent();
            $res[$cc['id']] = $cc['libelle'];
        }

        print_r($res);

        return $res;
    }

}