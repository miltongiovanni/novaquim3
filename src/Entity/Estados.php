<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estados
 *
 * @ORM\Table(name="estados")
 * @ORM\Entity
 */
class Estados
{
    /**
     * @var int
     *
     * @ORM\Column(name="idEstado", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idestado = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="descEstado", type="string", length=30, nullable=false)
     */
    private $descestado = '';


}
