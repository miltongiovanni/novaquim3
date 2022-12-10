<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetKit
 *
 * @ORM\Table(name="det_kit", indexes={@ORM\Index(name="IDX_8245319079DC859F", columns={"idKit"})})
 * @ORM\Entity(repositoryClass="App\Repository\DetKitRepository")
 */
class DetKit
{
    /**
     * @var int
     *
     * @ORM\Column(name="codProducto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codproducto = '0';

    /**
     * @var \Kit
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Kit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idKit", referencedColumnName="idKit")
     * })
     */
    private $idkit;

    public function getCodproducto(): ?int
    {
        return $this->codproducto;
    }

    public function getIdkit(): ?Kit
    {
        return $this->idkit;
    }

    public function setIdkit(?Kit $idkit): self
    {
        $this->idkit = $idkit;

        return $this;
    }


}
