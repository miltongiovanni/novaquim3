<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EstadosPers
 *
 * @ORM\Table(name="estados_pers")
 * @ORM\Entity
 */
class EstadosPers
{
    /**
     * @var int
     *
     * @ORM\Column(name="idEstado", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idestado;

    /**
     * @var string
     *
     * @ORM\Column(name="estadoPersona", type="string", length=15, nullable=false)
     */
    private $estadopersona;


}
