<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Envases
 *
 * @ORM\Table(name="envases", indexes={@ORM\Index(name="envases_tasa_iva_idTasaIva_fk", columns={"codIva"})})
 * @ORM\Entity
 */
class Envases
{
    /**
     * @var int
     *
     * @ORM\Column(name="codEnvase", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codenvase = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="nomEnvase", type="string", length=50, nullable=true)
     */
    private $nomenvase;

    /**
     * @var int|null
     *
     * @ORM\Column(name="stockEnvase", type="integer", nullable=true)
     */
    private $stockenvase;

    /**
     * @var float
     *
     * @ORM\Column(name="precEnvase", type="float", precision=10, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $precenvase = 0.00;

    /**
     * @var \TasaIva
     *
     * @ORM\ManyToOne(targetEntity="TasaIva")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codIva", referencedColumnName="idTasaIva")
     * })
     */
    private $codiva;


}
