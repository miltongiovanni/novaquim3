<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formula
 *
 * @ORM\Table(name="formula", indexes={@ORM\Index(name="formula_productos_codProducto_fk", columns={"codProducto"})})
 * @ORM\Entity
 */
class Formula
{
    /**
     * @var int
     *
     * @ORM\Column(name="idFormula", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idformula;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nomFormula", type="string", length=50, nullable=true)
     */
    private $nomformula;

    /**
     * @var \Productos
     *
     * @ORM\ManyToOne(targetEntity="Productos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codProducto", referencedColumnName="codProducto")
     * })
     */
    private $codproducto;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Mprimas", inversedBy="idformula")
     * @ORM\JoinTable(name="det_formula",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idFormula", referencedColumnName="idFormula")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="codMPrima", referencedColumnName="codMPrima")
     *   }
     * )
     */
    private $codmprima = array();

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->codmprima = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
