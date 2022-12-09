<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Servicios
 *
 * @ORM\Table(name="servicios", indexes={@ORM\Index(name="servicios_tasa_iva_idTasaIva_fk", columns={"codIva"})})
 * @ORM\Entity
 */
class Servicios
{
    /**
     * @var int
     *
     * @ORM\Column(name="idServicio", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idservicio = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="desServicio", type="string", length=70, nullable=true)
     */
    private $desservicio;

    /**
     * @var int
     *
     * @ORM\Column(name="activo", type="integer", nullable=false)
     */
    private $activo = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="codSiigo", type="integer", nullable=true)
     */
    private $codsiigo = '0';

    /**
     * @var \TasaIva
     *
     * @ORM\ManyToOne(targetEntity="TasaIva")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codIva", referencedColumnName="idTasaIva")
     * })
     */
    private $codiva;


}
