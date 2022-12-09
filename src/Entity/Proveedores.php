<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proveedores
 *
 * @ORM\Table(name="proveedores", indexes={@ORM\Index(name="proveedores_tasa_reteica_idTasaRetIca_fk", columns={"idTasaIcaProv"}), @ORM\Index(name="proveedores_cat_prov_idCatProv_fk", columns={"idCatProv"}), @ORM\Index(name="proveedores_tasa_retefuente_idTasaRetefuente_fk", columns={"idRetefuente"})})
 * @ORM\Entity
 */
class Proveedores
{
    /**
     * @var int
     *
     * @ORM\Column(name="idProv", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idprov;

    /**
     * @var string
     *
     * @ORM\Column(name="nitProv", type="string", length=15, nullable=false)
     */
    private $nitprov = '';

    /**
     * @var string
     *
     * @ORM\Column(name="nomProv", type="string", length=50, nullable=false)
     */
    private $nomprov = '';

    /**
     * @var string
     *
     * @ORM\Column(name="dirProv", type="string", length=50, nullable=false)
     */
    private $dirprov = '';

    /**
     * @var string
     *
     * @ORM\Column(name="contProv", type="string", length=30, nullable=false)
     */
    private $contprov = '';

    /**
     * @var int
     *
     * @ORM\Column(name="telProv", type="integer", nullable=false)
     */
    private $telprov = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="emailProv", type="string", length=50, nullable=true)
     */
    private $emailprov;

    /**
     * @var int
     *
     * @ORM\Column(name="autoretProv", type="integer", nullable=false)
     */
    private $autoretprov = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="regProv", type="integer", nullable=false, options={"default"="1"})
     */
    private $regprov = 1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="estProv", type="integer", nullable=true, options={"default"="1"})
     */
    private $estprov = 1;

    /**
     * @var \TasaReteica
     *
     * @ORM\ManyToOne(targetEntity="TasaReteica")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idTasaIcaProv", referencedColumnName="idTasaRetIca")
     * })
     */
    private $idtasaicaprov;

    /**
     * @var \CatProv
     *
     * @ORM\ManyToOne(targetEntity="CatProv")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCatProv", referencedColumnName="idCatProv")
     * })
     */
    private $idcatprov;

    /**
     * @var \TasaRetefuente
     *
     * @ORM\ManyToOne(targetEntity="TasaRetefuente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idRetefuente", referencedColumnName="idTasaRetefuente")
     * })
     */
    private $idretefuente;


}
