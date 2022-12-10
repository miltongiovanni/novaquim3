<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Usuarios
 *
 * @ORM\Table(name="usuarios", indexes={@ORM\Index(name="usuarios_perfiles_idPerfil_fk", columns={"idPerfil"}), @ORM\Index(name="usuarios_estados_usuarios_idEstado_fk", columns={"estadoUsuario"})})
 * @ORM\Entity(repositoryClass="App\Repository\UsuariosRepository")
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

    public function getIdusuario(): ?int
    {
        return $this->idusuario;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApellido(): ?string
    {
        return $this->apellido;
    }

    public function setApellido(string $apellido): self
    {
        $this->apellido = $apellido;

        return $this;
    }

    public function getUsuario(): ?string
    {
        return $this->usuario;
    }

    public function setUsuario(string $usuario): self
    {
        $this->usuario = $usuario;

        return $this;
    }

    public function getClave(): ?string
    {
        return $this->clave;
    }

    public function setClave(string $clave): self
    {
        $this->clave = $clave;

        return $this;
    }

    public function getFeccrea(): ?\DateTimeInterface
    {
        return $this->feccrea;
    }

    public function setFeccrea(\DateTimeInterface $feccrea): self
    {
        $this->feccrea = $feccrea;

        return $this;
    }

    public function getFeccambio(): ?\DateTimeInterface
    {
        return $this->feccambio;
    }

    public function setFeccambio(?\DateTimeInterface $feccambio): self
    {
        $this->feccambio = $feccambio;

        return $this;
    }

    public function getIntentos(): ?int
    {
        return $this->intentos;
    }

    public function setIntentos(int $intentos): self
    {
        $this->intentos = $intentos;

        return $this;
    }

    public function getEstadousuario(): ?EstadosUsuarios
    {
        return $this->estadousuario;
    }

    public function setEstadousuario(?EstadosUsuarios $estadousuario): self
    {
        $this->estadousuario = $estadousuario;

        return $this;
    }

    public function getIdperfil(): ?Perfiles
    {
        return $this->idperfil;
    }

    public function setIdperfil(?Perfiles $idperfil): self
    {
        $this->idperfil = $idperfil;

        return $this;
    }


}
