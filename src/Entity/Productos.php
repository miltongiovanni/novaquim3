<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Productos
 *
 * @ORM\Table(name="productos", indexes={@ORM\Index(name="productos_cat_prod_idCatProd_fk", columns={"idCatProd"})})
 * @ORM\Entity(repositoryClass="App\Repository\ProductosRepository")
 */
class Productos
{
    /**
     * @var int
     *
     * @ORM\Column(name="codProducto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codproducto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="nomProducto", type="string", length=50, nullable=false)
     */
    private $nomproducto = '';

    /**
     * @var int
     *
     * @ORM\Column(name="prodActivo", type="integer", nullable=false, options={"default"="1"})
     */
    private $prodactivo = 1;

    /**
     * @var float|null
     *
     * @ORM\Column(name="densMin", type="float", precision=5, scale=4, nullable=true)
     */
    private $densmin;

    /**
     * @var float|null
     *
     * @ORM\Column(name="densMax", type="float", precision=5, scale=4, nullable=true)
     */
    private $densmax;

    /**
     * @var float|null
     *
     * @ORM\Column(name="pHmin", type="float", precision=4, scale=2, nullable=true)
     */
    private $phmin;

    /**
     * @var float|null
     *
     * @ORM\Column(name="pHmax", type="float", precision=4, scale=2, nullable=true)
     */
    private $phmax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fragancia", type="string", length=20, nullable=true)
     */
    private $fragancia;

    /**
     * @var string|null
     *
     * @ORM\Column(name="color", type="string", length=20, nullable=true)
     */
    private $color;

    /**
     * @var string|null
     *
     * @ORM\Column(name="apariencia", type="string", length=30, nullable=true)
     */
    private $apariencia;

    /**
     * @var int
     *
     * @ORM\Column(name="vencimiento", type="integer", nullable=false, options={"default"="365"})
     */
    private $vencimiento = 365;

    /**
     * @var \CatProd
     *
     * @ORM\ManyToOne(targetEntity="CatProd")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCatProd", referencedColumnName="idCatProd")
     * })
     */
    private $idcatprod;

    public function getCodproducto(): ?int
    {
        return $this->codproducto;
    }

    public function getNomproducto(): ?string
    {
        return $this->nomproducto;
    }

    public function setNomproducto(string $nomproducto): self
    {
        $this->nomproducto = $nomproducto;

        return $this;
    }

    public function getProdactivo(): ?int
    {
        return $this->prodactivo;
    }

    public function setProdactivo(int $prodactivo): self
    {
        $this->prodactivo = $prodactivo;

        return $this;
    }

    public function getDensmin(): ?float
    {
        return $this->densmin;
    }

    public function setDensmin(?float $densmin): self
    {
        $this->densmin = $densmin;

        return $this;
    }

    public function getDensmax(): ?float
    {
        return $this->densmax;
    }

    public function setDensmax(?float $densmax): self
    {
        $this->densmax = $densmax;

        return $this;
    }

    public function getPhmin(): ?float
    {
        return $this->phmin;
    }

    public function setPhmin(?float $phmin): self
    {
        $this->phmin = $phmin;

        return $this;
    }

    public function getPhmax(): ?float
    {
        return $this->phmax;
    }

    public function setPhmax(?float $phmax): self
    {
        $this->phmax = $phmax;

        return $this;
    }

    public function getFragancia(): ?string
    {
        return $this->fragancia;
    }

    public function setFragancia(?string $fragancia): self
    {
        $this->fragancia = $fragancia;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getApariencia(): ?string
    {
        return $this->apariencia;
    }

    public function setApariencia(?string $apariencia): self
    {
        $this->apariencia = $apariencia;

        return $this;
    }

    public function getVencimiento(): ?int
    {
        return $this->vencimiento;
    }

    public function setVencimiento(int $vencimiento): self
    {
        $this->vencimiento = $vencimiento;

        return $this;
    }

    public function getIdcatprod(): ?CatProd
    {
        return $this->idcatprod;
    }

    public function setIdcatprod(?CatProd $idcatprod): self
    {
        $this->idcatprod = $idcatprod;

        return $this;
    }


}
