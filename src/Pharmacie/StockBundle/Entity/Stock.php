<?php

namespace Pharmacie\StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stock
 *
 * @ORM\Table(name="stock", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_4B365660F347EFB", columns={"produit_id"})})
 * @ORM\Entity
 */
class Stock
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
     * @var integer
     *
     * @ORM\Column(name="quantite", type="integer", nullable=false)
     */
    private $quantite;

    /**
     * @var integer
     *
     * @ORM\Column(name="seuilMin", type="integer", nullable=false)
     */
    private $seuilmin;

    /**
     * @var \Produit
     *
     * @ORM\ManyToOne(targetEntity="Produit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="produit_id", referencedColumnName="id")
     * })
     */
    private $produit;

    public $produitTemp;

    /**
     * Set quantite
     *
     * @param integer $quantite
     *
     * @return Stock
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set seuilmin
     *
     * @param integer $seuilmin
     *
     * @return Stock
     */
    public function setSeuilmin($seuilmin)
    {
        $this->seuilmin = $seuilmin;

        return $this;
    }

    /**
     * Get seuilmin
     *
     * @return integer
     */
    public function getSeuilmin()
    {
        return $this->seuilmin;
    }

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
     * Set produit
     *
     * @param \Pharmacie\StockBundle\Entity\Produit $produit
     *
     * @return Stock
     */
    public function setProduit(\Pharmacie\StockBundle\Entity\Produit $produit)
    {
        $this->produit = $produit;

        return $this;
    }

    /**
     * Get produit
     *
     * @return \Gestion\StockBundle\Entity\Produit
     */
    public function getProduit()
    {
        return $this->produit;
    }


    public function getContent(){
        return  array(
            'id' => $this->id,
            'quantite' => $this->quantite,
            'seuilMin' => $this->seuilmin,
            'produit' => $this->produit->getLibelle()

         );
    }
}
