<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RelDistEmp
 *
 * @ORM\Table(name="rel_dist_emp", indexes={@ORM\Index(name="rel_dist_emp_distribucion_idDistribucion_fk_2", columns={"codUnidad"}), @ORM\Index(name="rel_dist_emp_distribucion_idDistribucion_fk", columns={"codPaca"})})
 * @ORM\Entity
 */
class RelDistEmp
{
    /**
     * @var int
     *
     * @ORM\Column(name="idPacUn", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpacun;

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
     *   @ORM\JoinColumn(name="codPaca", referencedColumnName="idDistribucion")
     * })
     */
    private $codpaca;

    /**
     * @var \Distribucion
     *
     * @ORM\ManyToOne(targetEntity="Distribucion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codUnidad", referencedColumnName="idDistribucion")
     * })
     */
    private $codunidad;


}
