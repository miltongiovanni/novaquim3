<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RelDistMp
 *
 * @ORM\Table(name="rel_dist_mp", indexes={@ORM\Index(name="rel_dist_mp_tapas_val_codTapa_fk", columns={"codTapa"}), @ORM\Index(name="rel_dist_mp_medida_idMedida_fk", columns={"codMedida"}), @ORM\Index(name="rel_dist_mp_distribucion_idDistribucion_fk", columns={"codDist"}), @ORM\Index(name="rel_dist_mp_envases_codEnvase_fk", columns={"codEnvase"}), @ORM\Index(name="IDX_21CD90DBFFF956C0", columns={"codMPrimaDist"})})
 * @ORM\Entity
 */
class RelDistMp
{
    /**
     * @var \Distribucion
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Distribucion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codDist", referencedColumnName="idDistribucion")
     * })
     */
    private $coddist;

    /**
     * @var \Mprimadist
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Mprimadist")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codMPrimaDist", referencedColumnName="codMPrimaDist")
     * })
     */
    private $codmprimadist;

    /**
     * @var \Envases
     *
     * @ORM\ManyToOne(targetEntity="Envases")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codEnvase", referencedColumnName="codEnvase")
     * })
     */
    private $codenvase;

    /**
     * @var \TapasVal
     *
     * @ORM\ManyToOne(targetEntity="TapasVal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codTapa", referencedColumnName="codTapa")
     * })
     */
    private $codtapa;

    /**
     * @var \Medida
     *
     * @ORM\ManyToOne(targetEntity="Medida")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codMedida", referencedColumnName="idMedida")
     * })
     */
    private $codmedida;


}
