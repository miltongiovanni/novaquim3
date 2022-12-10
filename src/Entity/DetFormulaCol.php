<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetFormulaCol
 *
 * @ORM\Table(name="det_formula_col", indexes={@ORM\Index(name="det_formula_col_mprimas_codMPrima_fk", columns={"codMprima"})})
 * @ORM\Entity(repositoryClass="App\Repository\DetFormulaColRepository")
 */
class DetFormulaCol
{
    /**
     * @var int
     *
     * @ORM\Column(name="idFormulaColor", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idformulacolor;

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
     *   @ORM\JoinColumn(name="codMprima", referencedColumnName="codMPrima")
     * })
     */
    private $codmprima;

    public function getIdformulacolor(): ?int
    {
        return $this->idformulacolor;
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
