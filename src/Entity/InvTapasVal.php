<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InvTapasVal
 *
 * @ORM\Table(name="inv_tapas_val")
 * @ORM\Entity(repositoryClass="App\Repository\InvTapasValRepository")
 */
class InvTapasVal
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="invTapa", type="integer", nullable=true)
     */
    private $invtapa;

    /**
     * @var \TapasVal
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="TapasVal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codTapa", referencedColumnName="codTapa")
     * })
     */
    private $codtapa;

    public function getInvtapa(): ?int
    {
        return $this->invtapa;
    }

    public function setInvtapa(?int $invtapa): self
    {
        $this->invtapa = $invtapa;

        return $this;
    }

    public function getCodtapa(): ?TapasVal
    {
        return $this->codtapa;
    }

    public function setCodtapa(?TapasVal $codtapa): self
    {
        $this->codtapa = $codtapa;

        return $this;
    }


}
