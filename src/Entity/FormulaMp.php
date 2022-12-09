<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FormulaMp
 *
 * @ORM\Table(name="formula_mp", indexes={@ORM\Index(name="formula_mp_mprimas_codMPrima_fk", columns={"codMPrima"})})
 * @ORM\Entity
 */
class FormulaMp
{
    /**
     * @var int
     *
     * @ORM\Column(name="idFormulaMPrima", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idformulamprima;

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
