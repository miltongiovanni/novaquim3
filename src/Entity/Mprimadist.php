<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mprimadist
 *
 * @ORM\Table(name="mprimadist", indexes={@ORM\Index(name="env_dist_mprimas_codMPrima_fk", columns={"codMPrima"})})
 * @ORM\Entity
 */
class Mprimadist
{
    /**
     * @var int
     *
     * @ORM\Column(name="codMPrimaDist", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codmprimadist;

    /**
     * @var string|null
     *
     * @ORM\Column(name="producto", type="string", length=30, nullable=true)
     */
    private $producto;

    /**
     * @var float|null
     *
     * @ORM\Column(name="densidad", type="float", precision=3, scale=2, nullable=true)
     */
    private $densidad;

    /**
     * @var \Mprimas
     *
     * @ORM\ManyToOne(targetEntity="Mprimas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codMPrima", referencedColumnName="codMPrima")
     * })
     */
    private $codmprima;


}
