<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetOrdProdCol
 *
 * @ORM\Table(name="det_ord_prod_col", indexes={@ORM\Index(name="det_ord_prod_col_mprimas_codMPrima_fk", columns={"codMPrima"}), @ORM\Index(name="IDX_190D91C7743E2E28", columns={"loteColor"})})
 * @ORM\Entity(repositoryClass="App\Repository\DetOrdProdColRepository")
 */
class DetOrdProdCol
{
    /**
     * @var float|null
     *
     * @ORM\Column(name="cantMPrima", type="float", precision=11, scale=4, nullable=true)
     */
    private $cantmprima;

    /**
     * @var string
     *
     * @ORM\Column(name="loteMPrima", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $lotemprima;

    /**
     * @var \OrdProdCol
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="OrdProdCol")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="loteColor", referencedColumnName="loteColor")
     * })
     */
    private $lotecolor;

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

    public function getCantmprima(): ?float
    {
        return $this->cantmprima;
    }

    public function setCantmprima(?float $cantmprima): self
    {
        $this->cantmprima = $cantmprima;

        return $this;
    }

    public function getLotemprima(): ?string
    {
        return $this->lotemprima;
    }

    public function getLotecolor(): ?OrdProdCol
    {
        return $this->lotecolor;
    }

    public function setLotecolor(?OrdProdCol $lotecolor): self
    {
        $this->lotecolor = $lotecolor;

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
