<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * CalProducto
 *
 * @ORM\Table(name="cal_producto")
 * @ORM\Entity(repositoryClass="App\Repository\CalProductoRepository")
 */
class CalProducto
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
     * @ORM\Column(name="lote", type="integer", nullable=false)
     */
    private $lote = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="densidadProd", type="float", precision=5, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $densidadprod = 0.0000;

    /**
     * @var float
     *
     * @ORM\Column(name="pHProd", type="float", precision=4, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $phprod = 0.00;

    /**
     * @var int
     *
     * @ORM\Column(name="olorProd", type="integer", nullable=false)
     */
    private $olorprod = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="colorProd", type="integer", nullable=false)
     */
    private $colorprod = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="aparienciaProd", type="integer", nullable=false)
     */
    private $aparienciaprod = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="observacionesProd", type="text", length=65535, nullable=true)
     */
    private $observacionesprod;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLote(): ?int
    {
        return $this->lote;
    }

    public function setLote(int $lote): self
    {
        $this->lote = $lote;

        return $this;
    }

    public function getDensidadprod(): ?float
    {
        return $this->densidadprod;
    }

    public function setDensidadprod(float $densidadprod): self
    {
        $this->densidadprod = $densidadprod;

        return $this;
    }

    public function getPhprod(): ?float
    {
        return $this->phprod;
    }

    public function setPhprod(float $phprod): self
    {
        $this->phprod = $phprod;

        return $this;
    }

    public function getOlorprod(): ?int
    {
        return $this->olorprod;
    }

    public function setOlorprod(int $olorprod): self
    {
        $this->olorprod = $olorprod;

        return $this;
    }

    public function getColorprod(): ?int
    {
        return $this->colorprod;
    }

    public function setColorprod(int $colorprod): self
    {
        $this->colorprod = $colorprod;

        return $this;
    }

    public function getAparienciaprod(): ?int
    {
        return $this->aparienciaprod;
    }

    public function setAparienciaprod(int $aparienciaprod): self
    {
        $this->aparienciaprod = $aparienciaprod;

        return $this;
    }

    public function getObservacionesprod(): ?string
    {
        return $this->observacionesprod;
    }

    public function setObservacionesprod(?string $observacionesprod): self
    {
        $this->observacionesprod = $observacionesprod;

        return $this;
    }


}
