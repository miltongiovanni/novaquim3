<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetCambios
 *
 * @ORM\Table(name="det_cambios", indexes={@ORM\Index(name="det_cambios_prodpre_codPresentacion_fk", columns={"codPresentacionAnt"}), @ORM\Index(name="IDX_7819496313CCB687", columns={"idCambio"})})
 * @ORM\Entity
 */
class DetCambios
{
    /**
     * @var int
     *
     * @ORM\Column(name="cantPresentacionAnt", type="integer", nullable=false)
     */
    private $cantpresentacionant = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="loteProd", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $loteprod = '0';

    /**
     * @var \Cambios
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Cambios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCambio", referencedColumnName="idCambio")
     * })
     */
    private $idcambio;

    /**
     * @var \Prodpre
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Prodpre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codPresentacionAnt", referencedColumnName="codPresentacion")
     * })
     */
    private $codpresentacionant;


}
