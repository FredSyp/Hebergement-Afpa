<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formations
 *
 * @ORM\Table(name="formations", indexes={@ORM\Index(name="formations_domaine_FK", columns={"id_domaine"})})
 * @ORM\Entity
 */
class Formations
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_formation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFormation;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_formation", type="string", length=255, nullable=false)
     */
    private $nomFormation;

    /**
     * @var \Domaine
     *
     * @ORM\ManyToOne(targetEntity="Domaine")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_domaine", referencedColumnName="id_domaine")
     * })
     */
    private $idDomaine;


}
