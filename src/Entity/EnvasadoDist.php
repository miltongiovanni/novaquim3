<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * EnvasadoDist
 *
 * @ORM\Table(name="envasado_dist", indexes={@ORM\Index(name="det_env_dist_distribucion_idDistribucion_fk", columns={"codDist"})})
 * @ORM\Entity(repositoryClass="App\Repository\EnvasadoDistRepository")
 */
class EnvasadoDist
{
    /**
     * @var int
     *
     * @ORM\Column(name="idEnvDist", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idenvdist;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fechaEnvDist", type="date", nullable=true)
     */
    private $fechaenvdist;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cantidad", type="integer", nullable=true)
     */
    private $cantidad;

    /**
     * @var \Distribucion
     *
     * @ORM\ManyToOne(targetEntity="Distribucion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codDist", referencedColumnName="idDistribucion")
     * })
     */
    private $coddist;

    public function getIdenvdist(): ?int
    {
        return $this->idenvdist;
    }

    public function getFechaenvdist(): ?\DateTimeInterface
    {
        return $this->fechaenvdist;
    }

    public function setFechaenvdist(?\DateTimeInterface $fechaenvdist): self
    {
        $this->fechaenvdist = $fechaenvdist;

        return $this;
    }

    public function getCantidad(): ?int
    {
        return $this->cantidad;
    }

    public function setCantidad(?int $cantidad): self
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    public function getCoddist(): ?Distribucion
    {
        return $this->coddist;
    }

    public function setCoddist(?Distribucion $coddist): self
    {
        $this->coddist = $coddist;

        return $this;
    }


}
