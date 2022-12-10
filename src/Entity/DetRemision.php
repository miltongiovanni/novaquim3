<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetRemision
 *
 * @ORM\Table(name="det_remision", indexes={@ORM\Index(name="IDX_421B38DA57D1CDCF", columns={"idRemision"})})
 * @ORM\Entity(repositoryClass="App\Repository\DetRemisionRepository")
 */
class DetRemision
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
     * @ORM\Column(name="cantProducto", type="float", precision=6, scale=2, nullable=true)
     */
    private $cantproducto;

    /**
     * @var int
     *
     * @ORM\Column(name="loteProducto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $loteproducto = '0';

    /**
     * @var \Remision
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Remision")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idRemision", referencedColumnName="idRemision")
     * })
     */
    private $idremision;

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

    public function getLoteproducto(): ?int
    {
        return $this->loteproducto;
    }

    public function getIdremision(): ?Remision
    {
        return $this->idremision;
    }

    public function setIdremision(?Remision $idremision): self
    {
        $this->idremision = $idremision;

        return $this;
    }


}
