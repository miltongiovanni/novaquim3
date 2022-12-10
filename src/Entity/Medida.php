<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medida
 *
 * @ORM\Table(name="medida")
 * @ORM\Entity(repositoryClass="App\Repository\MedidaRepository")
 */
class Medida
{
    /**
     * @var int
     *
     * @ORM\Column(name="idMedida", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmedida = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="desMedida", type="string", length=20, nullable=false)
     */
    private $desmedida = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="cantMedida", type="integer", nullable=true)
     */
    private $cantmedida;

    public function getIdmedida(): ?int
    {
        return $this->idmedida;
    }

    public function getDesmedida(): ?string
    {
        return $this->desmedida;
    }

    public function setDesmedida(string $desmedida): self
    {
        $this->desmedida = $desmedida;

        return $this;
    }

    public function getCantmedida(): ?int
    {
        return $this->cantmedida;
    }

    public function setCantmedida(?int $cantmedida): self
    {
        $this->cantmedida = $cantmedida;

        return $this;
    }


}
