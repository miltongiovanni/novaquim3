<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Remision
 *
 * @ORM\Table(name="remision", indexes={@ORM\Index(name="remision_clientes_idCliente_fk", columns={"idCliente"}), @ORM\Index(name="remision_pedido_idPedido_fk", columns={"idPedido"})})
 * @ORM\Entity
 */
class Remision
{
    /**
     * @var int
     *
     * @ORM\Column(name="idRemision", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idremision;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fechaRemision", type="date", nullable=true)
     */
    private $fecharemision;

    /**
     * @var int
     *
     * @ORM\Column(name="idSucursal", type="integer", nullable=false, options={"default"="1"})
     */
    private $idsucursal = 1;

    /**
     * @var \Pedido
     *
     * @ORM\ManyToOne(targetEntity="Pedido")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPedido", referencedColumnName="idPedido")
     * })
     */
    private $idpedido;

    /**
     * @var \Clientes
     *
     * @ORM\ManyToOne(targetEntity="Clientes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCliente", referencedColumnName="idCliente")
     * })
     */
    private $idcliente;


}
