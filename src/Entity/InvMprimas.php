<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * InvMprimas
 *
 * @ORM\Table(name="inv_mprimas", indexes={@ORM\Index(name="IDX_51157F761A971E95", columns={"codMP"})})
 * @ORM\Entity(repositoryClass="App\Repository\InvMprimasRepository")
 */
class InvMprimas
{
    /**
     * @var string
     *
     * @ORM\Column(name="loteMP", type="string", length=15, nullable=false, options={"default"="1"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $lotemp = '1';

    /**
     * @var float|null
     *
     * @ORM\Column(name="invMP", type="float", precision=11, scale=4, nullable=true)
     */
    private $invmp;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fechLote", type="date", nullable=true)
     */
    private $fechlote;

    /**
     * @var \Mprimas
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Mprimas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codMP", referencedColumnName="codMPrima")
     * })
     */
    private $codmp;

    public function getLotemp(): ?string
    {
        return $this->lotemp;
    }

    public function getInvmp(): ?float
    {
        return $this->invmp;
    }

    public function setInvmp(?float $invmp): self
    {
        $this->invmp = $invmp;

        return $this;
    }

    public function getFechlote(): ?\DateTimeInterface
    {
        return $this->fechlote;
    }

    public function setFechlote(?\DateTimeInterface $fechlote): self
    {
        $this->fechlote = $fechlote;

        return $this;
    }

    public function getCodmp(): ?Mprimas
    {
        return $this->codmp;
    }

    public function setCodmp(?Mprimas $codmp): self
    {
        $this->codmp = $codmp;

        return $this;
    }


}
