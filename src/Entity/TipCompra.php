<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipCompra
 *
 * @ORM\Table(name="tip_compra")
 * @ORM\Entity
 */
class TipCompra
{
    /**
     * @var int
     *
     * @ORM\Column(name="idTipo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtipo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="tipoComp", type="string", length=20, nullable=false)
     */
    private $tipocomp = '';


}
