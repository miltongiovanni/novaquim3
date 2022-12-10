<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * TasaReteica
 *
 * @ORM\Table(name="tasa_reteica")
 * @ORM\Entity(repositoryClass="App\Repository\TasaReteicaRepository")
 */
class TasaReteica
{
    /**
     * @var int
     *
     * @ORM\Column(name="idTasaRetIca", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtasaretica = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="tasaRetIca", type="decimal", precision=4, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $tasaretica = '0.00';

    public function getIdtasaretica(): ?int
    {
        return $this->idtasaretica;
    }

    public function getTasaretica(): ?string
    {
        return $this->tasaretica;
    }

    public function setTasaretica(string $tasaretica): self
    {
        $this->tasaretica = $tasaretica;

        return $this;
    }


}
