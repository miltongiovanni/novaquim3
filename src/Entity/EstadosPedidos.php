<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EstadosPedidos
 *
 * @ORM\Table(name="estados_pedidos")
 * @ORM\Entity
 */
class EstadosPedidos
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
     * @var string|null
     *
     * @ORM\Column(name="descEstado", type="string", length=20, nullable=true)
     */
    private $descestado;


}
