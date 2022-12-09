<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Localidad
 *
 * @ORM\Table(name="localidad")
 * @ORM\Entity
 */
class Localidad
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_localidad", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLocalidad = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Id_city", type="integer", nullable=true, options={"default"="1"})
     */
    private $idCity = 1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="localidad", type="string", length=20, nullable=true)
     */
    private $localidad;


}
