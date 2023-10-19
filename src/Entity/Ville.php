<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ville
 *
 * @ORM\Table(name="ville", indexes={@ORM\Index(name="ville_departement_FK", columns={"id_departement"})})
 * @ORM\Entity(repositoryClass= "App\Repository\VilleRepository") 
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

    public function getIdVille(): ?int
    {
        return $this->idVille;
    }

    public function getNomVille(): ?string
    {
        return $this->nomVille;
    }

    public function setNomVille(string $nomVille): static
    {
        $this->nomVille = $nomVille;

        return $this;
    }

    public function getCodePostal(): ?string
    {
        return $this->codePostal;
    }

    public function setCodePostal(string $codePostal): static
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    public function getCodeInsee(): ?string
    {
        return $this->codeInsee;
    }

    public function setCodeInsee(string $codeInsee): static
    {
        $this->codeInsee = $codeInsee;

        return $this;
    }

    public function getSlugVille(): ?string
    {
        return $this->slugVille;
    }

    public function setSlugVille(string $slugVille): static
    {
        $this->slugVille = $slugVille;

        return $this;
    }

    public function getGpsLat(): ?string
    {
        return $this->gpsLat;
    }

    public function setGpsLat(string $gpsLat): static
    {
        $this->gpsLat = $gpsLat;

        return $this;
    }

    public function getGpsLng(): ?string
    {
        return $this->gpsLng;
    }

    public function setGpsLng(string $gpsLng): static
    {
        $this->gpsLng = $gpsLng;

        return $this;
    }

    public function getIdDepartement(): ?Departement
    {
        return $this->idDepartement;
    }

    public function setIdDepartement(?Departement $idDepartement): static
    {
        $this->idDepartement = $idDepartement;

        return $this;
    }


}
