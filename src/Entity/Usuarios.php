<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuarios
 *
 * @ORM\Table(name="usuarios", indexes={@ORM\Index(name="usuarios_perfiles_idPerfil_fk", columns={"idPerfil"}), @ORM\Index(name="usuarios_estados_usuarios_idEstado_fk", columns={"estadoUsuario"})})
 * @ORM\Entity
 */
class Usuarios
{
    /**
     * @var int
     *
     * @ORM\Column(name="idUsuario", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idusuario;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255, nullable=false)
     */
    private $nombre = '';

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=255, nullable=false)
     */
    private $apellido = '';

    /**
     * @var string
     *
     * @ORM\Column(name="usuario", type="string", length=20, nullable=false)
     */
    private $usuario = '';

    /**
     * @var string
     *
     * @ORM\Column(name="clave", type="string", length=50, nullable=false)
     */
    private $clave = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecCrea", type="date", nullable=false)
     */
    private $feccrea;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecCambio", type="date", nullable=true)
     */
    private $feccambio;

    /**
     * @var int
     *
     * @ORM\Column(name="intentos", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $intentos = '0';

    /**
     * @var \EstadosUsuarios
     *
     * @ORM\ManyToOne(targetEntity="EstadosUsuarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estadoUsuario", referencedColumnName="idEstado")
     * })
     */
    private $estadousuario;

    /**
     * @var \Perfiles
     *
     * @ORM\ManyToOne(targetEntity="Perfiles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPerfil", referencedColumnName="idPerfil")
     * })
     */
    private $idperfil;


}
