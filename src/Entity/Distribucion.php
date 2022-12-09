<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Distribucion
 *
 * @ORM\Table(name="distribucion", indexes={@ORM\Index(name="distribucion_tasa_iva_idTasaIva_fk", columns={"codIva"}), @ORM\Index(name="distribucion_cat_dis_idCatDis_fk", columns={"idCatDis"})})
 * @ORM\Entity
 */
class Distribucion
{
    /**
     * @var int
     *
     * @ORM\Column(name="idDistribucion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddistribucion = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="producto", type="string", length=70, nullable=false)
     */
    private $producto = '';

    /**
     * @var int
     *
     * @ORM\Column(name="precioVta", type="integer", nullable=false)
     */
    private $preciovta = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="precioCom", type="float", precision=12, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $preciocom = 0.00;

    /**
     * @var int
     *
     * @ORM\Column(name="cotiza", type="integer", nullable=false, options={"default"="1"})
     */
    private $cotiza = 1;

    /**
     * @var int
     *
     * @ORM\Column(name="activo", type="integer", nullable=false, options={"default"="1"})
     */
    private $activo = 1;

    /**
     * @var int
     *
     * @ORM\Column(name="stockDis", type="integer", nullable=false)
     */
    private $stockdis = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="codSiigo", type="integer", nullable=true)
     */
    private $codsiigo = '0';

    /**
     * @var \CatDis
     *
     * @ORM\ManyToOne(targetEntity="CatDis")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCatDis", referencedColumnName="idCatDis")
     * })
     */
    private $idcatdis;

    /**
     * @var \TasaIva
     *
     * @ORM\ManyToOne(targetEntity="TasaIva")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codIva", referencedColumnName="idTasaIva")
     * })
     */
    private $codiva;


}
