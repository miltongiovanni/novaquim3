<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RelDistEmp
 *
 * @ORM\Table(name="rel_dist_emp", indexes={@ORM\Index(name="rel_dist_emp_distribucion_idDistribucion_fk_2", columns={"codUnidad"}), @ORM\Index(name="rel_dist_emp_distribucion_idDistribucion_fk", columns={"codPaca"})})
 * @ORM\Entity(repositoryClass="App\Repository\RelDistEmpRepository")
 */
class RelDistEmp
{
    /**
     * @var int
     *
     * @ORM\Column(name="idPacUn", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpacun;

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
     *   @ORM\JoinColumn(name="codPaca", referencedColumnName="idDistribucion")
     * })
     */
    private $codpaca;

    /**
     * @var \Distribucion
     *
     * @ORM\ManyToOne(targetEntity="Distribucion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codUnidad", referencedColumnName="idDistribucion")
     * })
     */
    private $codunidad;

    public function getIdpacun(): ?int
    {
        return $this->idpacun;
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

    public function getCodpaca(): ?Distribucion
    {
        return $this->codpaca;
    }

    public function setCodpaca(?Distribucion $codpaca): self
    {
        $this->codpaca = $codpaca;

        return $this;
    }

    public function getCodunidad(): ?Distribucion
    {
        return $this->codunidad;
    }

    public function setCodunidad(?Distribucion $codunidad): self
    {
        $this->codunidad = $codunidad;

        return $this;
    }


}
