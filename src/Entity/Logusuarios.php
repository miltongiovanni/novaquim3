<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Logusuarios
 *
 * @ORM\Table(name="logusuarios")
 * @ORM\Entity
 */
class Logusuarios
{
    /**
     * @var int
     *
     * @ORM\Column(name="IdLog", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idlog;

    /**
     * @var int
     *
     * @ORM\Column(name="IdUsuario", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idusuario = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $fecha = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="Motivo", type="string", length=45, nullable=false)
     */
    private $motivo = '';


}
