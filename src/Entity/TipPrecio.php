<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipPrecio
 *
 * @ORM\Table(name="tip_precio")
 * @ORM\Entity
 */
class TipPrecio
{
    /**
     * @var int
     *
     * @ORM\Column(name="idPrecio", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idprecio;

    /**
     * @var string
     *
     * @ORM\Column(name="tipoPrecio", type="string", length=20, nullable=false)
     */
    private $tipoprecio = '';


}
