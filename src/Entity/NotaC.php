<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * NotaC
 *
 * @ORM\Table(name="nota_c", indexes={@ORM\Index(name="nota_c_factura_idFactura_fk", columns={"facturaDestino"}), @ORM\Index(name="nota_c_clientes_idCliente_fk", columns={"idCliente"}), @ORM\Index(name="nota_c_factura_idFactura_fk_2", columns={"facturaOrigen"})})
 * @ORM\Entity(repositoryClass="App\Repository\NotaCRepository")
 */
class NotaC
{
    /**
     * @var int
     *
     * @ORM\Column(name="idNotaC", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idnotac;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fechaNotaC", type="date", nullable=true)
     */
    private $fechanotac;

    /**
     * @var float
     *
     * @ORM\Column(name="totalNotaC", type="float", precision=12, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $totalnotac = 0.00;

    /**
     * @var float
     *
     * @ORM\Column(name="subtotalNotaC", type="float", precision=12, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $subtotalnotac = 0.00;

    /**
     * @var float|null
     *
     * @ORM\Column(name="ivaNotaC", type="float", precision=12, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $ivanotac = 0.00;

    /**
     * @var float|null
     *
     * @ORM\Column(name="retFteNotaC", type="float", precision=12, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $retftenotac = 0.00;

    /**
     * @var float|null
     *
     * @ORM\Column(name="retIcaNotaC", type="float", precision=12, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $reticanotac = 0.00;

    /**
     * @var float|null
     *
     * @ORM\Column(name="retIvaNotaC", type="float", precision=12, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $retivanotac = 0.00;

    /**
     * @var int
     *
     * @ORM\Column(name="motivo", type="integer", nullable=false)
     */
    private $motivo = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="descuentoFactOrigen", type="float", precision=7, scale=2, nullable=true)
     */
    private $descuentofactorigen;

    /**
     * @var \Factura
     *
     * @ORM\ManyToOne(targetEntity="Factura")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="facturaOrigen", referencedColumnName="idFactura")
     * })
     */
    private $facturaorigen;

    /**
     * @var \Clientes
     *
     * @ORM\ManyToOne(targetEntity="Clientes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCliente", referencedColumnName="idCliente")
     * })
     */
    private $idcliente;

    /**
     * @var \Factura
     *
     * @ORM\ManyToOne(targetEntity="Factura")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="facturaDestino", referencedColumnName="idFactura")
     * })
     */
    private $facturadestino;

    public function getIdnotac(): ?int
    {
        return $this->idnotac;
    }

    public function getFechanotac(): ?\DateTimeInterface
    {
        return $this->fechanotac;
    }

    public function setFechanotac(?\DateTimeInterface $fechanotac): self
    {
        $this->fechanotac = $fechanotac;

        return $this;
    }

    public function getTotalnotac(): ?float
    {
        return $this->totalnotac;
    }

    public function setTotalnotac(float $totalnotac): self
    {
        $this->totalnotac = $totalnotac;

        return $this;
    }

    public function getSubtotalnotac(): ?float
    {
        return $this->subtotalnotac;
    }

    public function setSubtotalnotac(float $subtotalnotac): self
    {
        $this->subtotalnotac = $subtotalnotac;

        return $this;
    }

    public function getIvanotac(): ?float
    {
        return $this->ivanotac;
    }

    public function setIvanotac(?float $ivanotac): self
    {
        $this->ivanotac = $ivanotac;

        return $this;
    }

    public function getRetftenotac(): ?float
    {
        return $this->retftenotac;
    }

    public function setRetftenotac(?float $retftenotac): self
    {
        $this->retftenotac = $retftenotac;

        return $this;
    }

    public function getReticanotac(): ?float
    {
        return $this->reticanotac;
    }

    public function setReticanotac(?float $reticanotac): self
    {
        $this->reticanotac = $reticanotac;

        return $this;
    }

    public function getRetivanotac(): ?float
    {
        return $this->retivanotac;
    }

    public function setRetivanotac(?float $retivanotac): self
    {
        $this->retivanotac = $retivanotac;

        return $this;
    }

    public function getMotivo(): ?int
    {
        return $this->motivo;
    }

    public function setMotivo(int $motivo): self
    {
        $this->motivo = $motivo;

        return $this;
    }

    public function getDescuentofactorigen(): ?float
    {
        return $this->descuentofactorigen;
    }

    public function setDescuentofactorigen(?float $descuentofactorigen): self
    {
        $this->descuentofactorigen = $descuentofactorigen;

        return $this;
    }

    public function getFacturaorigen(): ?Factura
    {
        return $this->facturaorigen;
    }

    public function setFacturaorigen(?Factura $facturaorigen): self
    {
        $this->facturaorigen = $facturaorigen;

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

    public function getFacturadestino(): ?Factura
    {
        return $this->facturadestino;
    }

    public function setFacturadestino(?Factura $facturadestino): self
    {
        $this->facturadestino = $facturadestino;

        return $this;
    }


}
