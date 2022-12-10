<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TasaIva
 *
 * @ORM\Table(name="tasa_iva")
 * @ORM\Entity(repositoryClass="App\Repository\TasaIvaRepository")
 */
class TasaIva
{
    /**
     * @var int
     *
     * @ORM\Column(name="idTasaIva", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtasaiva;

    /**
     * @var float
     *
     * @ORM\Column(name="tasaIva", type="float", precision=4, scale=3, nullable=false, options={"default"="0.000"})
     */
    private $tasaiva = 0.000;

    public function getIdtasaiva(): ?int
    {
        return $this->idtasaiva;
    }

    public function getTasaiva(): ?float
    {
        return $this->tasaiva;
    }

    public function setTasaiva(float $tasaiva): self
    {
        $this->tasaiva = $tasaiva;

        return $this;
    }


}
