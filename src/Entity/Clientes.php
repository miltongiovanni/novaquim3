<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clientes
 *
 * @ORM\Table(name="clientes", uniqueConstraints={@ORM\UniqueConstraint(name="clientes_nitCliente_uindex", columns={"nitCliente"})}, indexes={@ORM\Index(name="clientes_cat_clien_idCatClien_fk", columns={"idCatCliente"}), @ORM\Index(name="clientes_ciudades_Id_ciudad_fk", columns={"ciudadCliente"}), @ORM\Index(name="clientes_personal_idPersonal_fk", columns={"codVendedor"})})
 * @ORM\Entity
 */
class Clientes
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
     * @ORM\Column(name="nitCliente", type="string", length=15, nullable=false)
     */
    private $nitcliente = '';

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
     * @ORM\Column(name="cargoCliente", type="string", length=30, nullable=true)
     */
    private $cargocliente = '';

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
     * @ORM\Column(name="emailCliente", type="string", length=50, nullable=true)
     */
    private $emailcliente = '';

    /**
     * @var int
     *
     * @ORM\Column(name="estadoCliente", type="integer", nullable=false)
     */
    private $estadocliente;

    /**
     * @var int
     *
     * @ORM\Column(name="retIva", type="integer", nullable=false)
     */
    private $retiva = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="retIca", type="integer", nullable=false)
     */
    private $retica = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="retFte", type="integer", nullable=false)
     */
    private $retfte = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="retCree", type="integer", nullable=false, options={"default"="1"})
     */
    private $retcree = 1;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fchCreacionCliente", type="date", nullable=false, options={"default"="2012-04-01"})
     */
    private $fchcreacioncliente = '2012-04-01';

    /**
     * @var int|null
     *
     * @ORM\Column(name="exenIva", type="integer", nullable=true)
     */
    private $exeniva = '0';

    /**
     * @var \Ciudades
     *
     * @ORM\ManyToOne(targetEntity="Ciudades")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ciudadCliente", referencedColumnName="idCiudad")
     * })
     */
    private $ciudadcliente;

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
