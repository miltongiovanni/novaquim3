<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * OrdProdMp
 *
 * @ORM\Table(name="ord_prod_mp", indexes={@ORM\Index(name="ord_prod_mp_formula_mp_idFormulaMPrima_fk", columns={"idFormMP"}), @ORM\Index(name="ord_prod_mp_mprimas_codMPrima_fk", columns={"codMPrima"}), @ORM\Index(name="ord_prod_mp_personal_idPersonal_fk", columns={"codPersonal"})})
 * @ORM\Entity(repositoryClass="App\Repository\OrdProdMpRepository")
 */
class OrdProdMp
{
    /**
     * @var int
     *
     * @ORM\Column(name="loteMP", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $lotemp = '0';

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
     *   @ORM\JoinColumn(name="codMPrima", referencedColumnName="codMPrima")
     * })
     */
    private $codmprima;

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
     * @var \FormulaMp
     *
     * @ORM\ManyToOne(targetEntity="FormulaMp")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idFormMP", referencedColumnName="idFormulaMPrima")
     * })
     */
    private $idformmp;

    public function getLotemp(): ?int
    {
        return $this->lotemp;
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

    public function getCodmprima(): ?Mprimas
    {
        return $this->codmprima;
    }

    public function setCodmprima(?Mprimas $codmprima): self
    {
        $this->codmprima = $codmprima;

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

    public function getIdformmp(): ?FormulaMp
    {
        return $this->idformmp;
    }

    public function setIdformmp(?FormulaMp $idformmp): self
    {
        $this->idformmp = $idformmp;

        return $this;
    }


}
