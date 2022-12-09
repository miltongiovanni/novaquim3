<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FCesantias
 *
 * @ORM\Table(name="f_cesantias")
 * @ORM\Entity
 */
class FCesantias
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_f_cesant", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFCesant;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_f_cesant", type="string", length=20, nullable=true)
     */
    private $nomFCesant;


}
