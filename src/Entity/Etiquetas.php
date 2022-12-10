<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etiquetas
 *
 * @ORM\Table(name="etiquetas", indexes={@ORM\Index(name="etiquetas_tasa_iva_idTasaIva_fk", columns={"codIva"})})
 * @ORM\Entity(repositoryClass="App\Repository\EtiquetasRepository")
 */
class Etiquetas
{
    /**
     * @var int
     *
     * @ORM\Column(name="codEtiqueta", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codetiqueta = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="nomEtiqueta", type="string", length=50, nullable=false)
     */
    private $nometiqueta = '';

    /**
     * @var int|null
     *
     * @ORM\Column(name="stockEtiqueta", type="integer", nullable=true)
     */
    private $stocketiqueta;

    /**
     * @var float
     *
     * @ORM\Column(name="precEtiqueta", type="float", precision=5, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $precetiqueta = 0.00;

    /**
     * @var \TasaIva
     *
     * @ORM\ManyToOne(targetEntity="TasaIva")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codIva", referencedColumnName="idTasaIva")
     * })
     */
    private $codiva;

    public function getCodetiqueta(): ?int
    {
        return $this->codetiqueta;
    }

    public function getNometiqueta(): ?string
    {
        return $this->nometiqueta;
    }

    public function setNometiqueta(string $nometiqueta): self
    {
        $this->nometiqueta = $nometiqueta;

        return $this;
    }

    public function getStocketiqueta(): ?int
    {
        return $this->stocketiqueta;
    }

    public function setStocketiqueta(?int $stocketiqueta): self
    {
        $this->stocketiqueta = $stocketiqueta;

        return $this;
    }

    public function getPrecetiqueta(): ?float
    {
        return $this->precetiqueta;
    }

    public function setPrecetiqueta(float $precetiqueta): self
    {
        $this->precetiqueta = $precetiqueta;

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
