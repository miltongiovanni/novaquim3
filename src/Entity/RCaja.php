<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * RCaja
 *
 * @ORM\Table(name="r_caja", indexes={@ORM\Index(name="r_caja_factura_idFactura_fk", columns={"idFactura"}), @ORM\Index(name="r_caja_bancos_idBanco_fk", columns={"codBanco"}), @ORM\Index(name="r_caja_form_pago_idFormaPago_fk", columns={"form_pago"})})
 * @ORM\Entity(repositoryClass="App\Repository\RCajaRepository")
 */
class RCaja
{
    /**
     * @var int
     *
     * @ORM\Column(name="idRecCaja", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idreccaja;

    /**
     * @var int
     *
     * @ORM\Column(name="cobro", type="integer", nullable=false)
     */
    private $cobro = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fechaRecCaja", type="date", nullable=true)
     */
    private $fechareccaja;

    /**
     * @var int
     *
     * @ORM\Column(name="descuento_f", type="integer", nullable=false)
     */
    private $descuentoF = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="reten", type="integer", nullable=false)
     */
    private $reten = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="reten_cree", type="integer", nullable=false)
     */
    private $retenCree = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="idCheque", type="integer", nullable=false)
     */
    private $idcheque = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="reten_ica", type="integer", nullable=false)
     */
    private $retenIca = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="idUsuario", type="integer", nullable=false, options={"default"="12"})
     */
    private $idusuario = 12;

    /**
     * @var \FormPago
     *
     * @ORM\ManyToOne(targetEntity="FormPago")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="form_pago", referencedColumnName="idFormaPago")
     * })
     */
    private $formPago;

    /**
     * @var \Bancos
     *
     * @ORM\ManyToOne(targetEntity="Bancos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codBanco", referencedColumnName="idBanco")
     * })
     */
    private $codbanco;

    /**
     * @var \Factura
     *
     * @ORM\ManyToOne(targetEntity="Factura")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idFactura", referencedColumnName="idFactura")
     * })
     */
    private $idfactura;

    public function getIdreccaja(): ?int
    {
        return $this->idreccaja;
    }

    public function getCobro(): ?int
    {
        return $this->cobro;
    }

    public function setCobro(int $cobro): self
    {
        $this->cobro = $cobro;

        return $this;
    }

    public function getFechareccaja(): ?\DateTimeInterface
    {
        return $this->fechareccaja;
    }

    public function setFechareccaja(?\DateTimeInterface $fechareccaja): self
    {
        $this->fechareccaja = $fechareccaja;

        return $this;
    }

    public function getDescuentoF(): ?int
    {
        return $this->descuentoF;
    }

    public function setDescuentoF(int $descuentoF): self
    {
        $this->descuentoF = $descuentoF;

        return $this;
    }

    public function getReten(): ?int
    {
        return $this->reten;
    }

    public function setReten(int $reten): self
    {
        $this->reten = $reten;

        return $this;
    }

    public function getRetenCree(): ?int
    {
        return $this->retenCree;
    }

    public function setRetenCree(int $retenCree): self
    {
        $this->retenCree = $retenCree;

        return $this;
    }

    public function getIdcheque(): ?int
    {
        return $this->idcheque;
    }

    public function setIdcheque(int $idcheque): self
    {
        $this->idcheque = $idcheque;

        return $this;
    }

    public function getRetenIca(): ?int
    {
        return $this->retenIca;
    }

    public function setRetenIca(int $retenIca): self
    {
        $this->retenIca = $retenIca;

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

    public function getFormPago(): ?FormPago
    {
        return $this->formPago;
    }

    public function setFormPago(?FormPago $formPago): self
    {
        $this->formPago = $formPago;

        return $this;
    }

    public function getCodbanco(): ?Bancos
    {
        return $this->codbanco;
    }

    public function setCodbanco(?Bancos $codbanco): self
    {
        $this->codbanco = $codbanco;

        return $this;
    }

    public function getIdfactura(): ?Factura
    {
        return $this->idfactura;
    }

    public function setIdfactura(?Factura $idfactura): self
    {
        $this->idfactura = $idfactura;

        return $this;
    }


}
