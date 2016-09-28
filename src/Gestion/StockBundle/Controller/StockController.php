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



}