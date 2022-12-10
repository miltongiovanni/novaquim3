<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * InvAjustes
 *
 * @ORM\Table(name="inv_ajustes", indexes={@ORM\Index(name="inv_ajustes_personal_idPersonal_fk", columns={"idResponsable"})})
 * @ORM\Entity(repositoryClass="App\Repository\InvAjustesRepository")
 */
class InvAjustes
{
    /**
     * @var int
     *
     * @ORM\Column(name="idAjustes", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idajustes;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_inv", type="string", length=10, nullable=false)
     */
    private $tipoInv;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_ajuste", type="date", nullable=true)
     */
    private $fechaAjuste;

    /**
     * @var string|null
     *
     * @ORM\Column(name="motivo_ajuste", type="string", length=255, nullable=true)
     */
    private $motivoAjuste;

    /**
     * @var float|null
     *
     * @ORM\Column(name="inv_ant", type="float", precision=10, scale=0, nullable=true)
     */
    private $invAnt;

    /**
     * @var float|null
     *
     * @ORM\Column(name="inv_nvo", type="float", precision=10, scale=0, nullable=true)
     */
    private $invNvo;

    /**
     * @var int|null
     *
     * @ORM\Column(name="codigo", type="integer", nullable=true)
     */
    private $codigo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lote", type="string", length=20, nullable=true)
     */
    private $lote;

    /**
     * @var \Personal
     *
     * @ORM\ManyToOne(targetEntity="Personal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idResponsable", referencedColumnName="idPersonal")
     * })
     */
    private $idresponsable;

    public function getIdajustes(): ?int
    {
        return $this->idajustes;
    }

    public function getTipoInv(): ?string
    {
        return $this->tipoInv;
    }

    public function setTipoInv(string $tipoInv): self
    {
        $this->tipoInv = $tipoInv;

        return $this;
    }

    public function getFechaAjuste(): ?\DateTimeInterface
    {
        return $this->fechaAjuste;
    }

    public function setFechaAjuste(?\DateTimeInterface $fechaAjuste): self
    {
        $this->fechaAjuste = $fechaAjuste;

        return $this;
    }

    public function getMotivoAjuste(): ?string
    {
        return $this->motivoAjuste;
    }

    public function setMotivoAjuste(?string $motivoAjuste): self
    {
        $this->motivoAjuste = $motivoAjuste;

        return $this;
    }

    public function getInvAnt(): ?float
    {
        return $this->invAnt;
    }

    public function setInvAnt(?float $invAnt): self
    {
        $this->invAnt = $invAnt;

        return $this;
    }

    public function getInvNvo(): ?float
    {
        return $this->invNvo;
    }

    public function setInvNvo(?float $invNvo): self
    {
        $this->invNvo = $invNvo;

        return $this;
    }

    public function getCodigo(): ?int
    {
        return $this->codigo;
    }

    public function setCodigo(?int $codigo): self
    {
        $this->codigo = $codigo;

        return $this;
    }

    public function getLote(): ?string
    {
        return $this->lote;
    }

    public function setLote(?string $lote): self
    {
        $this->lote = $lote;

        return $this;
    }

    public function getIdresponsable(): ?Personal
    {
        return $this->idresponsable;
    }

    public function setIdresponsable(?Personal $idresponsable): self
    {
        $this->idresponsable = $idresponsable;

        return $this;
    }


}
