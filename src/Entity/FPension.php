<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FPension
 *
 * @ORM\Table(name="f_pension")
 * @ORM\Entity
 */
class FPension
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_f_pension", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFPension;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_f_pension", type="string", length=20, nullable=true)
     */
    private $nomFPension;


}
