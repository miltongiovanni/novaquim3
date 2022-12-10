<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * CalProdTerminado
 *
 * @ORM\Table(name="cal_prod_terminado")
 * @ORM\Entity(repositoryClass="App\Repository\CalProdTerminadoRepository")
 */
class CalProdTerminado
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
    private $lote;

    /**
     * @var int|null
     *
     * @ORM\Column(name="etiquetado", type="integer", nullable=true)
     */
    private $etiquetado = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="envasado", type="integer", nullable=true)
     */
    private $envasado = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="observaciones", type="text", length=65535, nullable=true)
     */
    private $observaciones;

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

    public function getEtiquetado(): ?int
    {
        return $this->etiquetado;
    }

    public function setEtiquetado(?int $etiquetado): self
    {
        $this->etiquetado = $etiquetado;

        return $this;
    }

    public function getEnvasado(): ?int
    {
        return $this->envasado;
    }

    public function setEnvasado(?int $envasado): self
    {
        $this->envasado = $envasado;

        return $this;
    }

    public function getObservaciones(): ?string
    {
        return $this->observaciones;
    }

    public function setObservaciones(?string $observaciones): self
    {
        $this->observaciones = $observaciones;

        return $this;
    }


}
