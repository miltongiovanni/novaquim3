<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kit
 *
 * @ORM\Table(name="kit", indexes={@ORM\Index(name="kit_envases_codEnvase_fk", columns={"codEnvase"})})
 * @ORM\Entity(repositoryClass="App\Repository\KitRepository")
 */
class Kit
{
    /**
     * @var int
     *
     * @ORM\Column(name="idKit", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idkit;

    /**
     * @var int
     *
     * @ORM\Column(name="codigo", type="integer", nullable=false)
     */
    private $codigo = '0';

    /**
     * @var \Envases
     *
     * @ORM\ManyToOne(targetEntity="Envases")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codEnvase", referencedColumnName="codEnvase")
     * })
     */
    private $codenvase;

    public function getIdkit(): ?int
    {
        return $this->idkit;
    }

    public function getCodigo(): ?int
    {
        return $this->codigo;
    }

    public function setCodigo(int $codigo): self
    {
        $this->codigo = $codigo;

        return $this;
    }

    public function getCodenvase(): ?Envases
    {
        return $this->codenvase;
    }

    public function setCodenvase(?Envases $codenvase): self
    {
        $this->codenvase = $codenvase;

        return $this;
    }


}
