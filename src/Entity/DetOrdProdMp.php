<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetOrdProdMp
 *
 * @ORM\Table(name="det_ord_prod_mp", indexes={@ORM\Index(name="det_ord_prod_mp_mprimas_codMPrima_fk", columns={"idMPrima"}), @ORM\Index(name="IDX_7D46E6A7516BD0A2", columns={"loteMP"})})
 * @ORM\Entity
 */
class DetOrdProdMp
{
    /**
     * @var float|null
     *
     * @ORM\Column(name="cantMPrima", type="float", precision=11, scale=4, nullable=true)
     */
    private $cantmprima;

    /**
     * @var string
     *
     * @ORM\Column(name="loteMPrima", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $lotemprima;

    /**
     * @var \Mprimas
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Mprimas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idMPrima", referencedColumnName="codMPrima")
     * })
     */
    private $idmprima;

    /**
     * @var \OrdProdMp
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="OrdProdMp")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="loteMP", referencedColumnName="loteMP")
     * })
     */
    private $lotemp;


}