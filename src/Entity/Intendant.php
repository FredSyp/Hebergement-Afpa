<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Intendant
 *
 * @ORM\Table(name="intendant", indexes={@ORM\Index(name="intendant_personne_FK", columns={"id_personne"})})
 * @ORM\Entity(repositoryClass= "App\Repository\intendantRepository") 
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

    public function getIdIntendant(): ?int
    {
        return $this->idIntendant;
    }

    public function getNumTelIntendant(): ?string
    {
        return $this->numTelIntendant;
    }

    public function setNumTelIntendant(string $numTelIntendant): static
    {
        $this->numTelIntendant = $numTelIntendant;

        return $this;
    }

    public function getDateDebExercice(): ?\DateTimeInterface
    {
        return $this->dateDebExercice;
    }

    public function setDateDebExercice(\DateTimeInterface $dateDebExercice): static
    {
        $this->dateDebExercice = $dateDebExercice;

        return $this;
    }

    public function getDateDebFin(): ?\DateTimeInterface
    {
        return $this->dateDebFin;
    }

    public function setDateDebFin(?\DateTimeInterface $dateDebFin): static
    {
        $this->dateDebFin = $dateDebFin;

        return $this;
    }

    public function getIdPersonne(): ?Personne
    {
        return $this->idPersonne;
    }

    public function setIdPersonne(?Personne $idPersonne): static
    {
        $this->idPersonne = $idPersonne;

        return $this;
    }


}
