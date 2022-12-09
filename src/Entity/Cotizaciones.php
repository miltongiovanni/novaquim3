<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cotizaciones
 *
 * @ORM\Table(name="cotizaciones", indexes={@ORM\Index(name="cotizaciones_clientes_cotiz_idCliente_fk", columns={"idCliente"})})
 * @ORM\Entity
 */
class Cotizaciones
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCotizacion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcotizacion;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fechaCotizacion", type="date", nullable=true)
     */
    private $fechacotizacion;

    /**
     * @var int
     *
     * @ORM\Column(name="precioCotizacion", type="integer", nullable=false)
     */
    private $preciocotizacion = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="presentaciones", type="integer", nullable=false)
     */
    private $presentaciones = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="distribucion", type="string", length=20, nullable=true)
     */
    private $distribucion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="productos", type="string", length=20, nullable=true)
     */
    private $productos;

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
