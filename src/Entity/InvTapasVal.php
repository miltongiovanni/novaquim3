<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InvTapasVal
 *
 * @ORM\Table(name="inv_tapas_val")
 * @ORM\Entity
 */
class InvTapasVal
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="invTapa", type="integer", nullable=true)
     */
    private $invtapa;

    /**
     * @var \TapasVal
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="TapasVal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codTapa", referencedColumnName="codTapa")
     * })
     */
    private $codtapa;


}
