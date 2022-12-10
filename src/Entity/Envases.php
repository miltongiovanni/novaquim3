<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Envases
 *
 * @ORM\Table(name="envases", indexes={@ORM\Index(name="envases_tasa_iva_idTasaIva_fk", columns={"codIva"})})
 * @ORM\Entity(repositoryClass="App\Repository\EnvasesRepository")
 */
class Envases
{
    /**
     * @var int
     *
     * @ORM\Column(name="codEnvase", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codenvase = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="nomEnvase", type="string", length=50, nullable=true)
     */
    private $nomenvase;

    /**
     * @var int|null
     *
     * @ORM\Column(name="stockEnvase", type="integer", nullable=true)
     */
    private $stockenvase;

    /**
     * @var float
     *
     * @ORM\Column(name="precEnvase", type="float", precision=10, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $precenvase = 0.00;

    /**
     * @var \TasaIva
     *
     * @ORM\ManyToOne(targetEntity="TasaIva")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codIva", referencedColumnName="idTasaIva")
     * })
     */
    private $codiva;

    public function getCodenvase(): ?int
    {
        return $this->codenvase;
    }

    public function getNomenvase(): ?string
    {
        return $this->nomenvase;
    }

    public function setNomenvase(?string $nomenvase): self
    {
        $this->nomenvase = $nomenvase;

        return $this;
    }

    public function getStockenvase(): ?int
    {
        return $this->stockenvase;
    }

    public function setStockenvase(?int $stockenvase): self
    {
        $this->stockenvase = $stockenvase;

        return $this;
    }

    public function getPrecenvase(): ?float
    {
        return $this->precenvase;
    }

    public function setPrecenvase(float $precenvase): self
    {
        $this->precenvase = $precenvase;

        return $this;
    }

    public function getCodiva(): ?TasaIva
    {
        return $this->codiva;
    }

    public function setCodiva(?TasaIva $codiva): self
    {
        $this->codiva = $codiva;

        return $this;
    }


}
