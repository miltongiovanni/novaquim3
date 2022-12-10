<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InvEtiquetas
 *
 * @ORM\Table(name="inv_etiquetas")
 * @ORM\Entity(repositoryClass="App\Repository\InvEtiquetasRepository")
 */
class InvEtiquetas
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="invEtiq", type="integer", nullable=true)
     */
    private $invetiq;

    /**
     * @var \Etiquetas
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Etiquetas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codEtiq", referencedColumnName="codEtiqueta")
     * })
     */
    private $codetiq;

    public function getInvetiq(): ?int
    {
        return $this->invetiq;
    }

    public function setInvetiq(?int $invetiq): self
    {
        $this->invetiq = $invetiq;

        return $this;
    }

    public function getCodetiq(): ?Etiquetas
    {
        return $this->codetiq;
    }

    public function setCodetiq(?Etiquetas $codetiq): self
    {
        $this->codetiq = $codetiq;

        return $this;
    }


}
