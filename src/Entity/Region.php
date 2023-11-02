<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Region
 *
 * @ORM\Table(name="region")
 * @ORM\Entity
 */
class Region
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_region", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRegion;

    /**
     * @var string
     *
     * @ORM\Column(name="code_region", type="string", length=150, nullable=false)
     */
    private $codeRegion;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_region", type="string", length=150, nullable=false)
     */
    private $nomRegion;

    /**
     * @var string
     *
     * @ORM\Column(name="slug_region", type="string", length=150, nullable=false)
     */
    private $slugRegion;


}
