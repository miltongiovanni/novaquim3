<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mprimas
 *
 * @ORM\Table(name="mprimas", indexes={@ORM\Index(name="mprimas_cat_mp_idCatMP_fk", columns={"idCatMPrima"}), @ORM\Index(name="mprimas_tasa_iva_idTasaIva_fk", columns={"codIva"})})
 * @ORM\Entity
 */
class Mprimas
{
    /**
     * @var int
     *
     * @ORM\Column(name="codMPrima", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codmprima = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="codMPrimaAnt", type="integer", nullable=true)
     */
    private $codmprimaant = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="nomMPrima", type="string", length=50, nullable=false)
     */
    private $nommprima = '';

    /**
     * @var float|null
     *
     * @ORM\Column(name="minStockMPrima", type="float", precision=4, scale=2, nullable=true)
     */
    private $minstockmprima;

    /**
     * @var float
     *
     * @ORM\Column(name="precioMPrima", type="float", precision=10, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $preciomprima = 0.00;

    /**
     * @var string|null
     *
     * @ORM\Column(name="aliasMPrima", type="string", length=17, nullable=true)
     */
    private $aliasmprima;

    /**
     * @var string|null
     *
     * @ORM\Column(name="aparienciaMPrima", type="string", length=20, nullable=true)
     */
    private $aparienciamprima;

    /**
     * @var string|null
     *
     * @ORM\Column(name="olorMPrima", type="string", length=30, nullable=true)
     */
    private $olormprima;

    /**
     * @var string|null
     *
     * @ORM\Column(name="colorMPrima", type="string", length=30, nullable=true)
     */
    private $colormprima;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pHmPrima", type="string", length=5, nullable=true)
     */
    private $phmprima;

    /**
     * @var string|null
     *
     * @ORM\Column(name="densidadMPrima", type="string", length=5, nullable=true)
     */
    private $densidadmprima;

    /**
     * @var \TasaIva
     *
     * @ORM\ManyToOne(targetEntity="TasaIva")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codIva", referencedColumnName="idTasaIva")
     * })
     */
    private $codiva;

    /**
     * @var \CatMp
     *
     * @ORM\ManyToOne(targetEntity="CatMp")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCatMPrima", referencedColumnName="idCatMP")
     * })
     */
    private $idcatmprima;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Formula", mappedBy="codmprima")
     */
    private $idformula = array();

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idformula = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
