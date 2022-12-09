<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArmKit
 *
 * @ORM\Table(name="arm_kit")
 * @ORM\Entity
 */
class ArmKit
{
    /**
     * @var int
     *
     * @ORM\Column(name="idArmado", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idarmado;

    /**
     * @var int
     *
     * @ORM\Column(name="codKit", type="integer", nullable=false)
     */
    private $codkit = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cantArmado", type="integer", nullable=false)
     */
    private $cantarmado = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechArmado", type="date", nullable=false)
     */
    private $fecharmado;


}
