<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetKit
 *
 * @ORM\Table(name="det_kit", indexes={@ORM\Index(name="IDX_8245319079DC859F", columns={"idKit"})})
 * @ORM\Entity
 */
class DetKit
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
     * @var \Kit
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Kit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idKit", referencedColumnName="idKit")
     * })
     */
    private $idkit;


}
