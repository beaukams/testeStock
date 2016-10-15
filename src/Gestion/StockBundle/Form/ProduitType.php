<?php

namespace Gestion\StockBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;




class ProduitType extends AbstractType
{
    private $champsdynamique;

    public function __construct($champsdynamique){
        $this->champsdynamique = $champsdynamique;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */

    // private $services;

    // public function __construct($services)
    // {
    //     $this->services = $services;
    // }


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // //recuperer la liste des categories

        $builder
            ->add('libelle')
            ->add('codebarre')
            ->add('prixunitaire')
            ->add('dateperemption')
            ->add('reference')
            ->add('categorie') //'choice', array('choices' => $res))  //new CategorieType())
            ->add('champsproduit', 'collection', array(
                'type'         => new ChampdynamiqueType(),
               // 'options' => array($this->champsdynamique),
                 'allow_add'    => true,
                 'allow_delete' => true,
                 'by_reference' => false
                
              ))
            ->add('Ajouter', 'submit')
            ->add('Annuler', 'submit')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Gestion\StockBundle\Entity\Produit'
        ));
    }
}
