<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Cotizaciones
 *
 * @ORM\Table(name="cotizaciones", indexes={@ORM\Index(name="cotizaciones_clientes_cotiz_idCliente_fk", columns={"idCliente"})})
 * @ORM\Entity(repositoryClass="App\Repository\CotizacionesRepository")
 */
class Cotizaciones
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCotizacion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcotizacion;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fechaCotizacion", type="date", nullable=true)
     */
    private $fechacotizacion;

    /**
     * @var int
     *
     * @ORM\Column(name="precioCotizacion", type="integer", nullable=false)
     */
    private $preciocotizacion = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="presentaciones", type="integer", nullable=false)
     */
    private $presentaciones = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="distribucion", type="string", length=20, nullable=true)
     */
    private $distribucion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="productos", type="string", length=20, nullable=true)
     */
    private $productos;

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

    public function getIdcotizacion(): ?int
    {
        return $this->idcotizacion;
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

    public function getPreciocotizacion(): ?int
    {
        return $this->preciocotizacion;
    }

    public function setPreciocotizacion(int $preciocotizacion): self
    {
        $this->preciocotizacion = $preciocotizacion;

        return $this;
    }

    public function getPresentaciones(): ?int
    {
        return $this->presentaciones;
    }

    public function setPresentaciones(int $presentaciones): self
    {
        $this->presentaciones = $presentaciones;

        return $this;
    }

    public function getDistribucion(): ?string
    {
        return $this->distribucion;
    }

    public function setDistribucion(?string $distribucion): self
    {
        $this->distribucion = $distribucion;

        return $this;
    }

    public function getProductos(): ?string
    {
        return $this->productos;
    }

    public function setProductos(?string $productos): self
    {
        $this->productos = $productos;

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
