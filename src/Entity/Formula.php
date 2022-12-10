<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Formula
 *
 * @ORM\Table(name="formula", indexes={@ORM\Index(name="formula_productos_codProducto_fk", columns={"codProducto"})})
 * @ORM\Entity(repositoryClass="App\Repository\FormulaRepository")
 */
class Formula
{
    /**
     * @var int
     *
     * @ORM\Column(name="idFormula", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idformula;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nomFormula", type="string", length=50, nullable=true)
     */
    private $nomformula;

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
     * @ORM\ManyToMany(targetEntity="Mprimas", inversedBy="idformula")
     * @ORM\JoinTable(name="det_formula",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idFormula", referencedColumnName="idFormula")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="codMPrima", referencedColumnName="codMPrima")
     *   }
     * )
     */
    private $codmprima = array();

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->codmprima = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdformula(): ?int
    {
        return $this->idformula;
    }

    public function getNomformula(): ?string
    {
        return $this->nomformula;
    }

    public function setNomformula(?string $nomformula): self
    {
        $this->nomformula = $nomformula;

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
     * @return Collection<int, Mprimas>
     */
    public function getCodmprima(): Collection
    {
        return $this->codmprima;
    }

    public function addCodmprima(Mprimas $codmprima): self
    {
        if (!$this->codmprima->contains($codmprima)) {
            $this->codmprima->add($codmprima);
        }

        return $this;
    }

    public function removeCodmprima(Mprimas $codmprima): self
    {
        $this->codmprima->removeElement($codmprima);

        return $this;
    }

}
