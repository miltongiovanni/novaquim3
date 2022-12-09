<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TapasVal
 *
 * @ORM\Table(name="tapas_val", indexes={@ORM\Index(name="tapas_val_tasa_iva_idTasaIva_fk", columns={"codIva"})})
 * @ORM\Entity
 */
class TapasVal
{
    /**
     * @var int
     *
     * @ORM\Column(name="codTapa", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codtapa = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="tapa", type="string", length=50, nullable=true)
     */
    private $tapa;

    /**
     * @var int|null
     *
     * @ORM\Column(name="stockTapa", type="integer", nullable=true)
     */
    private $stocktapa;

    /**
     * @var float|null
     *
     * @ORM\Column(name="preTapa", type="float", precision=7, scale=2, nullable=true)
     */
    private $pretapa;

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