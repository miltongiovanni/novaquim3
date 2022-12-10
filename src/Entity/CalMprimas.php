<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * CalMprimas
 *
 * @ORM\Table(name="cal_mprimas")
 * @ORM\Entity(repositoryClass="App\Repository\CalMprimasRepository")
 */
class CalMprimas
{
    /**
     * @var int
     *
     * @ORM\Column(name="Cod_mprima", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codMprima;

    /**
     * @var string
     *
     * @ORM\Column(name="Lote_mp", type="string", length=15, nullable=false, options={"default"="1"})
     */
    private $loteMp = '1';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fech_analisis", type="date", nullable=true)
     */
    private $fechAnalisis;

    /**
     * @var string|null
     *
     * @ORM\Column(name="apariencia_mp", type="string", length=20, nullable=true)
     */
    private $aparienciaMp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="olor_mp", type="string", length=30, nullable=true)
     */
    private $olorMp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="color_mp", type="string", length=30, nullable=true)
     */
    private $colorMp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pH_mp", type="string", length=5, nullable=true)
     */
    private $phMp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="densidad_mp", type="string", length=5, nullable=true)
     */
    private $densidadMp;

    /**
     * @var int
     *
     * @ORM\Column(name="est_mprima", type="integer", nullable=false)
     */
    private $estMprima = '0';

    public function getCodMprima(): ?int
    {
        return $this->codMprima;
    }

    public function getLoteMp(): ?string
    {
        return $this->loteMp;
    }

    public function setLoteMp(string $loteMp): self
    {
        $this->loteMp = $loteMp;

        return $this;
    }

    public function getFechAnalisis(): ?\DateTimeInterface
    {
        return $this->fechAnalisis;
    }

    public function setFechAnalisis(?\DateTimeInterface $fechAnalisis): self
    {
        $this->fechAnalisis = $fechAnalisis;

        return $this;
    }

    public function getAparienciaMp(): ?string
    {
        return $this->aparienciaMp;
    }

    public function setAparienciaMp(?string $aparienciaMp): self
    {
        $this->aparienciaMp = $aparienciaMp;

        return $this;
    }

    public function getOlorMp(): ?string
    {
        return $this->olorMp;
    }

    public function setOlorMp(?string $olorMp): self
    {
        $this->olorMp = $olorMp;

        return $this;
    }

    public function getColorMp(): ?string
    {
        return $this->colorMp;
    }

    public function setColorMp(?string $colorMp): self
    {
        $this->colorMp = $colorMp;

        return $this;
    }

    public function getPhMp(): ?string
    {
        return $this->phMp;
    }

    public function setPhMp(?string $phMp): self
    {
        $this->phMp = $phMp;

        return $this;
    }

    public function getDensidadMp(): ?string
    {
        return $this->densidadMp;
    }

    public function setDensidadMp(?string $densidadMp): self
    {
        $this->densidadMp = $densidadMp;

        return $this;
    }

    public function getEstMprima(): ?int
    {
        return $this->estMprima;
    }

    public function setEstMprima(int $estMprima): self
    {
        $this->estMprima = $estMprima;

        return $this;
    }


}
