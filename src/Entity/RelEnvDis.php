<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RelEnvDis
 *
 * @ORM\Table(name="rel_env_dis", indexes={@ORM\Index(name="rel_env_dis_distribucion_idDistribucion_fk", columns={"idDis"}), @ORM\Index(name="rel_env_dis_envases_codEnvase_fk", columns={"idEnv"}), @ORM\Index(name="rel_env_dis_tapas_val_codTapa_fk", columns={"idTapa"})})
 * @ORM\Entity(repositoryClass="App\Repository\RelEnvDisRepository")
 */
class RelEnvDis
{
    /**
     * @var int
     *
     * @ORM\Column(name="idEnvDis", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idenvdis;

    /**
     * @var \Envases
     *
     * @ORM\ManyToOne(targetEntity="Envases")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEnv", referencedColumnName="codEnvase")
     * })
     */
    private $idenv;

    /**
     * @var \TapasVal
     *
     * @ORM\ManyToOne(targetEntity="TapasVal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idTapa", referencedColumnName="codTapa")
     * })
     */
    private $idtapa;

    /**
     * @var \Distribucion
     *
     * @ORM\ManyToOne(targetEntity="Distribucion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idDis", referencedColumnName="idDistribucion")
     * })
     */
    private $iddis;

    public function getIdenvdis(): ?int
    {
        return $this->idenvdis;
    }

    public function getIdenv(): ?Envases
    {
        return $this->idenv;
    }

    public function setIdenv(?Envases $idenv): self
    {
        $this->idenv = $idenv;

        return $this;
    }

    public function getIdtapa(): ?TapasVal
    {
        return $this->idtapa;
    }

    public function setIdtapa(?TapasVal $idtapa): self
    {
        $this->idtapa = $idtapa;

        return $this;
    }

    public function getIddis(): ?Distribucion
    {
        return $this->iddis;
    }

    public function setIddis(?Distribucion $iddis): self
    {
        $this->iddis = $iddis;

        return $this;
    }


}
