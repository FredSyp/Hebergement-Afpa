<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paiement
 *
 * @ORM\Table(name="paiement", indexes={@ORM\Index(name="paiement_type_paiement_FK", columns={"id_paiement_type_paiement"}), @ORM\Index(name="paiement_facture0_FK", columns={"id_facture"})})
 * @ORM\Entity
 */
class Paiement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_paiement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPaiement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_de_paiement", type="date", nullable=false)
     */
    private $dateDePaiement;

    /**
     * @var string
     *
     * @ORM\Column(name="montant_paiement", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $montantPaiement;

    /**
     * @var \Facture
     *
     * @ORM\ManyToOne(targetEntity="Facture")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_facture", referencedColumnName="id_facture")
     * })
     */
    private $idFacture;

    /**
     * @var \TypePaiement
     *
     * @ORM\ManyToOne(targetEntity="TypePaiement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_paiement_type_paiement", referencedColumnName="id_paiement")
     * })
     */
    private $idPaiementTypePaiement;


}
