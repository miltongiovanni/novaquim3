<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EstadosPers
 *
 * @ORM\Table(name="estados_pers")
 * @ORM\Entity(repositoryClass="App\Repository\EstadosPersRepository")
 */
class EstadosPers
{
    /**
     * @var int
     *
     * @ORM\Column(name="idEstado", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idestado;

    /**
     * @var string
     *
     * @ORM\Column(name="estadoPersona", type="string", length=15, nullable=false)
     */
    private $estadopersona;

    public function getIdestado(): ?int
    {
        return $this->idestado;
    }

    public function getEstadopersona(): ?string
    {
        return $this->estadopersona;
    }

    public function setEstadopersona(string $estadopersona): self
    {
        $this->estadopersona = $estadopersona;

        return $this;
    }


}
