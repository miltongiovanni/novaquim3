<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrdProdMp
 *
 * @ORM\Table(name="ord_prod_mp", indexes={@ORM\Index(name="ord_prod_mp_formula_mp_idFormulaMPrima_fk", columns={"idFormMP"}), @ORM\Index(name="ord_prod_mp_mprimas_codMPrima_fk", columns={"codMPrima"}), @ORM\Index(name="ord_prod_mp_personal_idPersonal_fk", columns={"codPersonal"})})
 * @ORM\Entity
 */
class OrdProdMp
{
    /**
     * @var int
     *
     * @ORM\Column(name="loteMP", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $lotemp = '0';

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
     *   @ORM\JoinColumn(name="codMPrima", referencedColumnName="codMPrima")
     * })
     */
    private $codmprima;

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
     * @var \FormulaMp
     *
     * @ORM\ManyToOne(targetEntity="FormulaMp")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idFormMP", referencedColumnName="idFormulaMPrima")
     * })
     */
    private $idformmp;


}
