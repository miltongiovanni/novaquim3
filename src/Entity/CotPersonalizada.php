<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CotPersonalizada
 *
 * @ORM\Table(name="cot_personalizada", indexes={@ORM\Index(name="cot_personalizada_clientes_cotiz_idCliente_fk", columns={"idCliente"})})
 * @ORM\Entity
 */
class CotPersonalizada
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCotPersonalizada", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcotpersonalizada;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fechaCotizacion", type="date", nullable=true)
     */
    private $fechacotizacion;

    /**
     * @var int
     *
     * @ORM\Column(name="tipPrecio", type="integer", nullable=false)
     */
    private $tipprecio = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="destino", type="integer", nullable=true, options={"default"="1"})
     */
    private $destino = 1;

    /**
     * @var int
     *
     * @ORM\Column(name="idUsuario", type="integer", nullable=false, options={"default"="10"})
     */
    private $idusuario = 10;

    /**
     * @var \ClientesCotiz
     *
     * @ORM\ManyToOne(targetEntity="ClientesCotiz")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCliente", referencedColumnName="idCliente")
     * })
     */
    private $idcliente;


}
