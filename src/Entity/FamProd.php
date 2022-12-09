<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FamProd
 *
 * @ORM\Table(name="fam_prod")
 * @ORM\Entity
 */
class FamProd
{
    /**
     * @var int
     *
     * @ORM\Column(name="Cod_fam_prod", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codFamProd = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Fam_produc", type="string", length=50, nullable=false)
     */
    private $famProduc = '';


}
