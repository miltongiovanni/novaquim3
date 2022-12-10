<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Personal
 *
 * @ORM\Table(name="personal", indexes={@ORM\Index(name="personal_cargos_personal_idCargo_fk", columns={"cargoPersonal"}), @ORM\Index(name="personal_areas_personal_idArea_fk", columns={"areaPersonal"})})
 * @ORM\Entity(repositoryClass="App\Repository\PersonalRepository")
 */
class Personal
{
    /**
     * @var int
     *
     * @ORM\Column(name="idPersonal", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpersonal;

    /**
     * @var string
     *
     * @ORM\Column(name="nomPersonal", type="string", length=40, nullable=false)
     */
    private $nompersonal = '';

    /**
     * @var int
     *
     * @ORM\Column(name="activoPersonal", type="integer", nullable=false, options={"default"="1"})
     */
    private $activopersonal = 1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="celPersonal", type="bigint", nullable=true)
     */
    private $celpersonal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="emlPersonal", type="string", length=50, nullable=true)
     */
    private $emlpersonal;

    /**
     * @var string
     *
     * @ORM\Column(name="comDisPersonal", type="decimal", precision=4, scale=3, nullable=false, options={"default"="0.000"})
     */
    private $comdispersonal = '0.000';

    /**
     * @var string
     *
     * @ORM\Column(name="comNovaPersonal", type="decimal", precision=4, scale=3, nullable=false, options={"default"="0.000"})
     */
    private $comnovapersonal = '0.000';

    /**
     * @var \CargosPersonal
     *
     * @ORM\ManyToOne(targetEntity="CargosPersonal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cargoPersonal", referencedColumnName="idCargo")
     * })
     */
    private $cargopersonal;

    /**
     * @var \AreasPersonal
     *
     * @ORM\ManyToOne(targetEntity="AreasPersonal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="areaPersonal", referencedColumnName="idArea")
     * })
     */
    private $areapersonal;

    public function getIdpersonal(): ?int
    {
        return $this->idpersonal;
    }

    public function getNompersonal(): ?string
    {
        return $this->nompersonal;
    }

    public function setNompersonal(string $nompersonal): self
    {
        $this->nompersonal = $nompersonal;

        return $this;
    }

    public function getActivopersonal(): ?int
    {
        return $this->activopersonal;
    }

    public function setActivopersonal(int $activopersonal): self
    {
        $this->activopersonal = $activopersonal;

        return $this;
    }

    public function getCelpersonal(): ?string
    {
        return $this->celpersonal;
    }

    public function setCelpersonal(?string $celpersonal): self
    {
        $this->celpersonal = $celpersonal;

        return $this;
    }

    public function getEmlpersonal(): ?string
    {
        return $this->emlpersonal;
    }

    public function setEmlpersonal(?string $emlpersonal): self
    {
        $this->emlpersonal = $emlpersonal;

        return $this;
    }

    public function getComdispersonal(): ?string
    {
        return $this->comdispersonal;
    }

    public function setComdispersonal(string $comdispersonal): self
    {
        $this->comdispersonal = $comdispersonal;

        return $this;
    }

    public function getComnovapersonal(): ?string
    {
        return $this->comnovapersonal;
    }

    public function setComnovapersonal(string $comnovapersonal): self
    {
        $this->comnovapersonal = $comnovapersonal;

        return $this;
    }

    public function getCargopersonal(): ?CargosPersonal
    {
        return $this->cargopersonal;
    }

    public function setCargopersonal(?CargosPersonal $cargopersonal): self
    {
        $this->cargopersonal = $cargopersonal;

        return $this;
    }

    public function getAreapersonal(): ?AreasPersonal
    {
        return $this->areapersonal;
    }

    public function setAreapersonal(?AreasPersonal $areapersonal): self
    {
        $this->areapersonal = $areapersonal;

        return $this;
    }


}
