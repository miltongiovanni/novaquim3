<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Egreso
 *
 * @ORM\Table(name="egreso", indexes={@ORM\Index(name="egreso_form_pago_idFormaPago_fk", columns={"formPago"})})
 * @ORM\Entity
 */
class Egreso
{
    /**
     * @var int
     *
     * @ORM\Column(name="idEgreso", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idegreso;

    /**
     * @var int
     *
     * @ORM\Column(name="idCompra", type="integer", nullable=false)
     */
    private $idcompra = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="tipoCompra", type="integer", nullable=false)
     */
    private $tipocompra = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pago", type="integer", nullable=false)
     */
    private $pago = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fechPago", type="date", nullable=true)
     */
    private $fechpago;

    /**
     * @var int
     *
     * @ORM\Column(name="descuentoE", type="integer", nullable=false)
     */
    private $descuentoe = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="idUsuario", type="integer", nullable=false, options={"default"="34"})
     */
    private $idusuario = 34;

    /**
     * @var \FormPago
     *
     * @ORM\ManyToOne(targetEntity="FormPago")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="formPago", referencedColumnName="idFormaPago")
     * })
     */
    private $formpago;


}
