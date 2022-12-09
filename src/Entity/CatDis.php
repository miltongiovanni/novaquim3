<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CatDis
 *
 * @ORM\Table(name="cat_dis")
 * @ORM\Entity
 */
class CatDis
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCatDis", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcatdis = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="catDis", type="string", length=20, nullable=false)
     */
    private $catdis = '';


}
