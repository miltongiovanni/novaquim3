<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Cambios
 *
 * @ORM\Table(name="cambios", indexes={@ORM\Index(name="cambios_personal_idPersonal_fk", columns={"codPersonal"})})
 * @ORM\Entity(repositoryClass="App\Repository\CambiosRepository")
 */
class Cambios
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCambio", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcambio;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fechaCambio", type="date", nullable=true)
     */
    private $fechacambio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="motivo_cambio", type="string", length=255, nullable=true)
     */
    private $motivoCambio;

    /**
     * @var \Personal
     *
     * @ORM\ManyToOne(targetEntity="Personal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codPersonal", referencedColumnName="idPersonal")
     * })
     */
    private $codpersonal;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Prodpre", inversedBy="idcambio")
     * @ORM\JoinTable(name="det_cambios2",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idCambio", referencedColumnName="idCambio")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="codPresentacionNvo", referencedColumnName="codPresentacion")
     *   }
     * )
     */
    private $codpresentacionnvo = array();

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->codpresentacionnvo = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdcambio(): ?int
    {
        return $this->idcambio;
    }

    public function getFechacambio(): ?\DateTimeInterface
    {
        return $this->fechacambio;
    }

    public function setFechacambio(?\DateTimeInterface $fechacambio): self
    {
        $this->fechacambio = $fechacambio;

        return $this;
    }

    public function getMotivoCambio(): ?string
    {
        return $this->motivoCambio;
    }

    public function setMotivoCambio(?string $motivoCambio): self
    {
        $this->motivoCambio = $motivoCambio;

        return $this;
    }

    public function getCodpersonal(): ?Personal
    {
        return $this->codpersonal;
    }

    public function setCodpersonal(?Personal $codpersonal): self
    {
        $this->codpersonal = $codpersonal;

        return $this;
    }

    /**
     * @return Collection<int, Prodpre>
     */
    public function getCodpresentacionnvo(): Collection
    {
        return $this->codpresentacionnvo;
    }

    public function addCodpresentacionnvo(Prodpre $codpresentacionnvo): self
    {
        if (!$this->codpresentacionnvo->contains($codpresentacionnvo)) {
            $this->codpresentacionnvo->add($codpresentacionnvo);
        }

        return $this;
    }

    public function removeCodpresentacionnvo(Prodpre $codpresentacionnvo): self
    {
        $this->codpresentacionnvo->removeElement($codpresentacionnvo);

        return $this;
    }

}
