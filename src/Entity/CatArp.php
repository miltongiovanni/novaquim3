<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CatArp
 *
 * @ORM\Table(name="cat_arp")
 * @ORM\Entity
 */
class CatArp
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_cat_arl", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCatArl;

    /**
     * @var float
     *
     * @ORM\Column(name="Riesgo", type="float", precision=6, scale=5, nullable=false, options={"default"="0.00000"})
     */
    private $riesgo = 0.00000;

    /**
     * @var string|null
     *
     * @ORM\Column(name="trabajo", type="string", length=30, nullable=true)
     */
    private $trabajo;


}