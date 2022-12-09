<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Productos
 *
 * @ORM\Table(name="productos", indexes={@ORM\Index(name="productos_cat_prod_idCatProd_fk", columns={"idCatProd"})})
 * @ORM\Entity
 */
class Productos
{
    /**
     * @var int
     *
     * @ORM\Column(name="codProducto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codproducto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="nomProducto", type="string", length=50, nullable=false)
     */
    private $nomproducto = '';

    /**
     * @var int
     *
     * @ORM\Column(name="prodActivo", type="integer", nullable=false, options={"default"="1"})
     */
    private $prodactivo = 1;

    /**
     * @var float|null
     *
     * @ORM\Column(name="densMin", type="float", precision=5, scale=4, nullable=true)
     */
    private $densmin;

    /**
     * @var float|null
     *
     * @ORM\Column(name="densMax", type="float", precision=5, scale=4, nullable=true)
     */
    private $densmax;

    /**
     * @var float|null
     *
     * @ORM\Column(name="pHmin", type="float", precision=4, scale=2, nullable=true)
     */
    private $phmin;

    /**
     * @var float|null
     *
     * @ORM\Column(name="pHmax", type="float", precision=4, scale=2, nullable=true)
     */
    private $phmax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fragancia", type="string", length=20, nullable=true)
     */
    private $fragancia;

    /**
     * @var string|null
     *
     * @ORM\Column(name="color", type="string", length=20, nullable=true)
     */
    private $color;

    /**
     * @var string|null
     *
     * @ORM\Column(name="apariencia", type="string", length=30, nullable=true)
     */
    private $apariencia;

    /**
     * @var int
     *
     * @ORM\Column(name="vencimiento", type="integer", nullable=false, options={"default"="365"})
     */
    private $vencimiento = 365;

    /**
     * @var \CatProd
     *
     * @ORM\ManyToOne(targetEntity="CatProd")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCatProd", referencedColumnName="idCatProd")
     * })
     */
    private $idcatprod;


}
