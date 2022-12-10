<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipPrecio
 *
 * @ORM\Table(name="tip_precio")
 * @ORM\Entity(repositoryClass="App\Repository\TipPrecioRepository")
 */
class TipPrecio
{
    /**
     * @var int
     *
     * @ORM\Column(name="idPrecio", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idprecio;

    /**
     * @var string
     *
     * @ORM\Column(name="tipoPrecio", type="string", length=20, nullable=false)
     */
    private $tipoprecio = '';

    public function getIdprecio(): ?int
    {
        return $this->idprecio;
    }

    public function getTipoprecio(): ?string
    {
        return $this->tipoprecio;
    }

    public function setTipoprecio(string $tipoprecio): self
    {
        $this->tipoprecio = $tipoprecio;

        return $this;
    }


}
