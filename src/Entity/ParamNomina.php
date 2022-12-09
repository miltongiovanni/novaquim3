<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ParamNomina
 *
 * @ORM\Table(name="param_nomina")
 * @ORM\Entity
 */
class ParamNomina
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_param", type="string", length=50, nullable=false)
     */
    private $descParam = '';

    /**
     * @var float
     *
     * @ORM\Column(name="val_param", type="float", precision=10, scale=3, nullable=false, options={"default"="0.000"})
     */
    private $valParam = 0.000;


}
