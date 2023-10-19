<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chambre
 *
 * @ORM\Table(name="chambre", indexes={@ORM\Index(name="chambre_etage_FK", columns={"id_etage"})})
 * @ORM\Entity(repositoryClass= "App\Repository\ChambreRepository") 
 */
class Chambre
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_chambre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idChambre;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_chambre", type="string", length=25, nullable=false)
     */
    private $numeroChambre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="numero_clefs", type="string", length=10, nullable=true)
     */
    private $numeroClefs;

    /**
     * @var string|null
     *
     * @ORM\Column(name="badge", type="string", length=50, nullable=true)
     */
    private $badge;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cle_frigo", type="string", length=50, nullable=true)
     */
    private $cleFrigo;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_utilisable", type="boolean", nullable=false)
     */
    private $isUtilisable;

    /**
     * @var \Etage
     *
     * @ORM\ManyToOne(targetEntity="Etage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_etage", referencedColumnName="id_etage")
     * })
     */
    private $idEtage;

    public function getIdChambre(): ?int
    {
        return $this->idChambre;
    }

    public function getNumeroChambre(): ?string
    {
        return $this->numeroChambre;
    }

    public function setNumeroChambre(string $numeroChambre): static
    {
        $this->numeroChambre = $numeroChambre;

        return $this;
    }

    public function getNumeroClefs(): ?string
    {
        return $this->numeroClefs;
    }

    public function setNumeroClefs(?string $numeroClefs): static
    {
        $this->numeroClefs = $numeroClefs;

        return $this;
    }

    public function getBadge(): ?string
    {
        return $this->badge;
    }

    public function setBadge(?string $badge): static
    {
        $this->badge = $badge;

        return $this;
    }

    public function getCleFrigo(): ?string
    {
        return $this->cleFrigo;
    }

    public function setCleFrigo(?string $cleFrigo): static
    {
        $this->cleFrigo = $cleFrigo;

        return $this;
    }

    public function isIsUtilisable(): ?bool
    {
        return $this->isUtilisable;
    }

    public function setIsUtilisable(bool $isUtilisable): static
    {
        $this->isUtilisable = $isUtilisable;

        return $this;
    }

    public function getIdEtage(): ?Etage
    {
        return $this->idEtage;
    }

    public function setIdEtage(?Etage $idEtage): static
    {
        $this->idEtage = $idEtage;

        return $this;
    }


}
