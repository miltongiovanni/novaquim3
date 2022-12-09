<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrdProd
 *
 * @ORM\Table(name="ord_prod", indexes={@ORM\Index(name="Cod_prod", columns={"codProducto"}), @ORM\Index(name="ord_prod_estados_o_prod_idEstado_fk", columns={"estado"}), @ORM\Index(name="Cod_persona", columns={"codResponsable"}), @ORM\Index(name="ord_prod_formula_idFormula_fk", columns={"idFormula"})})
 * @ORM\Entity
 */
class OrdProd
{
    /**
     * @var int
     *
     * @ORM\Column(name="lote", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $lote = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fechProd", type="date", nullable=true)
     */
    private $fechprod;

    /**
     * @var float|null
     *
     * @ORM\Column(name="cantidadKg", type="float", precision=8, scale=4, nullable=true)
     */
    private $cantidadkg;

    /**
     * @var \Personal
     *
     * @ORM\ManyToOne(targetEntity="Personal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codResponsable", referencedColumnName="idPersonal")
     * })
     */
    private $codresponsable;

    /**
     * @var \EstadosOProd
     *
     * @ORM\ManyToOne(targetEntity="EstadosOProd")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estado", referencedColumnName="idEstado")
     * })
     */
    private $estado;

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
     * @var \Formula
     *
     * @ORM\ManyToOne(targetEntity="Formula")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idFormula", referencedColumnName="idFormula")
     * })
     */
    private $idformula;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Prodpre", inversedBy="lote")
     * @ORM\JoinTable(name="envasado",
     *   joinColumns={
     *     @ORM\JoinColumn(name="lote", referencedColumnName="lote")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="codPresentacion", referencedColumnName="codPresentacion")
     *   }
     * )
     */
    private $codpresentacion = array();

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->codpresentacion = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
