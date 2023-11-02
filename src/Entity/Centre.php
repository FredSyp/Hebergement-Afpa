<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Centre
 *
 * @ORM\Table(name="centre", indexes={@ORM\Index(name="centre_ville_FK", columns={"id_ville"})})
 * @ORM\Entity
 */
class Centre
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_centre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCentre;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_centre", type="string", length=255, nullable=false)
     */
    private $nomCentre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adresse_centre", type="string", length=255, nullable=true)
     */
    private $adresseCentre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comp_adresse_centre", type="string", length=255, nullable=true)
     */
    private $compAdresseCentre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="siren", type="string", length=25, nullable=true)
     */
    private $siren;

    /**
     * @var string|null
     *
     * @ORM\Column(name="num_tva", type="string", length=50, nullable=true)
     */
    private $numTva;

    /**
     * @var string|null
     *
     * @ORM\Column(name="num_tel", type="string", length=50, nullable=true)
     */
    private $numTel;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=50, nullable=false)
     */
    private $fax;

    /**
     * @var \Ville
     *
     * @ORM\ManyToOne(targetEntity="Ville")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ville", referencedColumnName="id_ville")
     * })
     */
    private $idVille;


}
