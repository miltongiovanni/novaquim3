<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CatDis
 *
 * @ORM\Table(name="cat_dis")
 * @ORM\Entity(repositoryClass="App\Repository\CatDisRepository")
 */
class CatDis
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCatDis", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcatdis = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="catDis", type="string", length=20, nullable=false)
     */
    private $catdis = '';

    public function getIdcatdis(): ?int
    {
        return $this->idcatdis;
    }

    public function getCatdis(): ?string
    {
        return $this->catdis;
    }

    public function setCatdis(string $catdis): self
    {
        $this->catdis = $catdis;

        return $this;
    }


}
