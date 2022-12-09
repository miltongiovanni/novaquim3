<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CalProducto
 *
 * @ORM\Table(name="cal_producto")
 * @ORM\Entity
 */
class CalProducto
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="lote", type="integer", nullable=false)
     */
    private $lote = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="densidadProd", type="float", precision=5, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $densidadprod = 0.0000;

    /**
     * @var float
     *
     * @ORM\Column(name="pHProd", type="float", precision=4, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $phprod = 0.00;

    /**
     * @var int
     *
     * @ORM\Column(name="olorProd", type="integer", nullable=false)
     */
    private $olorprod = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="colorProd", type="integer", nullable=false)
     */
    private $colorprod = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="aparienciaProd", type="integer", nullable=false)
     */
    private $aparienciaprod = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="observacionesProd", type="text", length=65535, nullable=true)
     */
    private $observacionesprod;


}
