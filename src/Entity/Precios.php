<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Precios
 *
 * @ORM\Table(name="precios")
 * @ORM\Entity
 */
class Precios
{
    /**
     * @var int
     *
     * @ORM\Column(name="codigoGen", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codigogen = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="producto", type="string", length=255, nullable=true)
     */
    private $producto;

    /**
     * @var float|null
     *
     * @ORM\Column(name="fabrica", type="float", precision=10, scale=0, nullable=true)
     */
    private $fabrica;

    /**
     * @var float|null
     *
     * @ORM\Column(name="distribuidor", type="float", precision=10, scale=0, nullable=true)
     */
    private $distribuidor;

    /**
     * @var float|null
     *
     * @ORM\Column(name="detal", type="float", precision=10, scale=0, nullable=true)
     */
    private $detal;

    /**
     * @var float|null
     *
     * @ORM\Column(name="mayor", type="float", precision=10, scale=0, nullable=true)
     */
    private $mayor;

    /**
     * @var float|null
     *
     * @ORM\Column(name="super", type="float", precision=10, scale=0, nullable=true)
     */
    private $super;

    /**
     * @var int|null
     *
     * @ORM\Column(name="presActiva", type="integer", nullable=true, options={"default"="1"})
     */
    private $presactiva = 1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="presLista", type="integer", nullable=true)
     */
    private $preslista = '0';


}
