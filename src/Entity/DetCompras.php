<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetCompras
 *
 * @ORM\Table(name="det_compras", indexes={@ORM\Index(name="IDX_36F3D618FDD09965", columns={"idCompra"})})
 * @ORM\Entity
 */
class DetCompras
{
    /**
     * @var int
     *
     * @ORM\Column(name="codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codigo = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="cantidad", type="float", precision=10, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $cantidad = 0.0000;

    /**
     * @var float
     *
     * @ORM\Column(name="precio", type="float", precision=10, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $precio = 0.00;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lote", type="string", length=15, nullable=true)
     */
    private $lote = '0';

    /**
     * @var \Compras
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Compras")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCompra", referencedColumnName="idCompra")
     * })
     */
    private $idcompra;


}