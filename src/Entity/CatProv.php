<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CatProv
 *
 * @ORM\Table(name="cat_prov")
 * @ORM\Entity
 */
class CatProv
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCatProv", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcatprov = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="desCatProv", type="string", length=30, nullable=false)
     */
    private $descatprov = '';


}
