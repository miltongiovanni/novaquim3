<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetFactura
 *
 * @ORM\Table(name="det_factura", indexes={@ORM\Index(name="det_factura_codProducto_index", columns={"codProducto"}), @ORM\Index(name="det_factura_tasa_iva_idTasaIva_fk", columns={"idTasaIvaProducto"}), @ORM\Index(name="IDX_F98A97A6E952CBFB", columns={"idFactura"})})
 * @ORM\Entity
 */
class DetFactura
{
    /**
     * @var int
     *
     * @ORM\Column(name="codProducto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codproducto = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="cantProducto", type="integer", nullable=true)
     */
    private $cantproducto;

    /**
     * @var float
     *
     * @ORM\Column(name="precioProducto", type="float", precision=12, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $precioproducto = 0.00;

    /**
     * @var \Factura
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Factura")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idFactura", referencedColumnName="idFactura")
     * })
     */
    private $idfactura;

    /**
     * @var \TasaIva
     *
     * @ORM\ManyToOne(targetEntity="TasaIva")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idTasaIvaProducto", referencedColumnName="idTasaIva")
     * })
     */
    private $idtasaivaproducto;


}
