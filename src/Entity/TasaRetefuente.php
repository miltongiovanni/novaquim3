<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * TasaRetefuente
 *
 * @ORM\Table(name="tasa_retefuente")
 * @ORM\Entity(repositoryClass="App\Repository\TasaRetefuenteRepository")
 */
class TasaRetefuente
{
    /**
     * @var int
     *
     * @ORM\Column(name="idTasaRetefuente", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtasaretefuente;

    /**
     * @var string
     *
     * @ORM\Column(name="tasaRetefuente", type="decimal", precision=4, scale=3, nullable=false, options={"default"="0.025"})
     */
    private $tasaretefuente = '0.025';

    /**
     * @var string
     *
     * @ORM\Column(name="descRetefuente", type="string", length=50, nullable=false)
     */
    private $descretefuente = '0';

    public function getIdtasaretefuente(): ?int
    {
        return $this->idtasaretefuente;
    }

    public function getTasaretefuente(): ?string
    {
        return $this->tasaretefuente;
    }

    public function setTasaretefuente(string $tasaretefuente): self
    {
        $this->tasaretefuente = $tasaretefuente;

        return $this;
    }

    public function getDescretefuente(): ?string
    {
        return $this->descretefuente;
    }

    public function setDescretefuente(string $descretefuente): self
    {
        $this->descretefuente = $descretefuente;

        return $this;
    }


}
