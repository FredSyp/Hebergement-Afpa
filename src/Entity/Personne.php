<?php

namespace App\Entity;

use Civilite;
use Doctrine\ORM\Mapping as ORM;

/**
 * Personne
 *
 * @ORM\Table(name="personne", indexes={@ORM\Index(name="personne_role_personne_FK", columns={"id_role_personne"}), @ORM\Index(name="personne_civilite0_FK", columns={"id_civilite"})})
 * @ORM\Entity
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
     * @ORM\Column(name="numero_beneficiaire", type="string", length=50, nullable=false)
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
     * @ORM\Column(name="nom", type="string", length=150, nullable=true)
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prenom", type="string", length=150, nullable=true)
     */
    private $prenom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="num_telephone", type="string", length=20, nullable=true)
     */
    private $numTelephone;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_naissance", type="date", nullable=true)
     */
    private $dateNaissance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lieu_naissance", type="string", length=255, nullable=true)
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
     * @var Civilite
     *
     * @ORM\ManyToOne(targetEntity="Civilite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_civilite", referencedColumnName="id_civilite")
     * })
     */
    private $idCivilite;

    /**
     * @var \RolePersonne
     *
     * @ORM\ManyToOne(targetEntity="RolePersonne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_role_personne", referencedColumnName="id_role_personne")
     * })
     */
    private $idRolePersonne;


}
