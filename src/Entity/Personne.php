<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


/**
 * Personne
 *
 * @ORM\Table(name="personne", indexes={@ORM\Index(name="personne_role_personne_FK", columns={"id_role_personne"}), @ORM\Index(name="personne_civilite0_FK", columns={"id_civilite"})})
 * @ORM\Entity(repositoryClass= "App\Repository\PersonneRepository") 
 */
class Personne 
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_personne", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPersonne;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_beneficiaire", type="string", length=50, nullable=true)
     */
    private $numeroBeneficiaire;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp", type="string", length=150, nullable=false)
     */
    private $mdp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom", type="string", length=150, nullable=false)
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prenom", type="string", length=150, nullable=false)
     */
    private $prenom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", unique=true, length=255, nullable=false)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="num_telephone", type="string", length=20, nullable=false)
     */
    private $numTelephone;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_naissance", type="date", nullable=false)
     */
    private $dateNaissance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lieu_naissance", type="string", length=255, nullable=false)
     */
    private $lieuNaissance;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_blacklisted", type="boolean", nullable=true)
     */
    private $isBlacklisted;

    /**
     * @var string
     *
     * @ORM\Column(name="code_roles", type="string", length=25, nullable=false)
     */
    private $codeRoles;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ip_inscription", type="string", length=50, nullable=true)
     */
    private $ipInscription;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_inscription", type="date", nullable=false)
     */
    private $dateInscription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tracker_inscription", type="string", length=255, nullable=true)
     */
    private $trackerInscription;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_maj_pers", type="date", nullable=true)
     */
    private $dateMajPers;

    /**
     * @var \RolePersonne
     *
     * @ORM\ManyToOne(targetEntity="RolePersonne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_role_personne", referencedColumnName="id_role_personne")
     * })
     */
    private $idRolePersonne;

    /**
     * @var \Civilite
     *
     * @ORM\ManyToOne(targetEntity="Civilite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_civilite", referencedColumnName="id_civilite")
     * })
     */
    private $idCivilite;

    public function getIdPersonne(): ?int
    {
        return $this->idPersonne;
    }

    public function getNumeroBeneficiaire(): ?string
    {
        return $this->numeroBeneficiaire;
    }

    public function setNumeroBeneficiaire(string $numeroBeneficiaire): static
    {
        $this->numeroBeneficiaire = $numeroBeneficiaire;

        return $this;
    }

    public function getMdp(): ?string
    {
        return $this->mdp;
    }

    public function setMdp(string $mdp): static
    {
        $this->mdp = $mdp;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getNumTelephone(): ?string
    {
        return $this->numTelephone;
    }

    public function setNumTelephone(?string $numTelephone): static
    {
        $this->numTelephone = $numTelephone;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(?\DateTimeInterface $dateNaissance): static
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getLieuNaissance(): ?string
    {
        return $this->lieuNaissance;
    }

    public function setLieuNaissance(?string $lieuNaissance): static
    {
        $this->lieuNaissance = $lieuNaissance;

        return $this;
    }

    public function isIsBlacklisted(): ?bool
    {
        return $this->isBlacklisted;
    }

    public function setIsBlacklisted(?bool $isBlacklisted): static
    {
        $this->isBlacklisted = $isBlacklisted;

        return $this;
    }

    public function getCodeRoles()
    {
        return array('ROLE_USER');
    }

    public function setCodeRoles( $codeRoles): static
    {
        $this->codeRoles = $codeRoles;

        return $this;
    }

    public function getIpInscription(): ?string
    {
        return $this->ipInscription;
    }

    public function setIpInscription(?string $ipInscription): static
    {
        $this->ipInscription = $ipInscription;

        return $this;
    }

    public function getDateInscription(): ?\DateTimeInterface
    {
        return $this->dateInscription;
    }

    public function setDateInscription(\DateTimeInterface $dateInscription): static
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }

    public function getTrackerInscription(): ?string
    {
        return $this->trackerInscription;
    }

    public function setTrackerInscription(?string $trackerInscription): static
    {
        $this->trackerInscription = $trackerInscription;

        return $this;
    }

    public function getDateMajPers(): ?\DateTimeInterface
    {
        return $this->dateMajPers;
    }

    public function setDateMajPers(?\DateTimeInterface $dateMajPers): static
    {
        $this->dateMajPers = $dateMajPers;

        return $this;
    }

    public function getIdRolePersonne(): ?RolePersonne
    {
        return $this->idRolePersonne;
    }

    public function setIdRolePersonne(?RolePersonne $idRolePersonne): static
    {
        $this->idRolePersonne = $idRolePersonne;

        return $this;
    }

    public function getIdCivilite(): ?Civilite
    {
        return $this->idCivilite;
    }

    public function setIdCivilite(?Civilite $idCivilite): static
    {
        $this->idCivilite = $idCivilite;

        return $this;
    }


}
