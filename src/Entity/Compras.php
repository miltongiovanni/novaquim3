<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Compras
 *
 * @ORM\Table(name="compras", indexes={@ORM\Index(name="compras_estados_idEstado_fk", columns={"estadoCompra"}), @ORM\Index(name="compras_proveedores_idProv_fk", columns={"idProv"}), @ORM\Index(name="compras_tip_compra_Id_tipo_fk", columns={"tipoCompra"})})
 * @ORM\Entity(repositoryClass="App\Repository\ComprasRepository")
 */
class Compras
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCompra", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcompra;

    /**
     * @var int|null
     *
     * @ORM\Column(name="numFact", type="integer", nullable=true)
     */
    private $numfact;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fechComp", type="date", nullable=true)
     */
    private $fechcomp;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fechVenc", type="date", nullable=true)
     */
    private $fechvenc;

    /**
     * @var int
     *
     * @ORM\Column(name="totalCompra", type="bigint", nullable=false)
     */
    private $totalcompra = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="subtotalCompra", type="float", precision=12, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $subtotalcompra = 0.00;

    /**
     * @var float
     *
     * @ORM\Column(name="ivaCompra", type="float", precision=12, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $ivacompra = 0.00;

    /**
     * @var int
     *
     * @ORM\Column(name="retefuenteCompra", type="integer", nullable=false)
     */
    private $retefuentecompra = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="reteicaCompra", type="float", precision=12, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $reteicacompra = 0.00;

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
     *   @ORM\JoinColumn(name="estadoCompra", referencedColumnName="idEstado")
     * })
     */
    private $estadocompra;

    /**
     * @var \Proveedores
     *
     * @ORM\ManyToOne(targetEntity="Proveedores")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idProv", referencedColumnName="idProv")
     * })
     */
    private $idprov;

    public function getIdcompra(): ?int
    {
        return $this->idcompra;
    }

    public function getNumfact(): ?int
    {
        return $this->numfact;
    }

    public function setNumfact(?int $numfact): self
    {
        $this->numfact = $numfact;

        return $this;
    }

    public function getFechcomp(): ?\DateTimeInterface
    {
        return $this->fechcomp;
    }

    public function setFechcomp(?\DateTimeInterface $fechcomp): self
    {
        $this->fechcomp = $fechcomp;

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

    public function getTotalcompra(): ?string
    {
        return $this->totalcompra;
    }

    public function setTotalcompra(string $totalcompra): self
    {
        $this->totalcompra = $totalcompra;

        return $this;
    }

    public function getSubtotalcompra(): ?float
    {
        return $this->subtotalcompra;
    }

    public function setSubtotalcompra(float $subtotalcompra): self
    {
        $this->subtotalcompra = $subtotalcompra;

        return $this;
    }

    public function getIvacompra(): ?float
    {
        return $this->ivacompra;
    }

    public function setIvacompra(float $ivacompra): self
    {
        $this->ivacompra = $ivacompra;

        return $this;
    }

    public function getRetefuentecompra(): ?int
    {
        return $this->retefuentecompra;
    }

    public function setRetefuentecompra(int $retefuentecompra): self
    {
        $this->retefuentecompra = $retefuentecompra;

        return $this;
    }

    public function getReteicacompra(): ?float
    {
        return $this->reteicacompra;
    }

    public function setReteicacompra(float $reteicacompra): self
    {
        $this->reteicacompra = $reteicacompra;

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

    public function getEstadocompra(): ?Estados
    {
        return $this->estadocompra;
    }

    public function setEstadocompra(?Estados $estadocompra): self
    {
        $this->estadocompra = $estadocompra;

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
