<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facture
 *
 * @ORM\Table(name="facture", indexes={@ORM\Index(name="facture_bail_FK", columns={"id_bail"})})
 * @ORM\Entity
 */
class Facture
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_facture", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFacture;

    /**
     * @var string
     *
     * @ORM\Column(name="annee", type="string", length=10, nullable=false)
     */
    private $annee;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_facture", type="string", length=10, nullable=false)
     */
    private $numeroFacture;

    /**
     * @var string
     *
     * @ORM\Column(name="montant_total", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $montantTotal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_facturation", type="date", nullable=false)
     */
    private $dateFacturation;

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
