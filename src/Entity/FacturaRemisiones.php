<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FacturaRemisiones
 *
 * @ORM\Table(name="factura_remisiones")
 * @ORM\Entity
 */
class FacturaRemisiones
{
    /**
     * @var int
     *
     * @ORM\Column(name="idFactura", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idfactura = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="idRemision", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idremision = '0';


}
