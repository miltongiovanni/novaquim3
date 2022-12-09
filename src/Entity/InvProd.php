<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InvProd
 *
 * @ORM\Table(name="inv_prod", indexes={@ORM\Index(name="IDX_82C72B0CA5DF3D48", columns={"codPresentacion"})})
 * @ORM\Entity
 */
class InvProd
{
    /**
     * @var int
     *
     * @ORM\Column(name="loteProd", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $loteprod = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="invProd", type="float", precision=5, scale=1, nullable=false, options={"default"="0.0"})
     */
    private $invprod = 0.0;

    /**
     * @var \Prodpre
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Prodpre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codPresentacion", referencedColumnName="codPresentacion")
     * })
     */
    private $codpresentacion;


}
