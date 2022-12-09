<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrdProdCol
 *
 * @ORM\Table(name="ord_prod_col", indexes={@ORM\Index(name="ord_prod_col_mprimas_codMPrima_fk", columns={"codColor"}), @ORM\Index(name="ord_prod_col_personal_idPersonal_fk", columns={"codPersonal"}), @ORM\Index(name="ord_prod_col_formula_col_idFormulaColor_fk", columns={"idFormulaColor"})})
 * @ORM\Entity
 */
class OrdProdCol
{
    /**
     * @var int
     *
     * @ORM\Column(name="loteColor", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $lotecolor = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fechProd", type="date", nullable=true)
     */
    private $fechprod;

    /**
     * @var float|null
     *
     * @ORM\Column(name="cantKg", type="float", precision=8, scale=4, nullable=true)
     */
    private $cantkg;

    /**
     * @var \Mprimas
     *
     * @ORM\ManyToOne(targetEntity="Mprimas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codColor", referencedColumnName="codMPrima")
     * })
     */
    private $codcolor;

    /**
     * @var \Personal
     *
     * @ORM\ManyToOne(targetEntity="Personal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codPersonal", referencedColumnName="idPersonal")
     * })
     */
    private $codpersonal;

    /**
     * @var \FormulaCol
     *
     * @ORM\ManyToOne(targetEntity="FormulaCol")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idFormulaColor", referencedColumnName="idFormulaColor")
     * })
     */
    private $idformulacolor;


}
