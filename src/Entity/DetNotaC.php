<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetNotaC
 *
 * @ORM\Table(name="det_nota_c", indexes={@ORM\Index(name="IDX_BDB967B0546A1039", columns={"idNotaC"})})
 * @ORM\Entity(repositoryClass="App\Repository\DetNotaCRepository")
 */
class DetNotaC
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
     * @var float|null
     *
     * @ORM\Column(name="cantProducto", type="float", precision=8, scale=3, nullable=true)
     */
    private $cantproducto;

    /**
     * @var \NotaC
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="NotaC")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idNotaC", referencedColumnName="idNotaC")
     * })
     */
    private $idnotac;

    public function getCodproducto(): ?int
    {
        return $this->codproducto;
    }

    public function getCantproducto(): ?float
    {
        return $this->cantproducto;
    }

    public function setCantproducto(?float $cantproducto): self
    {
        $this->cantproducto = $cantproducto;

        return $this;
    }

    public function getIdnotac(): ?NotaC
    {
        return $this->idnotac;
    }

    public function setIdnotac(?NotaC $idnotac): self
    {
        $this->idnotac = $idnotac;

        return $this;
    }


}
