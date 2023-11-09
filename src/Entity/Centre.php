<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Centre
 *
 * @ORM\Table(name="centre", indexes={@ORM\Index(name="centre_ville_FK", columns={"id_ville"})})
 * @ORM\Entity(repositoryClass= "App\Repository\CentreRepository")
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

    public function getIdCentre(): ?int
    {
        return $this->idCentre;
    }

    public function getNomCentre(): ?string
    {
        return $this->nomCentre;
    }

    public function setNomCentre(string $nomCentre): static
    {
        $this->nomCentre = $nomCentre;

        return $this;
    }

    public function getAdresseCentre(): ?string
    {
        return $this->adresseCentre;
    }

    public function setAdresseCentre(?string $adresseCentre): static
    {
        $this->adresseCentre = $adresseCentre;

        return $this;
    }

    public function getCompAdresseCentre(): ?string
    {
        return $this->compAdresseCentre;
    }

    public function setCompAdresseCentre(?string $compAdresseCentre): static
    {
        $this->compAdresseCentre = $compAdresseCentre;

        return $this;
    }

    public function getSiren(): ?string
    {
        return $this->siren;
    }

    public function setSiren(?string $siren): static
    {
        $this->siren = $siren;

        return $this;
    }

    public function getNumTva(): ?string
    {
        return $this->numTva;
    }

    public function setNumTva(?string $numTva): static
    {
        $this->numTva = $numTva;

        return $this;
    }

    public function getNumTel(): ?string
    {
        return $this->numTel;
    }

    public function setNumTel(?string $numTel): static
    {
        $this->numTel = $numTel;

        return $this;
    }

    public function getFax(): ?string
    {
        return $this->fax;
    }

    public function setFax(string $fax): static
    {
        $this->fax = $fax;

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


}
