<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Eps
 *
 * @ORM\Table(name="eps")
 * @ORM\Entity
 */
class Eps
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_eps", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEps;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_eps", type="string", length=25, nullable=true)
     */
    private $nomEps;


}
