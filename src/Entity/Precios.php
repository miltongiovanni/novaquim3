<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Precios
 *
 * @ORM\Table(name="precios")
 * @ORM\Entity(repositoryClass="App\Repository\PreciosRepository")
 */
class Precios
{
    /**
     * @var int
     *
     * @ORM\Column(name="codigoGen", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codigogen = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="producto", type="string", length=255, nullable=true)
     */
    private $producto;

    /**
     * @var float|null
     *
     * @ORM\Column(name="fabrica", type="float", precision=10, scale=0, nullable=true)
     */
    private $fabrica;

    /**
     * @var float|null
     *
     * @ORM\Column(name="distribuidor", type="float", precision=10, scale=0, nullable=true)
     */
    private $distribuidor;

    /**
     * @var float|null
     *
     * @ORM\Column(name="detal", type="float", precision=10, scale=0, nullable=true)
     */
    private $detal;

    /**
     * @var float|null
     *
     * @ORM\Column(name="mayor", type="float", precision=10, scale=0, nullable=true)
     */
    private $mayor;

    /**
     * @var float|null
     *
     * @ORM\Column(name="super", type="float", precision=10, scale=0, nullable=true)
     */
    private $super;

    /**
     * @var int|null
     *
     * @ORM\Column(name="presActiva", type="integer", nullable=true, options={"default"="1"})
     */
    private $presactiva = 1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="presLista", type="integer", nullable=true)
     */
    private $preslista = '0';

    public function getCodigogen(): ?int
    {
        return $this->codigogen;
    }

    public function getProducto(): ?string
    {
        return $this->producto;
    }

    public function setProducto(?string $producto): self
    {
        $this->producto = $producto;

        return $this;
    }

    public function getFabrica(): ?float
    {
        return $this->fabrica;
    }

    public function setFabrica(?float $fabrica): self
    {
        $this->fabrica = $fabrica;

        return $this;
    }

    public function getDistribuidor(): ?float
    {
        return $this->distribuidor;
    }

    public function setDistribuidor(?float $distribuidor): self
    {
        $this->distribuidor = $distribuidor;

        return $this;
    }

    public function getDetal(): ?float
    {
        return $this->detal;
    }

    public function setDetal(?float $detal): self
    {
        $this->detal = $detal;

        return $this;
    }

    public function getMayor(): ?float
    {
        return $this->mayor;
    }

    public function setMayor(?float $mayor): self
    {
        $this->mayor = $mayor;

        return $this;
    }

    public function getSuper(): ?float
    {
        return $this->super;
    }

    public function setSuper(?float $super): self
    {
        $this->super = $super;

        return $this;
    }

    public function getPresactiva(): ?int
    {
        return $this->presactiva;
    }

    public function setPresactiva(?int $presactiva): self
    {
        $this->presactiva = $presactiva;

        return $this;
    }

    public function getPreslista(): ?int
    {
        return $this->preslista;
    }

    public function setPreslista(?int $preslista): self
    {
        $this->preslista = $preslista;

        return $this;
    }


}
