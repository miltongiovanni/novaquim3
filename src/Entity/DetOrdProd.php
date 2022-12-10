<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetOrdProd
 *
 * @ORM\Table(name="det_ord_prod", indexes={@ORM\Index(name="det_ord_prod_mprimas_codMPrima_fk", columns={"codMPrima"}), @ORM\Index(name="IDX_ECA1A8EF65B4329F", columns={"lote"})})
 * @ORM\Entity(repositoryClass="App\Repository\DetOrdProdRepository")
 */
class DetOrdProd
{
    /**
     * @var float|null
     *
     * @ORM\Column(name="cantidadMPrima", type="float", precision=11, scale=4, nullable=true)
     */
    private $cantidadmprima;

    /**
     * @var int|null
     *
     * @ORM\Column(name="orden", type="integer", nullable=true)
     */
    private $orden;

    /**
     * @var string
     *
     * @ORM\Column(name="loteMP", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $lotemp;

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

    /**
     * @var \OrdProd
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="OrdProd")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lote", referencedColumnName="lote")
     * })
     */
    private $lote;

    public function getCantidadmprima(): ?float
    {
        return $this->cantidadmprima;
    }

    public function setCantidadmprima(?float $cantidadmprima): self
    {
        $this->cantidadmprima = $cantidadmprima;

        return $this;
    }

    public function getOrden(): ?int
    {
        return $this->orden;
    }

    public function setOrden(?int $orden): self
    {
        $this->orden = $orden;

        return $this;
    }

    public function getLotemp(): ?string
    {
        return $this->lotemp;
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

    public function getLote(): ?OrdProd
    {
        return $this->lote;
    }

    public function setLote(?OrdProd $lote): self
    {
        $this->lote = $lote;

        return $this;
    }


}
