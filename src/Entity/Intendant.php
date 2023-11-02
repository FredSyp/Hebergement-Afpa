<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Intendant
 *
 * @ORM\Table(name="intendant", indexes={@ORM\Index(name="intendant_personne_FK", columns={"id_personne"})})
 * @ORM\Entity
 */
class Intendant
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_intendant", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idIntendant;

    /**
     * @var string
     *
     * @ORM\Column(name="num_tel_intendant", type="string", length=20, nullable=false)
     */
    private $numTelIntendant;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_deb_exercice", type="date", nullable=false)
     */
    private $dateDebExercice;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_deb_fin", type="date", nullable=true)
     */
    private $dateDebFin;

    /**
     * @var \Personne
     *
     * @ORM\ManyToOne(targetEntity="Personne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_personne", referencedColumnName="id_personne")
     * })
     */
    private $idPersonne;


}
