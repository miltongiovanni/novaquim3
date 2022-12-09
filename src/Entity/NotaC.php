<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NotaC
 *
 * @ORM\Table(name="nota_c", indexes={@ORM\Index(name="nota_c_factura_idFactura_fk", columns={"facturaDestino"}), @ORM\Index(name="nota_c_clientes_idCliente_fk", columns={"idCliente"}), @ORM\Index(name="nota_c_factura_idFactura_fk_2", columns={"facturaOrigen"})})
 * @ORM\Entity
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


}
