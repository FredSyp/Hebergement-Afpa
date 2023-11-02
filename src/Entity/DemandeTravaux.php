<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DemandeTravaux
 *
 * @ORM\Table(name="demande_travaux", indexes={@ORM\Index(name="demande_travaux_bail_FK", columns={"id_bail"})})
 * @ORM\Entity
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


}
