<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Factura
 *
 * @ORM\Table(name="factura", indexes={@ORM\Index(name="factura_tip_precio_idPrecio_fk", columns={"tipPrecio"}), @ORM\Index(name="factura_clientes_idCliente_fk", columns={"idCliente"})})
 * @ORM\Entity
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


}
