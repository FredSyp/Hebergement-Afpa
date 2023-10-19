<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Financeur
 *
 * @ORM\Table(name="financeur")
 * @ORM\Entity(repositoryClass= "App\Repository\FinanceurRepository") 
 */
class Financeur
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_financeur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFinanceur;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="logo_financeur", type="string", length=255, nullable=false)
     */
    private $logoFinanceur;

    public function getIdFinanceur(): ?int
    {
        return $this->idFinanceur;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getLogoFinanceur(): ?string
    {
        return $this->logoFinanceur;
    }

    public function setLogoFinanceur(string $logoFinanceur): static
    {
        $this->logoFinanceur = $logoFinanceur;

        return $this;
    }


}
