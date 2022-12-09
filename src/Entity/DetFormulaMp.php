<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetFormulaMp
 *
 * @ORM\Table(name="det_formula_mp", indexes={@ORM\Index(name="det_formula_mp_mprimas_codMPrima_fk", columns={"codMPrima"})})
 * @ORM\Entity
 */
class DetFormulaMp
{
    /**
     * @var int
     *
     * @ORM\Column(name="idFormulaMPrima", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idformulamprima;

    /**
     * @var float|null
     *
     * @ORM\Column(name="porcentaje", type="float", precision=8, scale=5, nullable=true)
     */
    private $porcentaje;

    /**
     * @var \Mprimas
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Mprimas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codMPrima", referencedColumnName="codMPrima")
     * })
     */
    private $codmprima;


}
