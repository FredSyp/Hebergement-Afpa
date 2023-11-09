<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Adresse
 *
 * @ORM\Table(name="adresse", indexes={@ORM\Index(name="adresse_ville_FK", columns={"id_ville"}), @ORM\Index(name="adresse_personne0_FK", columns={"id_personne"})})
 * @ORM\Entity(repositoryClass= "App\Repository\AdresseRepository")
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
     * @var \Ville
     *
     * @ORM\ManyToOne(targetEntity="Ville")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ville", referencedColumnName="id_ville")
     * })
     */
    private $idVille;

    /**
     * @var \Personne
     *
     * @ORM\ManyToOne(targetEntity="Personne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_personne", referencedColumnName="id_personne")
     * })
     */
    private $idPersonne;

    public function getIdAdresse(): ?int
    {
        return $this->idAdresse;
    }

    public function getLibAdresse(): ?string
    {
        return $this->libAdresse;
    }

    public function setLibAdresse(string $libAdresse): static
    {
        $this->libAdresse = $libAdresse;

        return $this;
    }

    public function getComplementAdresse(): ?string
    {
        return $this->complementAdresse;
    }

    public function setComplementAdresse(string $complementAdresse): static
    {
        $this->complementAdresse = $complementAdresse;

        return $this;
    }

    public function getDateMajAdresse(): ?\DateTimeInterface
    {
        return $this->dateMajAdresse;
    }

    public function setDateMajAdresse(\DateTimeInterface $dateMajAdresse): static
    {
        $this->dateMajAdresse = $dateMajAdresse;

        return $this;
    }

    public function getIdVille(): ?Ville
    {
        return $this->idVille;
    }

    public function setIdVille(?Ville $idVille): static
    {
        $this->idVille = $idVille;

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
