<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * CotPersonalizada
 *
 * @ORM\Table(name="cot_personalizada", indexes={@ORM\Index(name="cot_personalizada_clientes_cotiz_idCliente_fk", columns={"idCliente"})})
 * @ORM\Entity(repositoryClass="App\Repository\CotPersonalizadaRepository")
 */
class CotPersonalizada
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCotPersonalizada", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcotpersonalizada;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fechaCotizacion", type="date", nullable=true)
     */
    private $fechacotizacion;

    /**
     * @var int
     *
     * @ORM\Column(name="tipPrecio", type="integer", nullable=false)
     */
    private $tipprecio = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="destino", type="integer", nullable=true, options={"default"="1"})
     */
    private $destino = 1;

    /**
     * @var int
     *
     * @ORM\Column(name="idUsuario", type="integer", nullable=false, options={"default"="10"})
     */
    private $idusuario = 10;

    /**
     * @var \ClientesCotiz
     *
     * @ORM\ManyToOne(targetEntity="ClientesCotiz")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCliente", referencedColumnName="idCliente")
     * })
     */
    private $idcliente;

    public function getIdcotpersonalizada(): ?int
    {
        return $this->idcotpersonalizada;
    }

    public function getFechacotizacion(): ?\DateTimeInterface
    {
        return $this->fechacotizacion;
    }

    public function setFechacotizacion(?\DateTimeInterface $fechacotizacion): self
    {
        $this->fechacotizacion = $fechacotizacion;

        return $this;
    }

    public function getTipprecio(): ?int
    {
        return $this->tipprecio;
    }

    public function setTipprecio(int $tipprecio): self
    {
        $this->tipprecio = $tipprecio;

        return $this;
    }

    public function getDestino(): ?int
    {
        return $this->destino;
    }

    public function setDestino(?int $destino): self
    {
        $this->destino = $destino;

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

    public function getIdcliente(): ?ClientesCotiz
    {
        return $this->idcliente;
    }

    public function setIdcliente(?ClientesCotiz $idcliente): self
    {
        $this->idcliente = $idcliente;

        return $this;
    }


}
