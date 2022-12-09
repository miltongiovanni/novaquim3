<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gastos
 *
 * @ORM\Table(name="gastos", indexes={@ORM\Index(name="gastos_proveedores_idProv_fk", columns={"idProv"}), @ORM\Index(name="gastos_estados_idEstado_fk", columns={"estadoGasto"}), @ORM\Index(name="gastos_tip_compra_idTipo_fk", columns={"tipoCompra"})})
 * @ORM\Entity
 */
class Gastos
{
    /**
     * @var int
     *
     * @ORM\Column(name="idGasto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idgasto;

    /**
     * @var int|null
     *
     * @ORM\Column(name="numFact", type="bigint", nullable=true)
     */
    private $numfact;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fechGasto", type="date", nullable=true)
     */
    private $fechgasto;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fechVenc", type="date", nullable=true)
     */
    private $fechvenc;

    /**
     * @var int
     *
     * @ORM\Column(name="totalGasto", type="bigint", nullable=false)
     */
    private $totalgasto = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="retefuenteGasto", type="integer", nullable=false)
     */
    private $retefuentegasto = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="subtotalGasto", type="float", precision=12, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $subtotalgasto = 0.00;

    /**
     * @var float
     *
     * @ORM\Column(name="ivaGasto", type="float", precision=12, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $ivagasto = 0.00;

    /**
     * @var float
     *
     * @ORM\Column(name="reteicaGasto", type="float", precision=12, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $reteicagasto = 0.00;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fechCancelacion", type="date", nullable=true)
     */
    private $fechcancelacion;

    /**
     * @var int
     *
     * @ORM\Column(name="idUsuario", type="integer", nullable=false, options={"default"="9"})
     */
    private $idusuario = 9;

    /**
     * @var \TipCompra
     *
     * @ORM\ManyToOne(targetEntity="TipCompra")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipoCompra", referencedColumnName="idTipo")
     * })
     */
    private $tipocompra;

    /**
     * @var \Estados
     *
     * @ORM\ManyToOne(targetEntity="Estados")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estadoGasto", referencedColumnName="idEstado")
     * })
     */
    private $estadogasto;

    /**
     * @var \Proveedores
     *
     * @ORM\ManyToOne(targetEntity="Proveedores")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idProv", referencedColumnName="idProv")
     * })
     */
    private $idprov;


}
