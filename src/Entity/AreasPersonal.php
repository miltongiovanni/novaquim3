<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AreasPersonal
 *
 * @ORM\Table(name="areas_personal")
 * @ORM\Entity
 */
class AreasPersonal
{
    /**
     * @var int
     *
     * @ORM\Column(name="idArea", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idarea;

    /**
     * @var string|null
     *
     * @ORM\Column(name="area", type="string", length=30, nullable=true)
     */
    private $area;


}
