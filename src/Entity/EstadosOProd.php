<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EstadosOProd
 *
 * @ORM\Table(name="estados_o_prod")
 * @ORM\Entity(repositoryClass="App\Repository\EstadosOProdRepository")
 */
class EstadosOProd
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
     * @var string|null
     *
     * @ORM\Column(name="descEstado", type="string", length=20, nullable=true)
     */
    private $descestado;

    public function getIdestado(): ?int
    {
        return $this->idestado;
    }

    public function getDescestado(): ?string
    {
        return $this->descestado;
    }

    public function setDescestado(?string $descestado): self
    {
        $this->descestado = $descestado;

        return $this;
    }


}
