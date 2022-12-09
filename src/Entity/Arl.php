<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Arl
 *
 * @ORM\Table(name="arl")
 * @ORM\Entity
 */
class Arl
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_arl", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idArl;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_arl", type="string", length=20, nullable=false)
     */
    private $nomArl = '';


}
