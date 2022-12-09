<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InvMprimas
 *
 * @ORM\Table(name="inv_mprimas", indexes={@ORM\Index(name="IDX_51157F761A971E95", columns={"codMP"})})
 * @ORM\Entity
 */
class InvMprimas
{
    /**
     * @var string
     *
     * @ORM\Column(name="loteMP", type="string", length=15, nullable=false, options={"default"="1"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $lotemp = '1';

    /**
     * @var float|null
     *
     * @ORM\Column(name="invMP", type="float", precision=11, scale=4, nullable=true)
     */
    private $invmp;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fechLote", type="date", nullable=true)
     */
    private $fechlote;

    /**
     * @var \Mprimas
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Mprimas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codMP", referencedColumnName="codMPrima")
     * })
     */
    private $codmp;


}
