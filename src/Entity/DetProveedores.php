<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetProveedores
 *
 * @ORM\Table(name="det_proveedores")
 * @ORM\Entity
 */
class DetProveedores
{
    /**
     * @var int
     *
     * @ORM\Column(name="idProv", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idprov;

    /**
     * @var int
     *
     * @ORM\Column(name="Codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codigo = '0';


}
