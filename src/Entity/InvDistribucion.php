<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InvDistribucion
 *
 * @ORM\Table(name="inv_distribucion")
 * @ORM\Entity(repositoryClass="App\Repository\InvDistribucionRepository")
 */
class InvDistribucion
{
    /**
     * @var float|null
     *
     * @ORM\Column(name="invDistribucion", type="float", precision=7, scale=2, nullable=true)
     */
    private $invdistribucion;

    /**
     * @var \Distribucion
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Distribucion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codDistribucion", referencedColumnName="idDistribucion")
     * })
     */
    private $coddistribucion;

    public function getInvdistribucion(): ?float
    {
        return $this->invdistribucion;
    }

    public function setInvdistribucion(?float $invdistribucion): self
    {
        $this->invdistribucion = $invdistribucion;

        return $this;
    }

    public function getCoddistribucion(): ?Distribucion
    {
        return $this->coddistribucion;
    }

    public function setCoddistribucion(?Distribucion $coddistribucion): self
    {
        $this->coddistribucion = $coddistribucion;

        return $this;
    }


}
