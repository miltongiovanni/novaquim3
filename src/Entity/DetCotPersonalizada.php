<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetCotPersonalizada
 *
 * @ORM\Table(name="det_cot_personalizada", indexes={@ORM\Index(name="IDX_EA2E464B6E6B11EB", columns={"idCotPersonalizada"})})
 * @ORM\Entity(repositoryClass="App\Repository\DetCotPersonalizadaRepository")
 */
class DetCotPersonalizada
{
    /**
     * @var int
     *
     * @ORM\Column(name="codProducto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codproducto = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="canProducto", type="integer", nullable=true)
     */
    private $canproducto;

    /**
     * @var int
     *
     * @ORM\Column(name="precioProducto", type="integer", nullable=false)
     */
    private $precioproducto = '0';

    /**
     * @var \CotPersonalizada
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="CotPersonalizada")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCotPersonalizada", referencedColumnName="idCotPersonalizada")
     * })
     */
    private $idcotpersonalizada;

    public function getCodproducto(): ?int
    {
        return $this->codproducto;
    }

    public function getCanproducto(): ?int
    {
        return $this->canproducto;
    }

    public function setCanproducto(?int $canproducto): self
    {
        $this->canproducto = $canproducto;

        return $this;
    }

    public function getPrecioproducto(): ?int
    {
        return $this->precioproducto;
    }

    public function setPrecioproducto(int $precioproducto): self
    {
        $this->precioproducto = $precioproducto;

        return $this;
    }

    public function getIdcotpersonalizada(): ?CotPersonalizada
    {
        return $this->idcotpersonalizada;
    }

    public function setIdcotpersonalizada(?CotPersonalizada $idcotpersonalizada): self
    {
        $this->idcotpersonalizada = $idcotpersonalizada;

        return $this;
    }


}
