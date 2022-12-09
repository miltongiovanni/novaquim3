<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CalProdTerminado
 *
 * @ORM\Table(name="cal_prod_terminado")
 * @ORM\Entity
 */
class CalProdTerminado
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
    private $lote;

    /**
     * @var int|null
     *
     * @ORM\Column(name="etiquetado", type="integer", nullable=true)
     */
    private $etiquetado = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="envasado", type="integer", nullable=true)
     */
    private $envasado = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="observaciones", type="text", length=65535, nullable=true)
     */
    private $observaciones;


}
