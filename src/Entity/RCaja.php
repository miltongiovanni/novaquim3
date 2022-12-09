<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RCaja
 *
 * @ORM\Table(name="r_caja", indexes={@ORM\Index(name="r_caja_factura_idFactura_fk", columns={"idFactura"}), @ORM\Index(name="r_caja_bancos_idBanco_fk", columns={"codBanco"}), @ORM\Index(name="r_caja_form_pago_idFormaPago_fk", columns={"form_pago"})})
 * @ORM\Entity
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


}
