<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Remision1
 *
 * @ORM\Table(name="remision1")
 * @ORM\Entity
 */
class Remision1
{
    /**
     * @var int
     *
     * @ORM\Column(name="idRemision", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idremision;

    /**
     * @var string
     *
     * @ORM\Column(name="cliente", type="string", length=40, nullable=false)
     */
    private $cliente = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaRemision", type="date", nullable=false)
     */
    private $fecharemision;

    /**
     * @var float
     *
     * @ORM\Column(name="valor", type="float", precision=12, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $valor = 0.00;


}
