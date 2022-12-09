<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prodpre
 *
 * @ORM\Table(name="prodpre", indexes={@ORM\Index(name="prodpre_precios_codigoGen_fk", columns={"codigoGen"}), @ORM\Index(name="prodpre_envases_codEnvase_fk", columns={"codEnvase"}), @ORM\Index(name="prodpre_productos_codProducto_fk", columns={"codProducto"}), @ORM\Index(name="prodpre_etiquetas_codEtiqueta_fk", columns={"codEtiq"}), @ORM\Index(name="prodpre_tapas_val_codTapa_fk", columns={"codTapa"}), @ORM\Index(name="prodpre_tasa_iva_idTasaIva_fk", columns={"codIva"}), @ORM\Index(name="prodpre_medida_idMedida_fk", columns={"codMedida"})})
 * @ORM\Entity
 */
class Prodpre
{
    /**
     * @var int
     *
     * @ORM\Column(name="codPresentacion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codpresentacion = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="presentacion", type="string", length=70, nullable=true)
     */
    private $presentacion;

    /**
     * @var int|null
     *
     * @ORM\Column(name="stockPresentacion", type="integer", nullable=true)
     */
    private $stockpresentacion;

    /**
     * @var int
     *
     * @ORM\Column(name="cotiza", type="integer", nullable=false)
     */
    private $cotiza = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="presentacionActiva", type="integer", nullable=false, options={"default"="1"})
     */
    private $presentacionactiva = 1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="codSiigo", type="integer", nullable=true)
     */
    private $codsiigo;

    /**
     * @var \Medida
     *
     * @ORM\ManyToOne(targetEntity="Medida")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codMedida", referencedColumnName="idMedida")
     * })
     */
    private $codmedida;

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
     * @var \Envases
     *
     * @ORM\ManyToOne(targetEntity="Envases")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codEnvase", referencedColumnName="codEnvase")
     * })
     */
    private $codenvase;

    /**
     * @var \Precios
     *
     * @ORM\ManyToOne(targetEntity="Precios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codigoGen", referencedColumnName="codigoGen")
     * })
     */
    private $codigogen;

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
     * @var \Etiquetas
     *
     * @ORM\ManyToOne(targetEntity="Etiquetas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codEtiq", referencedColumnName="codEtiqueta")
     * })
     */
    private $codetiq;

    /**
     * @var \Productos
     *
     * @ORM\ManyToOne(targetEntity="Productos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codProducto", referencedColumnName="codProducto")
     * })
     */
    private $codproducto;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Cambios", mappedBy="codpresentacionnvo")
     */
    private $idcambio = array();

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="OrdProd", mappedBy="codpresentacion")
     */
    private $lote = array();

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idcambio = new \Doctrine\Common\Collections\ArrayCollection();
        $this->lote = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
