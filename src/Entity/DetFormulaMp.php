<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetFormulaMp
 *
 * @ORM\Table(name="det_formula_mp", indexes={@ORM\Index(name="det_formula_mp_mprimas_codMPrima_fk", columns={"codMPrima"})})
 * @ORM\Entity(repositoryClass="App\Repository\DetFormulaMpRepository")
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

    public function getIdformulamprima(): ?int
    {
        return $this->idformulamprima;
    }

    public function getPorcentaje(): ?float
    {
        return $this->porcentaje;
    }

    public function setPorcentaje(?float $porcentaje): self
    {
        $this->porcentaje = $porcentaje;

        return $this;
    }

    public function getCodmprima(): ?Mprimas
    {
        return $this->codmprima;
    }

    public function setCodmprima(?Mprimas $codmprima): self
    {
        $this->codmprima = $codmprima;

        return $this;
    }


}
