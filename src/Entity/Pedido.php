<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Pedido
 *
 * @ORM\Table(name="pedido", indexes={@ORM\Index(name="pedido_idCliente_idSucursal_index", columns={"idCliente", "idSucursal"}), @ORM\Index(name="FK_pedido_estados_pedidos", columns={"estado"}), @ORM\Index(name="pedido_tip_precio_idPrecio_fk", columns={"tipoPrecio"}), @ORM\Index(name="IDX_C4EC16CEE4A5F0D7", columns={"idCliente"})})
 * @ORM\Entity(repositoryClass="App\Repository\PedidoRepository")
 */
class Pedido
{
    /**
     * @var int
     *
     * @ORM\Column(name="idPedido", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpedido;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fechaPedido", type="date", nullable=true)
     */
    private $fechapedido;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fechaEntrega", type="date", nullable=true)
     */
    private $fechaentrega;

    /**
     * @var int
     *
     * @ORM\Column(name="idSucursal", type="integer", nullable=false, options={"default"="1"})
     */
    private $idsucursal = 1;

    /**
     * @var int
     *
     * @ORM\Column(name="idUsuario", type="integer", nullable=false, options={"default"="9"})
     */
    private $idusuario = 9;

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
     * @var \TipPrecio
     *
     * @ORM\ManyToOne(targetEntity="TipPrecio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipoPrecio", referencedColumnName="idPrecio")
     * })
     */
    private $tipoprecio;

    /**
     * @var \EstadosPedidos
     *
     * @ORM\ManyToOne(targetEntity="EstadosPedidos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estado", referencedColumnName="idEstado")
     * })
     */
    private $estado;

    public function getIdpedido(): ?int
    {
        return $this->idpedido;
    }

    public function getFechapedido(): ?\DateTimeInterface
    {
        return $this->fechapedido;
    }

    public function setFechapedido(?\DateTimeInterface $fechapedido): self
    {
        $this->fechapedido = $fechapedido;

        return $this;
    }

    public function getFechaentrega(): ?\DateTimeInterface
    {
        return $this->fechaentrega;
    }

    public function setFechaentrega(?\DateTimeInterface $fechaentrega): self
    {
        $this->fechaentrega = $fechaentrega;

        return $this;
    }

    public function getIdsucursal(): ?int
    {
        return $this->idsucursal;
    }

    public function setIdsucursal(int $idsucursal): self
    {
        $this->idsucursal = $idsucursal;

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

    public function getIdcliente(): ?Clientes
    {
        return $this->idcliente;
    }

    public function setIdcliente(?Clientes $idcliente): self
    {
        $this->idcliente = $idcliente;

        return $this;
    }

    public function getTipoprecio(): ?TipPrecio
    {
        return $this->tipoprecio;
    }

    public function setTipoprecio(?TipPrecio $tipoprecio): self
    {
        $this->tipoprecio = $tipoprecio;

        return $this;
    }

    public function getEstado(): ?EstadosPedidos
    {
        return $this->estado;
    }

    public function setEstado(?EstadosPedidos $estado): self
    {
        $this->estado = $estado;

        return $this;
    }


}
