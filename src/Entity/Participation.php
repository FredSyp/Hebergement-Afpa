<?php

namespace App\Entity;

use Session;
use Doctrine\ORM\Mapping as ORM;

/**
 * Participation
 *
 * @ORM\Table(name="participation", indexes={@ORM\Index(name="participation_financeur0_FK", columns={"id_financeur"}), @ORM\Index(name="participation_session1_FK", columns={"id_session"}), @ORM\Index(name="participation_personne_FK", columns={"id_personne"})})
 * @ORM\Entity
 */
class Participation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_participation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idParticipation;

    /**
     * @var Session
     *
     * @ORM\ManyToOne(targetEntity="Session")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_session", referencedColumnName="id_session")
     * })
     */
    private $idSession;

    /**
     * @var \Financeur
     *
     * @ORM\ManyToOne(targetEntity="Financeur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_financeur", referencedColumnName="id_financeur")
     * })
     */
    private $idFinanceur;

    /**
     * @var \Personne
     *
     * @ORM\ManyToOne(targetEntity="Personne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_personne", referencedColumnName="id_personne")
     * })
     */
    private $idPersonne;


}
