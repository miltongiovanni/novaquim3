<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Mprimas
 *
 * @ORM\Table(name="mprimas", indexes={@ORM\Index(name="mprimas_cat_mp_idCatMP_fk", columns={"idCatMPrima"}), @ORM\Index(name="mprimas_tasa_iva_idTasaIva_fk", columns={"codIva"})})
 * @ORM\Entity(repositoryClass="App\Repository\MprimasRepository")
 */
class Mprimas
{
    /**
     * @var int
     *
     * @ORM\Column(name="codMPrima", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codmprima = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="codMPrimaAnt", type="integer", nullable=true)
     */
    private $codmprimaant = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="nomMPrima", type="string", length=50, nullable=false)
     */
    private $nommprima = '';

    /**
     * @var float|null
     *
     * @ORM\Column(name="minStockMPrima", type="float", precision=4, scale=2, nullable=true)
     */
    private $minstockmprima;

    /**
     * @var float
     *
     * @ORM\Column(name="precioMPrima", type="float", precision=10, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $preciomprima = 0.00;

    /**
     * @var string|null
     *
     * @ORM\Column(name="aliasMPrima", type="string", length=17, nullable=true)
     */
    private $aliasmprima;

    /**
     * @var string|null
     *
     * @ORM\Column(name="aparienciaMPrima", type="string", length=20, nullable=true)
     */
    private $aparienciamprima;

    /**
     * @var string|null
     *
     * @ORM\Column(name="olorMPrima", type="string", length=30, nullable=true)
     */
    private $olormprima;

    /**
     * @var string|null
     *
     * @ORM\Column(name="colorMPrima", type="string", length=30, nullable=true)
     */
    private $colormprima;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pHmPrima", type="string", length=5, nullable=true)
     */
    private $phmprima;

    /**
     * @var string|null
     *
     * @ORM\Column(name="densidadMPrima", type="string", length=5, nullable=true)
     */
    private $densidadmprima;

    /**
     * @var \TasaIva
     *
     * @ORM\ManyToOne(targetEntity="TasaIva")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codIva", referencedColumnName="idTasaIva")
     * })
     */
    private $codiva;

    /**
     * @var \CatMp
     *
     * @ORM\ManyToOne(targetEntity="CatMp")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCatMPrima", referencedColumnName="idCatMP")
     * })
     */
    private $idcatmprima;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Formula", mappedBy="codmprima")
     */
    private $idformula = array();

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idformula = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getCodmprima(): ?int
    {
        return $this->codmprima;
    }

    public function getCodmprimaant(): ?int
    {
        return $this->codmprimaant;
    }

    public function setCodmprimaant(?int $codmprimaant): self
    {
        $this->codmprimaant = $codmprimaant;

        return $this;
    }

    public function getNommprima(): ?string
    {
        return $this->nommprima;
    }

    public function setNommprima(string $nommprima): self
    {
        $this->nommprima = $nommprima;

        return $this;
    }

    public function getMinstockmprima(): ?float
    {
        return $this->minstockmprima;
    }

    public function setMinstockmprima(?float $minstockmprima): self
    {
        $this->minstockmprima = $minstockmprima;

        return $this;
    }

    public function getPreciomprima(): ?float
    {
        return $this->preciomprima;
    }

    public function setPreciomprima(float $preciomprima): self
    {
        $this->preciomprima = $preciomprima;

        return $this;
    }

    public function getAliasmprima(): ?string
    {
        return $this->aliasmprima;
    }

    public function setAliasmprima(?string $aliasmprima): self
    {
        $this->aliasmprima = $aliasmprima;

        return $this;
    }

    public function getAparienciamprima(): ?string
    {
        return $this->aparienciamprima;
    }

    public function setAparienciamprima(?string $aparienciamprima): self
    {
        $this->aparienciamprima = $aparienciamprima;

        return $this;
    }

    public function getOlormprima(): ?string
    {
        return $this->olormprima;
    }

    public function setOlormprima(?string $olormprima): self
    {
        $this->olormprima = $olormprima;

        return $this;
    }

    public function getColormprima(): ?string
    {
        return $this->colormprima;
    }

    public function setColormprima(?string $colormprima): self
    {
        $this->colormprima = $colormprima;

        return $this;
    }

    public function getPhmprima(): ?string
    {
        return $this->phmprima;
    }

    public function setPhmprima(?string $phmprima): self
    {
        $this->phmprima = $phmprima;

        return $this;
    }

    public function getDensidadmprima(): ?string
    {
        return $this->densidadmprima;
    }

    public function setDensidadmprima(?string $densidadmprima): self
    {
        $this->densidadmprima = $densidadmprima;

        return $this;
    }

    public function getCodiva(): ?TasaIva
    {
        return $this->codiva;
    }

    public function setCodiva(?TasaIva $codiva): self
    {
        $this->codiva = $codiva;

        return $this;
    }

    public function getIdcatmprima(): ?CatMp
    {
        return $this->idcatmprima;
    }

    public function setIdcatmprima(?CatMp $idcatmprima): self
    {
        $this->idcatmprima = $idcatmprima;

        return $this;
    }

    /**
     * @return Collection<int, Formula>
     */
    public function getIdformula(): Collection
    {
        return $this->idformula;
    }

    public function addIdformula(Formula $idformula): self
    {
        if (!$this->idformula->contains($idformula)) {
            $this->idformula->add($idformula);
            $idformula->addCodmprima($this);
        }

        return $this;
    }

    public function removeIdformula(Formula $idformula): self
    {
        if ($this->idformula->removeElement($idformula)) {
            $idformula->removeCodmprima($this);
        }

        return $this;
    }

}
