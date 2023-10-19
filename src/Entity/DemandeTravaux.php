<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DemandeTravaux
 *
 * @ORM\Table(name="demande_travaux", indexes={@ORM\Index(name="demande_travaux_bail_FK", columns={"id_bail"})})
 * @ORM\Entity(repositoryClass= "App\Repository\DemandeTravauxRepository") 
 */
class DemandeTravaux
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_demande_travaux", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDemandeTravaux;

    /**
     * @var string
     *
     * @ORM\Column(name="description_demande", type="string", length=500, nullable=false)
     */
    private $descriptionDemande;

    /**
     * @var string
     *
     * @ORM\Column(name="img_demande", type="string", length=100, nullable=false)
     */
    private $imgDemande;

    /**
     * @var \Bail
     *
     * @ORM\ManyToOne(targetEntity="Bail")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_bail", referencedColumnName="id_bail")
     * })
     */
    private $idBail;

    public function getIdDemandeTravaux(): ?int
    {
        return $this->idDemandeTravaux;
    }

    public function getDescriptionDemande(): ?string
    {
        return $this->descriptionDemande;
    }

    public function setDescriptionDemande(string $descriptionDemande): static
    {
        $this->descriptionDemande = $descriptionDemande;

        return $this;
    }

    public function getImgDemande(): ?string
    {
        return $this->imgDemande;
    }

    public function setImgDemande(string $imgDemande): static
    {
        $this->imgDemande = $imgDemande;

        return $this;
    }

    public function getIdBail(): ?Bail
    {
        return $this->idBail;
    }

    public function setIdBail(?Bail $idBail): static
    {
        $this->idBail = $idBail;

        return $this;
    }


}
