<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetRemision1
 *
 * @ORM\Table(name="det_remision1", indexes={@ORM\Index(name="det_remision1_remision1_idRemision_fk", columns={"idRemision"})})
 * @ORM\Entity
 */
class DetRemision1
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="codProducto", type="integer", nullable=false)
     */
    private $codproducto = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="cantProducto", type="float", precision=6, scale=2, nullable=true)
     */
    private $cantproducto;

    /**
     * @var int
     *
     * @ORM\Column(name="loteProducto", type="integer", nullable=false)
     */
    private $loteproducto = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="precioProducto", type="integer", nullable=true)
     */
    private $precioproducto = '0';

    /**
     * @var \Remision1
     *
     * @ORM\ManyToOne(targetEntity="Remision1")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idRemision", referencedColumnName="idRemision")
     * })
     */
    private $idremision;


}
