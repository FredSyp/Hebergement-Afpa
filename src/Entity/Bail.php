<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bail
 *
 * @ORM\Table(name="bail", indexes={@ORM\Index(name="bail_chambre_FK", columns={"id_chambre"}), @ORM\Index(name="bail_personne0_FK", columns={"id_personne"})})
 * @ORM\Entity
 */
class Bail
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_bail", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idBail;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_entree", type="date", nullable=false)
     */
    private $dateEntree;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_sortie", type="date", nullable=false)
     */
    private $dateSortie;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_present", type="boolean", nullable=false)
     */
    private $isPresent;

    /**
     * @var \Chambre
     *
     * @ORM\ManyToOne(targetEntity="Chambre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_chambre", referencedColumnName="id_chambre")
     * })
     */
    private $idChambre;

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
