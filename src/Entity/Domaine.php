<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Domaine
 *
 * @ORM\Table(name="domaine")
 * @ORM\Entity
 */
class Domaine
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_domaine", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDomaine;

    /**
     * @var string
     *
     * @ORM\Column(name="lib_domaine", type="string", length=255, nullable=false)
     */
    private $libDomaine;

    /**
     * @var string
     *
     * @ORM\Column(name="grn", type="string", length=20, nullable=false)
     */
    private $grn;


}
