<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Horaire
 *
 * @ORM\Table(name="horaire", indexes={@ORM\Index(name="horaire_jour_FK", columns={"id_jour"}), @ORM\Index(name="horaire_intendant0_FK", columns={"id_intendant"})})
 * @ORM\Entity
 */
class Horaire
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_horaire", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idHoraire;

    /**
     * @var string
     *
     * @ORM\Column(name="horaire_debut_matinee", type="string", length=50, nullable=false)
     */
    private $horaireDebutMatinee;

    /**
     * @var string
     *
     * @ORM\Column(name="horaire_fin_matinee", type="string", length=50, nullable=false)
     */
    private $horaireFinMatinee;

    /**
     * @var string
     *
     * @ORM\Column(name="horaire_debut_aprem", type="string", length=50, nullable=false)
     */
    private $horaireDebutAprem;

    /**
     * @var string
     *
     * @ORM\Column(name="horaire_fin_aprem", type="string", length=50, nullable=false)
     */
    private $horaireFinAprem;

    /**
     * @var \Jour
     *
     * @ORM\ManyToOne(targetEntity="Jour")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_jour", referencedColumnName="id_jour")
     * })
     */
    private $idJour;

    /**
     * @var \Intendant
     *
     * @ORM\ManyToOne(targetEntity="Intendant")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_intendant", referencedColumnName="id_intendant")
     * })
     */
    private $idIntendant;


}
