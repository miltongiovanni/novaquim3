<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Empleados
 *
 * @ORM\Table(name="empleados")
 * @ORM\Entity
 */
class Empleados
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_empleado", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEmpleado;

    /**
     * @var string
     *
     * @ORM\Column(name="1nom_emp", type="string", length=15, nullable=false)
     */
    private $1nomEmp = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="2nom_emp", type="string", length=15, nullable=true)
     */
    private $2nomEmp = '';

    /**
     * @var string
     *
     * @ORM\Column(name="1apell_emp", type="string", length=15, nullable=false)
     */
    private $1apellEmp = '';

    /**
     * @var string
     *
     * @ORM\Column(name="2apell_emp", type="string", length=15, nullable=false)
     */
    private $2apellEmp = '';

    /**
     * @var int
     *
     * @ORM\Column(name="eps_emp", type="integer", nullable=false)
     */
    private $epsEmp = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="afp_emp", type="integer", nullable=false)
     */
    private $afpEmp = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="caj_comp_emp", type="integer", nullable=false)
     */
    private $cajCompEmp = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="sal_empleado", type="integer", nullable=true)
     */
    private $salEmpleado;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fech_ing_emp", type="date", nullable=true)
     */
    private $fechIngEmp;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fech_sal_emp", type="date", nullable=true)
     */
    private $fechSalEmp;

    /**
     * @var int
     *
     * @ORM\Column(name="est_empleado", type="integer", nullable=false)
     */
    private $estEmpleado = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Area_emp", type="integer", nullable=false)
     */
    private $areaEmp = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="cargo_emp", type="integer", nullable=true)
     */
    private $cargoEmp;

    /**
     * @var int
     *
     * @ORM\Column(name="arl_emp", type="integer", nullable=false)
     */
    private $arlEmp = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="ces_emp", type="integer", nullable=false)
     */
    private $cesEmp = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="cat_arl_emp", type="integer", nullable=true)
     */
    private $catArlEmp;


}
