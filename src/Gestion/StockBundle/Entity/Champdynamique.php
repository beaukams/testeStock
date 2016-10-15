<?php

namespace Gestion\StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Champdynamique
 *
 * @ORM\Table(name="champdynamique")
 * @ORM\Entity
 */
class Champdynamique
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=250, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="typeChamp", type="string", length=250, nullable=false)
     */
    private $typechamp;

    /**
     * @var string
     *
     * @ORM\Column(name="contraintes", type="string", length=510, nullable=true)
     */
    private $contraintes;


    /**
     * @var string
     *
     * @ORM\Column(name="entite", type="string", length=255, nullable=false)
     */
    private $entite;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Champdynamique
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set typechamp
     *
     * @param string $typechamp
     *
     * @return Champdynamique
     */
    public function setTypechamp($typechamp)
    {
        $this->typechamp = $typechamp;

        return $this;
    }

    /**
     * Get typechamp
     *
     * @return string
     */
    public function getTypechamp()
    {
        return $this->typechamp;
    }

    /**
     * Set contraintes
     *
     * @param string $contraintes
     *
     * @return Champdynamique
     */
    public function setContraintes($contraintes)
    {
        $this->contraintes = $contraintes;

        return $this;
    }

    /**
     * Get contraintes
     *
     * @return string
     */
    public function getContraintes()
    {
        return $this->contraintes;
    }

        /**
     * Set entite
     *
     * @param string $entite
     *
     * @return Champdynamique
     */
    public function setEntite($entite)
    {
        $this->entite = $entite;

        return $this;
    }

    /**
     * Get entite
     *
     * @return string
     */
    public function getEntite()
    {
        return $this->entite;
    }

    public function __toString(){
        return $this->getNom();
    }
}
