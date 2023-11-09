<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Horaire
 *
 * @ORM\Table(name="horaire", indexes={@ORM\Index(name="horaire_jour_FK", columns={"id_jour"}), @ORM\Index(name="horaire_intendant0_FK", columns={"id_intendant"})})
 * @ORM\Entity(repositoryClass= "App\Repository\HoraireRepository")
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
     * @var \Intendant
     *
     * @ORM\ManyToOne(targetEntity="Intendant")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_intendant", referencedColumnName="id_intendant")
     * })
     */
    private $idIntendant;

    /**
     * @var \Jour
     *
     * @ORM\ManyToOne(targetEntity="Jour")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_jour", referencedColumnName="id_jour")
     * })
     */
    private $idJour;

    public function getIdHoraire(): ?int
    {
        return $this->idHoraire;
    }

    public function getHoraireDebutMatinee(): ?string
    {
        return $this->horaireDebutMatinee;
    }

    public function setHoraireDebutMatinee(string $horaireDebutMatinee): static
    {
        $this->horaireDebutMatinee = $horaireDebutMatinee;

        return $this;
    }

    public function getHoraireFinMatinee(): ?string
    {
        return $this->horaireFinMatinee;
    }

    public function setHoraireFinMatinee(string $horaireFinMatinee): static
    {
        $this->horaireFinMatinee = $horaireFinMatinee;

        return $this;
    }

    public function getHoraireDebutAprem(): ?string
    {
        return $this->horaireDebutAprem;
    }

    public function setHoraireDebutAprem(string $horaireDebutAprem): static
    {
        $this->horaireDebutAprem = $horaireDebutAprem;

        return $this;
    }

    public function getHoraireFinAprem(): ?string
    {
        return $this->horaireFinAprem;
    }

    public function setHoraireFinAprem(string $horaireFinAprem): static
    {
        $this->horaireFinAprem = $horaireFinAprem;

        return $this;
    }

    public function getIdIntendant(): ?Intendant
    {
        return $this->idIntendant;
    }

    public function setIdIntendant(?Intendant $idIntendant): static
    {
        $this->idIntendant = $idIntendant;

        return $this;
    }

    public function getIdJour(): ?Jour
    {
        return $this->idJour;
    }

    public function setIdJour(?Jour $idJour): static
    {
        $this->idJour = $idJour;

        return $this;
    }


}
