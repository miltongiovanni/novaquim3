<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EstadosUsuarios
 *
 * @ORM\Table(name="estados_usuarios")
 * @ORM\Entity
 */
class EstadosUsuarios
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
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=false)
     */
    private $descripcion = '';


}
