<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CajaComp
 *
 * @ORM\Table(name="caja_comp")
 * @ORM\Entity
 */
class CajaComp
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_caja", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCaja;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_caja", type="string", length=20, nullable=false)
     */
    private $nomCaja = '';


}
