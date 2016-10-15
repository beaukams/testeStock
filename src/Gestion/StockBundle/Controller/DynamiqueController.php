<?php

namespace Gestion\StockBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Gestion\StockBundle\Entity\Champdynamique as Champ;
use Gestion\StockBundle\Form\ChampdynamiqueType as ChampType;

use Gestion\StockBundle\Entity\Champproduit as ChampProduit;
use Gestion\StockBundle\Form\ChampproduitType as ChampProduitType;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Response;

class DynamiqueController extends Controller
{
	    //Ajouter Champ
    public function ajouterAction(Request $request, $table){
        $entite_Champ = new Champ();
        $form_Champ = new ChampType();


        $form = $this->get('form.factory')->create($form_Champ, $entite_Champ);

        if ($form->handleRequest($request)->isValid()) 
        {
            if ($form->get('Ajouter')->isClicked())  
            {

                $em = $this->getDoctrine()->getManager();

                $entite_Champ->setEntite($table);

                $em->persist($entite_Champ);
                $em->flush();
                //return $this->redirect($this->generateUrl('gestion_stock_lister_Champ'));
            }

        }

        if ($form->get('Annuler')->isClicked())  
            {
                 //return $this->redirect($this->generateUrl('gestion_stock_lister_Champ'));
            }

        return $this->render('GestionStockBundle:Champdynamique:ajouter.html.twig',array('formulaire' => $form->createView()));
    }

    public function ajouterProduitAction(Request $request){

        $entite_Champ = new ChampProduit();
        $form_Champ = new ChampProduitType();


        $form = $this->get('form.factory')->create($form_Champ, $entite_Champ);

        if ($form->handleRequest($request)->isValid()) 
        {
            if ($form->get('Ajouter')->isClicked())  
            {

                $em = $this->getDoctrine()->getManager();

                $entite_Champ->setEntite($table);
                
                $em->persist($entite_Champ);
                $em->flush();
                //return $this->redirect($this->generateUrl('gestion_stock_lister_Champ'));
            }

        }

        if ($form->get('Annuler')->isClicked())  
            {
                 //return $this->redirect($this->generateUrl('gestion_stock_lister_Champ'));
            }

        return $this->render('GestionStockBundle:Champproduit:ajouter.html.twig',array('formulaire' => $form->createView(), 'valeur' => 'notice'));
    }
}
