<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Factura
 *
 * @ORM\Table(name="factura", indexes={@ORM\Index(name="factura_tip_precio_idPrecio_fk", columns={"tipPrecio"}), @ORM\Index(name="factura_clientes_idCliente_fk", columns={"idCliente"})})
 * @ORM\Entity(repositoryClass="App\Repository\FacturaRepository")
 */
class Factura
{
    /**
     * @var int
     *
     * @ORM\Column(name="idFactura", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfactura = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="idPedido", type="string", length=255, nullable=false)
     */
    private $idpedido = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="idRemision", type="string", length=255, nullable=false)
     */
    private $idremision;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fechaFactura", type="date", nullable=true)
     */
    private $fechafactura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fechaVenc", type="date", nullable=true)
     */
    private $fechavenc;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $estado = '';

    /**
     * @var int
     *
     * @ORM\Column(name="ordenCompra", type="integer", nullable=false)
     */
    private $ordencompra = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="descuento", type="float", precision=6, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $descuento = 0.0000;

    /**
     * @var float
     *
     * @ORM\Column(name="total", type="float", precision=12, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $total = 0.00;

    /**
     * @var float
     *
     * @ORM\Column(name="retencionIva", type="float", precision=12, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $retencioniva = 0.00;

    /**
     * @var float
     *
     * @ORM\Column(name="retencionIca", type="float", precision=12, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $retencionica = 0.00;

    /**
     * @var float
     *
     * @ORM\Column(name="retencionFte", type="float", precision=12, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $retencionfte = 0.00;

    /**
     * @var float
     *
     * @ORM\Column(name="retencionCree", type="float", precision=12, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $retencioncree = 0.00;

    /**
     * @var float
     *
     * @ORM\Column(name="subtotal", type="float", precision=12, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $subtotal = 0.00;

    /**
     * @var float
     *
     * @ORM\Column(name="iva", type="float", precision=12, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $iva = 0.00;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fechaCancelacion", type="date", nullable=true)
     */
    private $fechacancelacion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="observaciones", type="text", length=16777215, nullable=true)
     */
    private $observaciones;

    /**
     * @var float
     *
     * @ORM\Column(name="totalR", type="float", precision=12, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $totalr = 0.00;

    /**
     * @var \TipPrecio
     *
     * @ORM\ManyToOne(targetEntity="TipPrecio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipPrecio", referencedColumnName="idPrecio")
     * })
     */
    private $tipprecio;

    /**
     * @var \Clientes
     *
     * @ORM\ManyToOne(targetEntity="Clientes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCliente", referencedColumnName="idCliente")
     * })
     */
    private $idcliente;

    public function getIdfactura(): ?int
    {
        return $this->idfactura;
    }

    public function getIdpedido(): ?string
    {
        return $this->idpedido;
    }

    public function setIdpedido(string $idpedido): self
    {
        $this->idpedido = $idpedido;

        return $this;
    }

    public function getIdremision(): ?string
    {
        return $this->idremision;
    }

    public function setIdremision(string $idremision): self
    {
        $this->idremision = $idremision;

        return $this;
    }

    public function getFechafactura(): ?\DateTimeInterface
    {
        return $this->fechafactura;
    }

    public function setFechafactura(?\DateTimeInterface $fechafactura): self
    {
        $this->fechafactura = $fechafactura;

        return $this;
    }

    public function getFechavenc(): ?\DateTimeInterface
    {
        return $this->fechavenc;
    }

    public function setFechavenc(?\DateTimeInterface $fechavenc): self
    {
        $this->fechavenc = $fechavenc;

        return $this;
    }

    public function getEstado(): ?string
    {
        return $this->estado;
    }

    public function setEstado(string $estado): self
    {
        $this->estado = $estado;

        return $this;
    }

    public function getOrdencompra(): ?int
    {
        return $this->ordencompra;
    }

    public function setOrdencompra(int $ordencompra): self
    {
        $this->ordencompra = $ordencompra;

        return $this;
    }

    public function getDescuento(): ?float
    {
        return $this->descuento;
    }

    public function setDescuento(float $descuento): self
    {
        $this->descuento = $descuento;

        return $this;
    }

    public function getTotal(): ?float
    {
        return $this->total;
    }

    public function setTotal(float $total): self
    {
        $this->total = $total;

        return $this;
    }

    public function getRetencioniva(): ?float
    {
        return $this->retencioniva;
    }

    public function setRetencioniva(float $retencioniva): self
    {
        $this->retencioniva = $retencioniva;

        return $this;
    }

    public function getRetencionica(): ?float
    {
        return $this->retencionica;
    }

    public function setRetencionica(float $retencionica): self
    {
        $this->retencionica = $retencionica;

        return $this;
    }

    public function getRetencionfte(): ?float
    {
        return $this->retencionfte;
    }

    public function setRetencionfte(float $retencionfte): self
    {
        $this->retencionfte = $retencionfte;

        return $this;
    }

    public function getRetencioncree(): ?float
    {
        return $this->retencioncree;
    }

    public function setRetencioncree(float $retencioncree): self
    {
        $this->retencioncree = $retencioncree;

        return $this;
    }

    public function getSubtotal(): ?float
    {
        return $this->subtotal;
    }

    public function setSubtotal(float $subtotal): self
    {
        $this->subtotal = $subtotal;

        return $this;
    }

    public function getIva(): ?float
    {
        return $this->iva;
    }

    public function setIva(float $iva): self
    {
        $this->iva = $iva;

        return $this;
    }

    public function getFechacancelacion(): ?\DateTimeInterface
    {
        return $this->fechacancelacion;
    }

    public function setFechacancelacion(?\DateTimeInterface $fechacancelacion): self
    {
        $this->fechacancelacion = $fechacancelacion;

        return $this;
    }

    public function getObservaciones(): ?string
    {
        return $this->observaciones;
    }

    public function setObservaciones(?string $observaciones): self
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    public function getTotalr(): ?float
    {
        return $this->totalr;
    }

    public function setTotalr(float $totalr): self
    {
        $this->totalr = $totalr;

        return $this;
    }

    public function getTipprecio(): ?TipPrecio
    {
        return $this->tipprecio;
    }

    public function setTipprecio(?TipPrecio $tipprecio): self
    {
        $this->tipprecio = $tipprecio;

        return $this;
    }

    public function getIdcliente(): ?Clientes
    {
        return $this->idcliente;
    }

    public function setIdcliente(?Clientes $idcliente): self
    {
        $this->idcliente = $idcliente;

        return $this;
    }


}
