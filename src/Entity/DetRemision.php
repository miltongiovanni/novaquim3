<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetRemision
 *
 * @ORM\Table(name="det_remision", indexes={@ORM\Index(name="IDX_421B38DA57D1CDCF", columns={"idRemision"})})
 * @ORM\Entity
 */
class DetRemision
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
     * @var float|null
     *
     * @ORM\Column(name="cantProducto", type="float", precision=6, scale=2, nullable=true)
     */
    private $cantproducto;

    /**
     * @var int
     *
     * @ORM\Column(name="loteProducto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $loteproducto = '0';

    /**
     * @var \Remision
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Remision")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idRemision", referencedColumnName="idRemision")
     * })
     */
    private $idremision;


}
