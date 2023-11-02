<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adresse
 *
 * @ORM\Table(name="adresse", indexes={@ORM\Index(name="adresse_ville_FK", columns={"id_ville"}), @ORM\Index(name="adresse_personne0_FK", columns={"id_personne"})})
 * @ORM\Entity
 */
class Adresse
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_adresse", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAdresse;

    /**
     * @var string
     *
     * @ORM\Column(name="lib_adresse", type="string", length=255, nullable=false)
     */
    private $libAdresse;

    /**
     * @var string
     *
     * @ORM\Column(name="complement_adresse", type="string", length=255, nullable=false)
     */
    private $complementAdresse;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_maj_adresse", type="date", nullable=false)
     */
    private $dateMajAdresse;

    /**
     * @var \Personne
     *
     * @ORM\ManyToOne(targetEntity="Personne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_personne", referencedColumnName="id_personne")
     * })
     */
    private $idPersonne;

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
