<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EstadosPedidos
 *
 * @ORM\Table(name="estados_pedidos")
 * @ORM\Entity(repositoryClass="App\Repository\EstadosPedidosRepository")
 */
class EstadosPedidos
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
