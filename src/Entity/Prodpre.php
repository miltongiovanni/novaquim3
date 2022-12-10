<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Prodpre
 *
 * @ORM\Table(name="prodpre", indexes={@ORM\Index(name="prodpre_precios_codigoGen_fk", columns={"codigoGen"}), @ORM\Index(name="prodpre_envases_codEnvase_fk", columns={"codEnvase"}), @ORM\Index(name="prodpre_productos_codProducto_fk", columns={"codProducto"}), @ORM\Index(name="prodpre_etiquetas_codEtiqueta_fk", columns={"codEtiq"}), @ORM\Index(name="prodpre_tapas_val_codTapa_fk", columns={"codTapa"}), @ORM\Index(name="prodpre_tasa_iva_idTasaIva_fk", columns={"codIva"}), @ORM\Index(name="prodpre_medida_idMedida_fk", columns={"codMedida"})})
 * @ORM\Entity(repositoryClass="App\Repository\ProdpreRepository")
 */
class Prodpre
{
    /**
     * @var int
     *
     * @ORM\Column(name="codPresentacion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codpresentacion = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="presentacion", type="string", length=70, nullable=true)
     */
    private $presentacion;

    /**
     * @var int|null
     *
     * @ORM\Column(name="stockPresentacion", type="integer", nullable=true)
     */
    private $stockpresentacion;

    /**
     * @var int
     *
     * @ORM\Column(name="cotiza", type="integer", nullable=false)
     */
    private $cotiza = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="presentacionActiva", type="integer", nullable=false, options={"default"="1"})
     */
    private $presentacionactiva = 1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="codSiigo", type="integer", nullable=true)
     */
    private $codsiigo;

    /**
     * @var \Medida
     *
     * @ORM\ManyToOne(targetEntity="Medida")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codMedida", referencedColumnName="idMedida")
     * })
     */
    private $codmedida;

    /**
     * @var \TapasVal
     *
     * @ORM\ManyToOne(targetEntity="TapasVal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codTapa", referencedColumnName="codTapa")
     * })
     */
    private $codtapa;

    /**
     * @var \Envases
     *
     * @ORM\ManyToOne(targetEntity="Envases")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codEnvase", referencedColumnName="codEnvase")
     * })
     */
    private $codenvase;

    /**
     * @var \Precios
     *
     * @ORM\ManyToOne(targetEntity="Precios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codigoGen", referencedColumnName="codigoGen")
     * })
     */
    private $codigogen;

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
     * @var \Etiquetas
     *
     * @ORM\ManyToOne(targetEntity="Etiquetas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codEtiq", referencedColumnName="codEtiqueta")
     * })
     */
    private $codetiq;

    /**
     * @var \Productos
     *
     * @ORM\ManyToOne(targetEntity="Productos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codProducto", referencedColumnName="codProducto")
     * })
     */
    private $codproducto;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Cambios", mappedBy="codpresentacionnvo")
     */
    private $idcambio = array();

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="OrdProd", mappedBy="codpresentacion")
     */
    private $lote = array();

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idcambio = new \Doctrine\Common\Collections\ArrayCollection();
        $this->lote = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getCodpresentacion(): ?int
    {
        return $this->codpresentacion;
    }

    public function getPresentacion(): ?string
    {
        return $this->presentacion;
    }

    public function setPresentacion(?string $presentacion): self
    {
        $this->presentacion = $presentacion;

        return $this;
    }

    public function getStockpresentacion(): ?int
    {
        return $this->stockpresentacion;
    }

    public function setStockpresentacion(?int $stockpresentacion): self
    {
        $this->stockpresentacion = $stockpresentacion;

        return $this;
    }

    public function getCotiza(): ?int
    {
        return $this->cotiza;
    }

    public function setCotiza(int $cotiza): self
    {
        $this->cotiza = $cotiza;

        return $this;
    }

    public function getPresentacionactiva(): ?int
    {
        return $this->presentacionactiva;
    }

    public function setPresentacionactiva(int $presentacionactiva): self
    {
        $this->presentacionactiva = $presentacionactiva;

        return $this;
    }

    public function getCodsiigo(): ?int
    {
        return $this->codsiigo;
    }

    public function setCodsiigo(?int $codsiigo): self
    {
        $this->codsiigo = $codsiigo;

        return $this;
    }

    public function getCodmedida(): ?Medida
    {
        return $this->codmedida;
    }

    public function setCodmedida(?Medida $codmedida): self
    {
        $this->codmedida = $codmedida;

        return $this;
    }

    public function getCodtapa(): ?TapasVal
    {
        return $this->codtapa;
    }

    public function setCodtapa(?TapasVal $codtapa): self
    {
        $this->codtapa = $codtapa;

        return $this;
    }

    public function getCodenvase(): ?Envases
    {
        return $this->codenvase;
    }

    public function setCodenvase(?Envases $codenvase): self
    {
        $this->codenvase = $codenvase;

        return $this;
    }

    public function getCodigogen(): ?Precios
    {
        return $this->codigogen;
    }

    public function setCodigogen(?Precios $codigogen): self
    {
        $this->codigogen = $codigogen;

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

    public function getCodetiq(): ?Etiquetas
    {
        return $this->codetiq;
    }

    public function setCodetiq(?Etiquetas $codetiq): self
    {
        $this->codetiq = $codetiq;

        return $this;
    }

    public function getCodproducto(): ?Productos
    {
        return $this->codproducto;
    }

    public function setCodproducto(?Productos $codproducto): self
    {
        $this->codproducto = $codproducto;

        return $this;
    }

    /**
     * @return Collection<int, Cambios>
     */
    public function getIdcambio(): Collection
    {
        return $this->idcambio;
    }

    public function addIdcambio(Cambios $idcambio): self
    {
        if (!$this->idcambio->contains($idcambio)) {
            $this->idcambio->add($idcambio);
            $idcambio->addCodpresentacionnvo($this);
        }

        return $this;
    }

    public function removeIdcambio(Cambios $idcambio): self
    {
        if ($this->idcambio->removeElement($idcambio)) {
            $idcambio->removeCodpresentacionnvo($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, OrdProd>
     */
    public function getLote(): Collection
    {
        return $this->lote;
    }

    public function addLote(OrdProd $lote): self
    {
        if (!$this->lote->contains($lote)) {
            $this->lote->add($lote);
            $lote->addCodpresentacion($this);
        }

        return $this;
    }

    public function removeLote(OrdProd $lote): self
    {
        if ($this->lote->removeElement($lote)) {
            $lote->removeCodpresentacion($this);
        }

        return $this;
    }

}
