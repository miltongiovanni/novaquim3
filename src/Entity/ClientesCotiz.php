<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClientesCotiz
 *
 * @ORM\Table(name="clientes_cotiz", indexes={@ORM\Index(name="cod_vend", columns={"codVendedor"}), @ORM\Index(name="Id_cat_clien", columns={"idCatCliente"}), @ORM\Index(name="Ciudad_clien", columns={"idCiudad"})})
 * @ORM\Entity
 */
class ClientesCotiz
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCliente", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcliente;

    /**
     * @var string
     *
     * @ORM\Column(name="nomCliente", type="string", length=60, nullable=false)
     */
    private $nomcliente = '';

    /**
     * @var string
     *
     * @ORM\Column(name="contactoCliente", type="string", length=40, nullable=false)
     */
    private $contactocliente = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="cargoContacto", type="string", length=40, nullable=true)
     */
    private $cargocontacto = '';

    /**
     * @var string
     *
     * @ORM\Column(name="telCliente", type="string", length=8, nullable=false)
     */
    private $telcliente = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="celCliente", type="string", length=11, nullable=true)
     */
    private $celcliente = '';

    /**
     * @var string
     *
     * @ORM\Column(name="dirCliente", type="string", length=60, nullable=false)
     */
    private $dircliente = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="emailCliente", type="string", length=60, nullable=true)
     */
    private $emailcliente = '';

    /**
     * @var \Ciudades
     *
     * @ORM\ManyToOne(targetEntity="Ciudades")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCiudad", referencedColumnName="idCiudad")
     * })
     */
    private $idciudad;

    /**
     * @var \Personal
     *
     * @ORM\ManyToOne(targetEntity="Personal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codVendedor", referencedColumnName="idPersonal")
     * })
     */
    private $codvendedor;

    /**
     * @var \CatClien
     *
     * @ORM\ManyToOne(targetEntity="CatClien")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCatCliente", referencedColumnName="idCatClien")
     * })
     */
    private $idcatcliente;


}
