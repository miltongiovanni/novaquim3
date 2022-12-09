<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TasaRetefuente
 *
 * @ORM\Table(name="tasa_retefuente")
 * @ORM\Entity
 */
class TasaRetefuente
{
    /**
     * @var int
     *
     * @ORM\Column(name="idTasaRetefuente", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtasaretefuente;

    /**
     * @var string
     *
     * @ORM\Column(name="tasaRetefuente", type="decimal", precision=4, scale=3, nullable=false, options={"default"="0.025"})
     */
    private $tasaretefuente = '0.025';

    /**
     * @var string
     *
     * @ORM\Column(name="descRetefuente", type="string", length=50, nullable=false)
     */
    private $descretefuente = '0';


}
