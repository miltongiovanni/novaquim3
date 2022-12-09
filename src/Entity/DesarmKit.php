<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DesarmKit
 *
 * @ORM\Table(name="desarm_kit", indexes={@ORM\Index(name="desarm_kit_kit_idKit_fk", columns={"codKit"})})
 * @ORM\Entity
 */
class DesarmKit
{
    /**
     * @var int
     *
     * @ORM\Column(name="idDesarmado", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddesarmado;

    /**
     * @var int
     *
     * @ORM\Column(name="cantDesarmado", type="integer", nullable=false)
     */
    private $cantdesarmado = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechDesarmado", type="date", nullable=false)
     */
    private $fechdesarmado;

    /**
     * @var \Kit
     *
     * @ORM\ManyToOne(targetEntity="Kit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codKit", referencedColumnName="idKit")
     * })
     */
    private $codkit;


}
