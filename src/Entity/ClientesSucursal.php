<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClientesSucursal
 *
 * @ORM\Table(name="clientes_sucursal", indexes={@ORM\Index(name="clientes_sucursal_clientes_idCliente_fk", columns={"idCliente"}), @ORM\Index(name="clientes_sucursal_ciudades_IdCiudad_fk", columns={"ciudadSucursal"})})
 * @ORM\Entity
 */
class ClientesSucursal
{
    /**
     * @var int
     *
     * @ORM\Column(name="idSucursal", type="integer", nullable=false, options={"default"="1"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idsucursal = 1;

    /**
     * @var string
     *
     * @ORM\Column(name="dirSucursal", type="string", length=60, nullable=false)
     */
    private $dirsucursal = '';

    /**
     * @var int
     *
     * @ORM\Column(name="telSucursal", type="bigint", nullable=false)
     */
    private $telsucursal = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="nomSucursal", type="string", length=60, nullable=false)
     */
    private $nomsucursal = '';

    /**
     * @var \Clientes
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Clientes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCliente", referencedColumnName="idCliente")
     * })
     */
    private $idcliente;

    /**
     * @var \Ciudades
     *
     * @ORM\ManyToOne(targetEntity="Ciudades")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ciudadSucursal", referencedColumnName="idCiudad")
     * })
     */
    private $ciudadsucursal;


}
