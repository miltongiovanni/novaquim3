<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * OrdProdCol
 *
 * @ORM\Table(name="ord_prod_col", indexes={@ORM\Index(name="ord_prod_col_mprimas_codMPrima_fk", columns={"codColor"}), @ORM\Index(name="ord_prod_col_personal_idPersonal_fk", columns={"codPersonal"}), @ORM\Index(name="ord_prod_col_formula_col_idFormulaColor_fk", columns={"idFormulaColor"})})
 * @ORM\Entity(repositoryClass="App\Repository\OrdProdColRepository")
 */
class OrdProdCol
{
    /**
     * @var int
     *
     * @ORM\Column(name="loteColor", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $lotecolor = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fechProd", type="date", nullable=true)
     */
    private $fechprod;

    /**
     * @var float|null
     *
     * @ORM\Column(name="cantKg", type="float", precision=8, scale=4, nullable=true)
     */
    private $cantkg;

    /**
     * @var \Mprimas
     *
     * @ORM\ManyToOne(targetEntity="Mprimas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codColor", referencedColumnName="codMPrima")
     * })
     */
    private $codcolor;

    /**
     * @var \Personal
     *
     * @ORM\ManyToOne(targetEntity="Personal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codPersonal", referencedColumnName="idPersonal")
     * })
     */
    private $codpersonal;

    /**
     * @var \FormulaCol
     *
     * @ORM\ManyToOne(targetEntity="FormulaCol")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idFormulaColor", referencedColumnName="idFormulaColor")
     * })
     */
    private $idformulacolor;

    public function getLotecolor(): ?int
    {
        return $this->lotecolor;
    }

    public function getFechprod(): ?\DateTimeInterface
    {
        return $this->fechprod;
    }

    public function setFechprod(?\DateTimeInterface $fechprod): self
    {
        $this->fechprod = $fechprod;

        return $this;
    }

    public function getCantkg(): ?float
    {
        return $this->cantkg;
    }

    public function setCantkg(?float $cantkg): self
    {
        $this->cantkg = $cantkg;

        return $this;
    }

    public function getCodcolor(): ?Mprimas
    {
        return $this->codcolor;
    }

    public function setCodcolor(?Mprimas $codcolor): self
    {
        $this->codcolor = $codcolor;

        return $this;
    }

    public function getCodpersonal(): ?Personal
    {
        return $this->codpersonal;
    }

    public function setCodpersonal(?Personal $codpersonal): self
    {
        $this->codpersonal = $codpersonal;

        return $this;
    }

    public function getIdformulacolor(): ?FormulaCol
    {
        return $this->idformulacolor;
    }

    public function setIdformulacolor(?FormulaCol $idformulacolor): self
    {
        $this->idformulacolor = $idformulacolor;

        return $this;
    }


}
