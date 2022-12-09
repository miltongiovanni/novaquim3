<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rutero
 *
 * @ORM\Table(name="rutero")
 * @ORM\Entity
 */
class Rutero
{
    /**
     * @var int
     *
     * @ORM\Column(name="idRutero", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrutero;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fechaRutero", type="date", nullable=true)
     */
    private $fecharutero;

    /**
     * @var string|null
     *
     * @ORM\Column(name="listaPedidos", type="string", length=255, nullable=true)
     */
    private $listapedidos;


}
