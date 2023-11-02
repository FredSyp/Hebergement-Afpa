<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departement
 *
 * @ORM\Table(name="departement", indexes={@ORM\Index(name="departement_region_FK", columns={"id_region"})})
 * @ORM\Entity
 */
class Departement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_departement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDepartement;

    /**
     * @var string
     *
     * @ORM\Column(name="code_departement", type="string", length=3, nullable=false)
     */
    private $codeDepartement;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_departement", type="string", length=150, nullable=false)
     */
    private $nomDepartement;

    /**
     * @var string
     *
     * @ORM\Column(name="slug_departement", type="string", length=150, nullable=false)
     */
    private $slugDepartement;

    /**
     * @var \Region
     *
     * @ORM\ManyToOne(targetEntity="Region")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_region", referencedColumnName="id_region")
     * })
     */
    private $idRegion;


}
