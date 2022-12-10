<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Servicios
 *
 * @ORM\Table(name="servicios", indexes={@ORM\Index(name="servicios_tasa_iva_idTasaIva_fk", columns={"codIva"})})
 * @ORM\Entity(repositoryClass="App\Repository\ServiciosRepository")
 */
class Servicios
{
    /**
     * @var int
     *
     * @ORM\Column(name="idServicio", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idservicio = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="desServicio", type="string", length=70, nullable=true)
     */
    private $desservicio;

    /**
     * @var int
     *
     * @ORM\Column(name="activo", type="integer", nullable=false)
     */
    private $activo = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="codSiigo", type="integer", nullable=true)
     */
    private $codsiigo = '0';

    /**
     * @var \TasaIva
     *
     * @ORM\ManyToOne(targetEntity="TasaIva")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codIva", referencedColumnName="idTasaIva")
     * })
     */
    private $codiva;

    public function getIdservicio(): ?int
    {
        return $this->idservicio;
    }

    public function getDesservicio(): ?string
    {
        return $this->desservicio;
    }

    public function setDesservicio(?string $desservicio): self
    {
        $this->desservicio = $desservicio;

        return $this;
    }

    public function getActivo(): ?int
    {
        return $this->activo;
    }

    public function setActivo(int $activo): self
    {
        $this->activo = $activo;

        return $this;
    }

    public function getCodsiigo(): ?int
    {
        return $this->codsiigo;
    }

    public function setCodsiigo(?int $codsiigo): self
    {
        $this->codsiigo = $codsiigo;

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
