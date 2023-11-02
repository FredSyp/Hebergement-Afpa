<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InformationCentre
 *
 * @ORM\Table(name="information_centre", indexes={@ORM\Index(name="information_centre_centre_FK", columns={"id_centre"})})
 * @ORM\Entity
 */
class InformationCentre
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_information_centre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idInformationCentre;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_document", type="string", length=255, nullable=false)
     */
    private $nomDocument;

    /**
     * @var string
     *
     * @ORM\Column(name="url_document", type="string", length=255, nullable=false)
     */
    private $urlDocument;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_depo_doc", type="date", nullable=false)
     */
    private $dateDepoDoc;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire_doc", type="text", length=65535, nullable=false)
     */
    private $commentaireDoc;

    /**
     * @var \Centre
     *
     * @ORM\ManyToOne(targetEntity="Centre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_centre", referencedColumnName="id_centre")
     * })
     */
    private $idCentre;


}
