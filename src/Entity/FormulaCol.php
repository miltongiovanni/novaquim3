<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FormulaCol
 *
 * @ORM\Table(name="formula_col", indexes={@ORM\Index(name="formula_col_mprimas_codMPrima_fk", columns={"codSolucionColor"})})
 * @ORM\Entity(repositoryClass="App\Repository\FormulaColRepository")
 */
class FormulaCol
{
    /**
     * @var int
     *
     * @ORM\Column(name="idFormulaColor", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idformulacolor;

    /**
     * @var \Mprimas
     *
     * @ORM\ManyToOne(targetEntity="Mprimas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codSolucionColor", referencedColumnName="codMPrima")
     * })
     */
    private $codsolucioncolor;

    public function getIdformulacolor(): ?int
    {
        return $this->idformulacolor;
    }

    public function getCodsolucioncolor(): ?Mprimas
    {
        return $this->codsolucioncolor;
    }

    public function setCodsolucioncolor(?Mprimas $codsolucioncolor): self
    {
        $this->codsolucioncolor = $codsolucioncolor;

        return $this;
    }


}
