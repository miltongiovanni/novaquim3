<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Localidad
 *
 * @ORM\Table(name="localidad")
 * @ORM\Entity(repositoryClass="App\Repository\LocalidadRepository")
 */
class Localidad
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_localidad", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLocalidad = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Id_city", type="integer", nullable=true, options={"default"="1"})
     */
    private $idCity = 1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="localidad", type="string", length=20, nullable=true)
     */
    private $localidad;

    public function getIdLocalidad(): ?int
    {
        return $this->idLocalidad;
    }

    public function getIdCity(): ?int
    {
        return $this->idCity;
    }

    public function setIdCity(?int $idCity): self
    {
        $this->idCity = $idCity;

        return $this;
    }

    public function getLocalidad(): ?string
    {
        return $this->localidad;
    }

    public function setLocalidad(?string $localidad): self
    {
        $this->localidad = $localidad;

        return $this;
    }


}
