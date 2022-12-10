<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ciudades
 *
 * @ORM\Table(name="ciudades")
 * @ORM\Entity(repositoryClass="App\Repository\CiudadesRepository")
 */
class Ciudades
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCiudad", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idciudad;

    /**
     * @var string
     *
     * @ORM\Column(name="ciudad", type="string", length=20, nullable=false)
     */
    private $ciudad;

    public function getIdciudad(): ?int
    {
        return $this->idciudad;
    }

    public function getCiudad(): ?string
    {
        return $this->ciudad;
    }

    public function setCiudad(string $ciudad): self
    {
        $this->ciudad = $ciudad;

        return $this;
    }


}
