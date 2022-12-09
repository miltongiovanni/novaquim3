<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TasaReteica
 *
 * @ORM\Table(name="tasa_reteica")
 * @ORM\Entity
 */
class TasaReteica
{
    /**
     * @var int
     *
     * @ORM\Column(name="idTasaRetIca", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtasaretica = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="tasaRetIca", type="decimal", precision=4, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $tasaretica = '0.00';


}
