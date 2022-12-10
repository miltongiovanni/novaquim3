<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Egreso
 *
 * @ORM\Table(name="egreso", indexes={@ORM\Index(name="egreso_form_pago_idFormaPago_fk", columns={"formPago"})})
 * @ORM\Entity(repositoryClass="App\Repository\EgresoRepository")
 */
class Egreso
{
    /**
     * @var int
     *
     * @ORM\Column(name="idEgreso", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idegreso;

    /**
     * @var int
     *
     * @ORM\Column(name="idCompra", type="integer", nullable=false)
     */
    private $idcompra = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="tipoCompra", type="integer", nullable=false)
     */
    private $tipocompra = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pago", type="integer", nullable=false)
     */
    private $pago = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fechPago", type="date", nullable=true)
     */
    private $fechpago;

    /**
     * @var int
     *
     * @ORM\Column(name="descuentoE", type="integer", nullable=false)
     */
    private $descuentoe = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="idUsuario", type="integer", nullable=false, options={"default"="34"})
     */
    private $idusuario = 34;

    /**
     * @var \FormPago
     *
     * @ORM\ManyToOne(targetEntity="FormPago")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="formPago", referencedColumnName="idFormaPago")
     * })
     */
    private $formpago;

    public function getIdegreso(): ?int
    {
        return $this->idegreso;
    }

    public function getIdcompra(): ?int
    {
        return $this->idcompra;
    }

    public function setIdcompra(int $idcompra): self
    {
        $this->idcompra = $idcompra;

        return $this;
    }

    public function getTipocompra(): ?int
    {
        return $this->tipocompra;
    }

    public function setTipocompra(int $tipocompra): self
    {
        $this->tipocompra = $tipocompra;

        return $this;
    }

    public function getPago(): ?int
    {
        return $this->pago;
    }

    public function setPago(int $pago): self
    {
        $this->pago = $pago;

        return $this;
    }

    public function getFechpago(): ?\DateTimeInterface
    {
        return $this->fechpago;
    }

    public function setFechpago(?\DateTimeInterface $fechpago): self
    {
        $this->fechpago = $fechpago;

        return $this;
    }

    public function getDescuentoe(): ?int
    {
        return $this->descuentoe;
    }

    public function setDescuentoe(int $descuentoe): self
    {
        $this->descuentoe = $descuentoe;

        return $this;
    }

    public function getIdusuario(): ?int
    {
        return $this->idusuario;
    }

    public function setIdusuario(int $idusuario): self
    {
        $this->idusuario = $idusuario;

        return $this;
    }

    public function getFormpago(): ?FormPago
    {
        return $this->formpago;
    }

    public function setFormpago(?FormPago $formpago): self
    {
        $this->formpago = $formpago;

        return $this;
    }


}
