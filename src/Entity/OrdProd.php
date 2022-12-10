<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * OrdProd
 *
 * @ORM\Table(name="ord_prod", indexes={@ORM\Index(name="Cod_prod", columns={"codProducto"}), @ORM\Index(name="ord_prod_estados_o_prod_idEstado_fk", columns={"estado"}), @ORM\Index(name="Cod_persona", columns={"codResponsable"}), @ORM\Index(name="ord_prod_formula_idFormula_fk", columns={"idFormula"})})
 * @ORM\Entity(repositoryClass="App\Repository\OrdProdRepository")
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

    public function getLote(): ?int
    {
        return $this->lote;
    }

    public function getFechprod(): ?\DateTimeInterface
    {
        return $this->fechprod;
    }

    public function setFechprod(?\DateTimeInterface $fechprod): self
    {
        $this->fechprod = $fechprod;

        return $this;
    }

    public function getCantidadkg(): ?float
    {
        return $this->cantidadkg;
    }

    public function setCantidadkg(?float $cantidadkg): self
    {
        $this->cantidadkg = $cantidadkg;

        return $this;
    }

    public function getCodresponsable(): ?Personal
    {
        return $this->codresponsable;
    }

    public function setCodresponsable(?Personal $codresponsable): self
    {
        $this->codresponsable = $codresponsable;

        return $this;
    }

    public function getEstado(): ?EstadosOProd
    {
        return $this->estado;
    }

    public function setEstado(?EstadosOProd $estado): self
    {
        $this->estado = $estado;

        return $this;
    }

    public function getCodproducto(): ?Productos
    {
        return $this->codproducto;
    }

    public function setCodproducto(?Productos $codproducto): self
    {
        $this->codproducto = $codproducto;

        return $this;
    }

    public function getIdformula(): ?Formula
    {
        return $this->idformula;
    }

    public function setIdformula(?Formula $idformula): self
    {
        $this->idformula = $idformula;

        return $this;
    }

    /**
     * @return Collection<int, Prodpre>
     */
    public function getCodpresentacion(): Collection
    {
        return $this->codpresentacion;
    }

    public function addCodpresentacion(Prodpre $codpresentacion): self
    {
        if (!$this->codpresentacion->contains($codpresentacion)) {
            $this->codpresentacion->add($codpresentacion);
        }

        return $this;
    }

    public function removeCodpresentacion(Prodpre $codpresentacion): self
    {
        $this->codpresentacion->removeElement($codpresentacion);

        return $this;
    }

}
