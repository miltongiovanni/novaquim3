<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Gastos
 *
 * @ORM\Table(name="gastos", indexes={@ORM\Index(name="gastos_proveedores_idProv_fk", columns={"idProv"}), @ORM\Index(name="gastos_estados_idEstado_fk", columns={"estadoGasto"}), @ORM\Index(name="gastos_tip_compra_idTipo_fk", columns={"tipoCompra"})})
 * @ORM\Entity(repositoryClass="App\Repository\GastosRepository")
 */
class Gastos
{
    /**
     * @var int
     *
     * @ORM\Column(name="idGasto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idgasto;

    /**
     * @var int|null
     *
     * @ORM\Column(name="numFact", type="bigint", nullable=true)
     */
    private $numfact;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fechGasto", type="date", nullable=true)
     */
    private $fechgasto;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fechVenc", type="date", nullable=true)
     */
    private $fechvenc;

    /**
     * @var int
     *
     * @ORM\Column(name="totalGasto", type="bigint", nullable=false)
     */
    private $totalgasto = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="retefuenteGasto", type="integer", nullable=false)
     */
    private $retefuentegasto = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="subtotalGasto", type="float", precision=12, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $subtotalgasto = 0.00;

    /**
     * @var float
     *
     * @ORM\Column(name="ivaGasto", type="float", precision=12, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $ivagasto = 0.00;

    /**
     * @var float
     *
     * @ORM\Column(name="reteicaGasto", type="float", precision=12, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $reteicagasto = 0.00;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fechCancelacion", type="date", nullable=true)
     */
    private $fechcancelacion;

    /**
     * @var int
     *
     * @ORM\Column(name="idUsuario", type="integer", nullable=false, options={"default"="9"})
     */
    private $idusuario = 9;

    /**
     * @var \TipCompra
     *
     * @ORM\ManyToOne(targetEntity="TipCompra")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipoCompra", referencedColumnName="idTipo")
     * })
     */
    private $tipocompra;

    /**
     * @var \Estados
     *
     * @ORM\ManyToOne(targetEntity="Estados")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estadoGasto", referencedColumnName="idEstado")
     * })
     */
    private $estadogasto;

    /**
     * @var \Proveedores
     *
     * @ORM\ManyToOne(targetEntity="Proveedores")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idProv", referencedColumnName="idProv")
     * })
     */
    private $idprov;

    public function getIdgasto(): ?int
    {
        return $this->idgasto;
    }

    public function getNumfact(): ?string
    {
        return $this->numfact;
    }

    public function setNumfact(?string $numfact): self
    {
        $this->numfact = $numfact;

        return $this;
    }

    public function getFechgasto(): ?\DateTimeInterface
    {
        return $this->fechgasto;
    }

    public function setFechgasto(?\DateTimeInterface $fechgasto): self
    {
        $this->fechgasto = $fechgasto;

        return $this;
    }

    public function getFechvenc(): ?\DateTimeInterface
    {
        return $this->fechvenc;
    }

    public function setFechvenc(?\DateTimeInterface $fechvenc): self
    {
        $this->fechvenc = $fechvenc;

        return $this;
    }

    public function getTotalgasto(): ?string
    {
        return $this->totalgasto;
    }

    public function setTotalgasto(string $totalgasto): self
    {
        $this->totalgasto = $totalgasto;

        return $this;
    }

    public function getRetefuentegasto(): ?int
    {
        return $this->retefuentegasto;
    }

    public function setRetefuentegasto(int $retefuentegasto): self
    {
        $this->retefuentegasto = $retefuentegasto;

        return $this;
    }

    public function getSubtotalgasto(): ?float
    {
        return $this->subtotalgasto;
    }

    public function setSubtotalgasto(float $subtotalgasto): self
    {
        $this->subtotalgasto = $subtotalgasto;

        return $this;
    }

    public function getIvagasto(): ?float
    {
        return $this->ivagasto;
    }

    public function setIvagasto(float $ivagasto): self
    {
        $this->ivagasto = $ivagasto;

        return $this;
    }

    public function getReteicagasto(): ?float
    {
        return $this->reteicagasto;
    }

    public function setReteicagasto(float $reteicagasto): self
    {
        $this->reteicagasto = $reteicagasto;

        return $this;
    }

    public function getFechcancelacion(): ?\DateTimeInterface
    {
        return $this->fechcancelacion;
    }

    public function setFechcancelacion(?\DateTimeInterface $fechcancelacion): self
    {
        $this->fechcancelacion = $fechcancelacion;

        return $this;
    }

    public function getIdusuario(): ?int
    {
        return $this->idusuario;
    }

    public function setIdusuario(int $idusuario): self
    {
        $this->idusuario = $idusuario;

        return $this;
    }

    public function getTipocompra(): ?TipCompra
    {
        return $this->tipocompra;
    }

    public function setTipocompra(?TipCompra $tipocompra): self
    {
        $this->tipocompra = $tipocompra;

        return $this;
    }

    public function getEstadogasto(): ?Estados
    {
        return $this->estadogasto;
    }

    public function setEstadogasto(?Estados $estadogasto): self
    {
        $this->estadogasto = $estadogasto;

        return $this;
    }

    public function getIdprov(): ?Proveedores
    {
        return $this->idprov;
    }

    public function setIdprov(?Proveedores $idprov): self
    {
        $this->idprov = $idprov;

        return $this;
    }


}
