<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnvasadoDist
 *
 * @ORM\Table(name="envasado_dist", indexes={@ORM\Index(name="det_env_dist_distribucion_idDistribucion_fk", columns={"codDist"})})
 * @ORM\Entity
 */
class EnvasadoDist
{
    /**
     * @var int
     *
     * @ORM\Column(name="idEnvDist", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idenvdist;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fechaEnvDist", type="date", nullable=true)
     */
    private $fechaenvdist;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cantidad", type="integer", nullable=true)
     */
    private $cantidad;

    /**
     * @var \Distribucion
     *
     * @ORM\ManyToOne(targetEntity="Distribucion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codDist", referencedColumnName="idDistribucion")
     * })
     */
    private $coddist;


}
