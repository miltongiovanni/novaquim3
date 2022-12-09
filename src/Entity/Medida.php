<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medida
 *
 * @ORM\Table(name="medida")
 * @ORM\Entity
 */
class Medida
{
    /**
     * @var int
     *
     * @ORM\Column(name="idMedida", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmedida = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="desMedida", type="string", length=20, nullable=false)
     */
    private $desmedida = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="cantMedida", type="integer", nullable=true)
     */
    private $cantmedida;


}
