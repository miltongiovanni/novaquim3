<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CalMprimas
 *
 * @ORM\Table(name="cal_mprimas")
 * @ORM\Entity
 */
class CalMprimas
{
    /**
     * @var int
     *
     * @ORM\Column(name="Cod_mprima", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codMprima;

    /**
     * @var string
     *
     * @ORM\Column(name="Lote_mp", type="string", length=15, nullable=false, options={"default"="1"})
     */
    private $loteMp = '1';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fech_analisis", type="date", nullable=true)
     */
    private $fechAnalisis;

    /**
     * @var string|null
     *
     * @ORM\Column(name="apariencia_mp", type="string", length=20, nullable=true)
     */
    private $aparienciaMp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="olor_mp", type="string", length=30, nullable=true)
     */
    private $olorMp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="color_mp", type="string", length=30, nullable=true)
     */
    private $colorMp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pH_mp", type="string", length=5, nullable=true)
     */
    private $phMp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="densidad_mp", type="string", length=5, nullable=true)
     */
    private $densidadMp;

    /**
     * @var int
     *
     * @ORM\Column(name="est_mprima", type="integer", nullable=false)
     */
    private $estMprima = '0';


}
