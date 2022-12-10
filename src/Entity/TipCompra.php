<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipCompra
 *
 * @ORM\Table(name="tip_compra")
 * @ORM\Entity(repositoryClass="App\Repository\TipCompraRepository")
 */
class TipCompra
{
    /**
     * @var int
     *
     * @ORM\Column(name="idTipo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtipo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="tipoComp", type="string", length=20, nullable=false)
     */
    private $tipocomp = '';

    public function getIdtipo(): ?int
    {
        return $this->idtipo;
    }

    public function getTipocomp(): ?string
    {
        return $this->tipocomp;
    }

    public function setTipocomp(string $tipocomp): self
    {
        $this->tipocomp = $tipocomp;

        return $this;
    }


}
