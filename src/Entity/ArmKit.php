<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * ArmKit
 *
 * @ORM\Table(name="arm_kit")
 * @ORM\Entity(repositoryClass="App\Repository\ArmKitRepository")
 */
class ArmKit
{
    /**
     * @var int
     *
     * @ORM\Column(name="idArmado", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idarmado;

    /**
     * @var int
     *
     * @ORM\Column(name="codKit", type="integer", nullable=false)
     */
    private $codkit = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cantArmado", type="integer", nullable=false)
     */
    private $cantarmado = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechArmado", type="date", nullable=false)
     */
    private $fecharmado;

    public function getIdarmado(): ?int
    {
        return $this->idarmado;
    }

    public function getCodkit(): ?int
    {
        return $this->codkit;
    }

    public function setCodkit(int $codkit): self
    {
        $this->codkit = $codkit;

        return $this;
    }

    public function getCantarmado(): ?int
    {
        return $this->cantarmado;
    }

    public function setCantarmado(int $cantarmado): self
    {
        $this->cantarmado = $cantarmado;

        return $this;
    }

    public function getFecharmado(): ?\DateTimeInterface
    {
        return $this->fecharmado;
    }

    public function setFecharmado(\DateTimeInterface $fecharmado): self
    {
        $this->fecharmado = $fecharmado;

        return $this;
    }


}
