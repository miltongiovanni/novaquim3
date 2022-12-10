<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CatClien
 *
 * @ORM\Table(name="cat_clien")
 * @ORM\Entity(repositoryClass="App\Repository\CatClienRepository")
 */
class CatClien
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCatClien", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcatclien = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="desCatClien", type="string", length=36, nullable=false)
     */
    private $descatclien = '';

    public function getIdcatclien(): ?int
    {
        return $this->idcatclien;
    }

    public function getDescatclien(): ?string
    {
        return $this->descatclien;
    }

    public function setDescatclien(string $descatclien): self
    {
        $this->descatclien = $descatclien;

        return $this;
    }


}
