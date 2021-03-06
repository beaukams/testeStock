<?php

namespace Gestion\StockBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;




class ChampproduitType extends AbstractType
{
    

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('valeur')
            ->add('Ajouter', 'submit')
            ->add('Annuler', 'submit')
            ;

            
    }
    
    public function addToForm($builder){

          foreach ($this->champsproduit as $key => $valeur) {
              $builder->add($this->champsdynamique[$key]->getNom(), new ChampproduitType());
          }
        
    }
    

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Gestion\StockBundle\Entity\Champproduit'
        ));
    }
}
