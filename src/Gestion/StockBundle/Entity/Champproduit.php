<?php

namespace Gestion\StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Champproduit
 *
 * @ORM\Table(name="champproduit", indexes={@ORM\Index(name="id_champ", columns={"id_champ"}), @ORM\Index(name="id_entite", columns={"id_entite"})})
 * @ORM\Entity
 */
class Champproduit
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
     * @ORM\Column(name="valeur", type="string", length=255, nullable=false)
     */
    private $valeur;

    /**
     * @var \Produit
     *
     * @ORM\ManyToOne(targetEntity="Produit", inversedBy="champsproduit", cascade={"persist", "remove", "merge"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_entite", referencedColumnName="id")
     * })
     */
    private $idEntite;

    /**
     * @var \Champdynamique
     *
     * @ORM\ManyToOne(targetEntity="Champdynamique")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_champ", referencedColumnName="id")
     * })
     */
    private $idChamp;



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
     * Set valeur
     *
     * @param string $valeur
     *
     * @return Champproduit
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;

        return $this;
    }

    /**
     * Get valeur
     *
     * @return string
     */
    public function getValeur()
    {
        return $this->valeur;
    }

    /**
     * Set idEntite
     *
     * @param \Gestion\StockBundle\Entity\Produit $idEntite
     *
     * @return Champproduit
     */
    public function setIdEntite(\Gestion\StockBundle\Entity\Produit $idEntite = null)
    {
        $this->idEntite = $idEntite;

        return $this;
    }

    /**
     * Get idEntite
     *
     * @return \Gestion\StockBundle\Entity\Produit
     */
    public function getIdEntite()
    {
        return $this->idEntite;
    }

    /**
     * Set idChamp
     *
     * @param \Gestion\StockBundle\Entity\Champdynamique $idChamp
     *
     * @return Champproduit
     */
    public function setIdChamp(\Gestion\StockBundle\Entity\Champdynamique $idChamp = null)
    {
        $this->idChamp = $idChamp;

        return $this;
    }

    /**
     * Get idChamp
     *
     * @return \Gestion\StockBundle\Entity\Champdynamique
     */
    public function getIdChamp()
    {
        return $this->idChamp;
    }
}
