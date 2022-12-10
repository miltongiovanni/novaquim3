<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CargosPersonal
 *
 * @ORM\Table(name="cargos_personal")
 * @ORM\Entity(repositoryClass="App\Repository\CargosPersonalRepository")
 */
class CargosPersonal
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCargo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcargo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cargo", type="string", length=30, nullable=true)
     */
    private $cargo;

    public function getIdcargo(): ?int
    {
        return $this->idcargo;
    }

    public function getCargo(): ?string
    {
        return $this->cargo;
    }

    public function setCargo(?string $cargo): self
    {
        $this->cargo = $cargo;

        return $this;
    }


}
