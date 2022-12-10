<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Remision1
 *
 * @ORM\Table(name="remision1")
 * @ORM\Entity(repositoryClass="App\Repository\Remision1Repository")
 */
class Remision1
{
    /**
     * @var int
     *
     * @ORM\Column(name="idRemision", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idremision;

    /**
     * @var string
     *
     * @ORM\Column(name="cliente", type="string", length=40, nullable=false)
     */
    private $cliente = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaRemision", type="date", nullable=false)
     */
    private $fecharemision;

    /**
     * @var float
     *
     * @ORM\Column(name="valor", type="float", precision=12, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $valor = 0.00;

    public function getIdremision(): ?int
    {
        return $this->idremision;
    }

    public function getCliente(): ?string
    {
        return $this->cliente;
    }

    public function setCliente(string $cliente): self
    {
        $this->cliente = $cliente;

        return $this;
    }

    public function getFecharemision(): ?\DateTimeInterface
    {
        return $this->fecharemision;
    }

    public function setFecharemision(\DateTimeInterface $fecharemision): self
    {
        $this->fecharemision = $fecharemision;

        return $this;
    }

    public function getValor(): ?float
    {
        return $this->valor;
    }

    public function setValor(float $valor): self
    {
        $this->valor = $valor;

        return $this;
    }


}
