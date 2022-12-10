<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetRemision1
 *
 * @ORM\Table(name="det_remision1", indexes={@ORM\Index(name="det_remision1_remision1_idRemision_fk", columns={"idRemision"})})
 * @ORM\Entity(repositoryClass="App\Repository\DetRemision1Repository")
 */
class DetRemision1
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="codProducto", type="integer", nullable=false)
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
     */
    private $loteproducto = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="precioProducto", type="integer", nullable=true)
     */
    private $precioproducto = '0';

    /**
     * @var \Remision1
     *
     * @ORM\ManyToOne(targetEntity="Remision1")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idRemision", referencedColumnName="idRemision")
     * })
     */
    private $idremision;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodproducto(): ?int
    {
        return $this->codproducto;
    }

    public function setCodproducto(int $codproducto): self
    {
        $this->codproducto = $codproducto;

        return $this;
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

    public function setLoteproducto(int $loteproducto): self
    {
        $this->loteproducto = $loteproducto;

        return $this;
    }

    public function getPrecioproducto(): ?int
    {
        return $this->precioproducto;
    }

    public function setPrecioproducto(?int $precioproducto): self
    {
        $this->precioproducto = $precioproducto;

        return $this;
    }

    public function getIdremision(): ?Remision1
    {
        return $this->idremision;
    }

    public function setIdremision(?Remision1 $idremision): self
    {
        $this->idremision = $idremision;

        return $this;
    }


}
