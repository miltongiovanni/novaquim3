<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bancos
 *
 * @ORM\Table(name="bancos")
 * @ORM\Entity
 */
class Bancos
{
    /**
     * @var int
     *
     * @ORM\Column(name="idBanco", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idbanco = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="banco", type="string", length=30, nullable=true)
     */
    private $banco;


}
