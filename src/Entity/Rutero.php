<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Rutero
 *
 * @ORM\Table(name="rutero")
 * @ORM\Entity(repositoryClass="App\Repository\RuteroRepository")
 */
class Rutero
{
    /**
     * @var int
     *
     * @ORM\Column(name="idRutero", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrutero;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fechaRutero", type="date", nullable=true)
     */
    private $fecharutero;

    /**
     * @var string|null
     *
     * @ORM\Column(name="listaPedidos", type="string", length=255, nullable=true)
     */
    private $listapedidos;

    public function getIdrutero(): ?int
    {
        return $this->idrutero;
    }

    public function getFecharutero(): ?\DateTimeInterface
    {
        return $this->fecharutero;
    }

    public function setFecharutero(?\DateTimeInterface $fecharutero): self
    {
        $this->fecharutero = $fecharutero;

        return $this;
    }

    public function getListapedidos(): ?string
    {
        return $this->listapedidos;
    }

    public function setListapedidos(?string $listapedidos): self
    {
        $this->listapedidos = $listapedidos;

        return $this;
    }


}
