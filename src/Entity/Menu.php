<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Menu
 *
 * @ORM\Table(name="menu")
 * @ORM\Entity
 */
class Menu
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=30, nullable=false)
     */
    private $title = '';

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=60, nullable=false)
     */
    private $link = '';

    /**
     * @var int
     *
     * @ORM\Column(name="parentId", type="bigint", nullable=false)
     */
    private $parentid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="codUser", type="string", length=40, nullable=false, options={"default"="1"})
     */
    private $coduser = '1';


}
