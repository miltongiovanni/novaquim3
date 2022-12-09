<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CatProd
 *
 * @ORM\Table(name="cat_prod")
 * @ORM\Entity
 */
class CatProd
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCatProd", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcatprod;

    /**
     * @var string
     *
     * @ORM\Column(name="catProd", type="string", length=30, nullable=false)
     */
    private $catprod = '';


}
