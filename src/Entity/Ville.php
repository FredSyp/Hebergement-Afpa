<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ville
 *
 * @ORM\Table(name="ville", indexes={@ORM\Index(name="ville_departement_FK", columns={"id_departement"})})
 * @ORM\Entity
 */
class Ville
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_ville", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idVille;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_ville", type="string", length=150, nullable=false)
     */
    private $nomVille;

    /**
     * @var string
     *
     * @ORM\Column(name="code_postal", type="string", length=5, nullable=false, options={"fixed"=true})
     */
    private $codePostal;

    /**
     * @var string
     *
     * @ORM\Column(name="code_insee", type="string", length=5, nullable=false, options={"fixed"=true})
     */
    private $codeInsee;

    /**
     * @var string
     *
     * @ORM\Column(name="slug_ville", type="string", length=150, nullable=false)
     */
    private $slugVille;

    /**
     * @var string
     *
     * @ORM\Column(name="gps_lat", type="string", length=50, nullable=false)
     */
    private $gpsLat;

    /**
     * @var string
     *
     * @ORM\Column(name="gps_lng", type="string", length=50, nullable=false)
     */
    private $gpsLng;

    /**
     * @var \Departement
     *
     * @ORM\ManyToOne(targetEntity="Departement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_departement", referencedColumnName="id_departement")
     * })
     */
    private $idDepartement;


}
