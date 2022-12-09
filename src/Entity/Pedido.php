<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pedido
 *
 * @ORM\Table(name="pedido", indexes={@ORM\Index(name="pedido_idCliente_idSucursal_index", columns={"idCliente", "idSucursal"}), @ORM\Index(name="FK_pedido_estados_pedidos", columns={"estado"}), @ORM\Index(name="pedido_tip_precio_idPrecio_fk", columns={"tipoPrecio"}), @ORM\Index(name="IDX_C4EC16CEE4A5F0D7", columns={"idCliente"})})
 * @ORM\Entity
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


}
