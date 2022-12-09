<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Personal
 *
 * @ORM\Table(name="personal", indexes={@ORM\Index(name="personal_cargos_personal_idCargo_fk", columns={"cargoPersonal"}), @ORM\Index(name="personal_areas_personal_idArea_fk", columns={"areaPersonal"})})
 * @ORM\Entity
 */
class Personal
{
    /**
     * @var int
     *
     * @ORM\Column(name="idPersonal", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpersonal;

    /**
     * @var string
     *
     * @ORM\Column(name="nomPersonal", type="string", length=40, nullable=false)
     */
    private $nompersonal = '';

    /**
     * @var int
     *
     * @ORM\Column(name="activoPersonal", type="integer", nullable=false, options={"default"="1"})
     */
    private $activopersonal = 1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="celPersonal", type="bigint", nullable=true)
     */
    private $celpersonal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="emlPersonal", type="string", length=50, nullable=true)
     */
    private $emlpersonal;

    /**
     * @var string
     *
     * @ORM\Column(name="comDisPersonal", type="decimal", precision=4, scale=3, nullable=false, options={"default"="0.000"})
     */
    private $comdispersonal = '0.000';

    /**
     * @var string
     *
     * @ORM\Column(name="comNovaPersonal", type="decimal", precision=4, scale=3, nullable=false, options={"default"="0.000"})
     */
    private $comnovapersonal = '0.000';

    /**
     * @var \CargosPersonal
     *
     * @ORM\ManyToOne(targetEntity="CargosPersonal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cargoPersonal", referencedColumnName="idCargo")
     * })
     */
    private $cargopersonal;

    /**
     * @var \AreasPersonal
     *
     * @ORM\ManyToOne(targetEntity="AreasPersonal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="areaPersonal", referencedColumnName="idArea")
     * })
     */
    private $areapersonal;


}
