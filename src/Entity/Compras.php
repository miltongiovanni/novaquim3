<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Compras
 *
 * @ORM\Table(name="compras", indexes={@ORM\Index(name="compras_estados_idEstado_fk", columns={"estadoCompra"}), @ORM\Index(name="compras_proveedores_idProv_fk", columns={"idProv"}), @ORM\Index(name="compras_tip_compra_Id_tipo_fk", columns={"tipoCompra"})})
 * @ORM\Entity
 */
class Compras
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCompra", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcompra;

    /**
     * @var int|null
     *
     * @ORM\Column(name="numFact", type="integer", nullable=true)
     */
    private $numfact;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fechComp", type="date", nullable=true)
     */
    private $fechcomp;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fechVenc", type="date", nullable=true)
     */
    private $fechvenc;

    /**
     * @var int
     *
     * @ORM\Column(name="totalCompra", type="bigint", nullable=false)
     */
    private $totalcompra = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="subtotalCompra", type="float", precision=12, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $subtotalcompra = 0.00;

    /**
     * @var float
     *
     * @ORM\Column(name="ivaCompra", type="float", precision=12, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $ivacompra = 0.00;

    /**
     * @var int
     *
     * @ORM\Column(name="retefuenteCompra", type="integer", nullable=false)
     */
    private $retefuentecompra = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="reteicaCompra", type="float", precision=12, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $reteicacompra = 0.00;

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
     *   @ORM\JoinColumn(name="estadoCompra", referencedColumnName="idEstado")
     * })
     */
    private $estadocompra;

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
