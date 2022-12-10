<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InvEnvase
 *
 * @ORM\Table(name="inv_envase")
 * @ORM\Entity(repositoryClass="App\Repository\InvEnvaseRepository")
 */
class InvEnvase
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="invEnvase", type="integer", nullable=true)
     */
    private $invenvase;

    /**
     * @var \Envases
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Envases")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codEnvase", referencedColumnName="codEnvase")
     * })
     */
    private $codenvase;

    public function getInvenvase(): ?int
    {
        return $this->invenvase;
    }

    public function setInvenvase(?int $invenvase): self
    {
        $this->invenvase = $invenvase;

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
