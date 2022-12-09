<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CatMp
 *
 * @ORM\Table(name="cat_mp")
 * @ORM\Entity
 */
class CatMp
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCatMP", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcatmp = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="catMP", type="string", length=20, nullable=false)
     */
    private $catmp = '';


}
