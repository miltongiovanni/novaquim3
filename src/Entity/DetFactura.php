<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetFactura
 *
 * @ORM\Table(name="det_factura", indexes={@ORM\Index(name="det_factura_codProducto_index", columns={"codProducto"}), @ORM\Index(name="det_factura_tasa_iva_idTasaIva_fk", columns={"idTasaIvaProducto"}), @ORM\Index(name="IDX_F98A97A6E952CBFB", columns={"idFactura"})})
 * @ORM\Entity(repositoryClass="App\Repository\DetFacturaRepository")
 */
class DetFactura
{
    /**
     * @var int
     *
     * @ORM\Column(name="codProducto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codproducto = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="cantProducto", type="integer", nullable=true)
     */
    private $cantproducto;

    /**
     * @var float
     *
     * @ORM\Column(name="precioProducto", type="float", precision=12, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $precioproducto = 0.00;

    /**
     * @var \Factura
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Factura")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idFactura", referencedColumnName="idFactura")
     * })
     */
    private $idfactura;

    /**
     * @var \TasaIva
     *
     * @ORM\ManyToOne(targetEntity="TasaIva")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idTasaIvaProducto", referencedColumnName="idTasaIva")
     * })
     */
    private $idtasaivaproducto;

    public function getCodproducto(): ?int
    {
        return $this->codproducto;
    }

    public function getCantproducto(): ?int
    {
        return $this->cantproducto;
    }

    public function setCantproducto(?int $cantproducto): self
    {
        $this->cantproducto = $cantproducto;

        return $this;
    }

    public function getPrecioproducto(): ?float
    {
        return $this->precioproducto;
    }

    public function setPrecioproducto(float $precioproducto): self
    {
        $this->precioproducto = $precioproducto;

        return $this;
    }

    public function getIdfactura(): ?Factura
    {
        return $this->idfactura;
    }

    public function setIdfactura(?Factura $idfactura): self
    {
        $this->idfactura = $idfactura;

        return $this;
    }

    public function getIdtasaivaproducto(): ?TasaIva
    {
        return $this->idtasaivaproducto;
    }

    public function setIdtasaivaproducto(?TasaIva $idtasaivaproducto): self
    {
        $this->idtasaivaproducto = $idtasaivaproducto;

        return $this;
    }


}
