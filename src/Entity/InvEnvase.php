<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InvEnvase
 *
 * @ORM\Table(name="inv_envase")
 * @ORM\Entity
 */
class InvEnvase
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="invEnvase", type="integer", nullable=true)
     */
    private $invenvase;

    /**
     * @var \Envases
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Envases")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codEnvase", referencedColumnName="codEnvase")
     * })
     */
    private $codenvase;


}
