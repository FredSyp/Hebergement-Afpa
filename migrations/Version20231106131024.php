<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231106131024 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE absence (id_absence INT AUTO_INCREMENT NOT NULL, id_bail INT DEFAULT NULL, date_deb_abs DATE NOT NULL, date_fin_abs DATE NOT NULL, motif_absence VARCHAR(500) NOT NULL, INDEX absence_bail_FK (id_bail), PRIMARY KEY(id_absence)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE adresse (id_adresse INT AUTO_INCREMENT NOT NULL, id_ville INT DEFAULT NULL, id_personne INT DEFAULT NULL, lib_adresse VARCHAR(255) NOT NULL, complement_adresse VARCHAR(255) NOT NULL, date_maj_adresse DATE NOT NULL, INDEX adresse_ville_FK (id_ville), INDEX adresse_personne0_FK (id_personne), PRIMARY KEY(id_adresse)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE avertissement (id_avertissement INT AUTO_INCREMENT NOT NULL, id_incident INT DEFAULT NULL, date_avertissement DATE NOT NULL, INDEX avertissement_incident_FK (id_incident), PRIMARY KEY(id_avertissement)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bail (id_bail INT AUTO_INCREMENT NOT NULL, id_personne INT DEFAULT NULL, id_chambre INT DEFAULT NULL, date_entree DATE NOT NULL, date_sortie DATE NOT NULL, is_present TINYINT(1) NOT NULL, INDEX bail_personne0_FK (id_personne), INDEX bail_chambre_FK (id_chambre), PRIMARY KEY(id_bail)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE caution (id_caution INT AUTO_INCREMENT NOT NULL, id_bail INT DEFAULT NULL, id_paiement INT DEFAULT NULL, date_depot DATE NOT NULL, date_restitution DATE DEFAULT NULL, montant_caution NUMERIC(10, 0) NOT NULL, INDEX caution_type_paiement0_FK (id_paiement), INDEX caution_bail_FK (id_bail), PRIMARY KEY(id_caution)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE centre (id_centre INT AUTO_INCREMENT NOT NULL, id_ville INT DEFAULT NULL, nom_centre VARCHAR(255) NOT NULL, adresse_centre VARCHAR(255) DEFAULT NULL, comp_adresse_centre VARCHAR(255) DEFAULT NULL, siren VARCHAR(25) DEFAULT NULL, num_tva VARCHAR(50) DEFAULT NULL, num_tel VARCHAR(50) DEFAULT NULL, fax VARCHAR(50) NOT NULL, INDEX centre_ville_FK (id_ville), PRIMARY KEY(id_centre)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE chambre (id_chambre INT AUTO_INCREMENT NOT NULL, id_etage INT DEFAULT NULL, numero_chambre VARCHAR(25) NOT NULL, numero_clefs VARCHAR(10) DEFAULT NULL, badge VARCHAR(50) DEFAULT NULL, cle_frigo VARCHAR(50) DEFAULT NULL, is_utilisable TINYINT(1) NOT NULL, INDEX chambre_etage_FK (id_etage), PRIMARY KEY(id_chambre)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE civilite (id_civilite INT AUTO_INCREMENT NOT NULL, lib_civilite VARCHAR(255) NOT NULL, PRIMARY KEY(id_civilite)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE demande_travaux (id_demande_travaux INT AUTO_INCREMENT NOT NULL, id_bail INT DEFAULT NULL, description_demande VARCHAR(500) NOT NULL, img_demande VARCHAR(100) NOT NULL, INDEX demande_travaux_bail_FK (id_bail), PRIMARY KEY(id_demande_travaux)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE departement (id_departement INT AUTO_INCREMENT NOT NULL, id_region INT DEFAULT NULL, code_departement VARCHAR(3) NOT NULL, nom_departement VARCHAR(150) NOT NULL, slug_departement VARCHAR(150) NOT NULL, INDEX departement_region_FK (id_region), PRIMARY KEY(id_departement)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE domaine (id_domaine INT AUTO_INCREMENT NOT NULL, lib_domaine VARCHAR(255) NOT NULL, grn VARCHAR(20) NOT NULL, PRIMARY KEY(id_domaine)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE etage (id_etage INT AUTO_INCREMENT NOT NULL, numero_etage VARCHAR(10) NOT NULL, reserver_femme TINYINT(1) NOT NULL, PRIMARY KEY(id_etage)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE etat_des_lieux (id_etat_lieux INT AUTO_INCREMENT NOT NULL, id_type_etat_lieux INT DEFAULT NULL, id_bail INT DEFAULT NULL, date DATE NOT NULL, commentaire TEXT NOT NULL, INDEX etat_des_lieux_bail_FK (id_bail), INDEX etat_des_lieux_type_etat_lieux0_FK (id_type_etat_lieux), PRIMARY KEY(id_etat_lieux)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE facture (id_facture INT AUTO_INCREMENT NOT NULL, id_bail INT DEFAULT NULL, annee VARCHAR(10) NOT NULL, numero_facture VARCHAR(10) NOT NULL, montant_total NUMERIC(10, 0) NOT NULL, date_facturation DATE NOT NULL, INDEX facture_bail_FK (id_bail), PRIMARY KEY(id_facture)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE financeur (id_financeur INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, logo_financeur VARCHAR(255) NOT NULL, PRIMARY KEY(id_financeur)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE formations (id_formation INT AUTO_INCREMENT NOT NULL, id_domaine INT DEFAULT NULL, nom_formation VARCHAR(255) NOT NULL, INDEX formations_domaine_FK (id_domaine), PRIMARY KEY(id_formation)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE horaire (id_horaire INT AUTO_INCREMENT NOT NULL, id_intendant INT DEFAULT NULL, id_jour INT DEFAULT NULL, horaire_debut_matinee VARCHAR(50) NOT NULL, horaire_fin_matinee VARCHAR(50) NOT NULL, horaire_debut_aprem VARCHAR(50) NOT NULL, horaire_fin_aprem VARCHAR(50) NOT NULL, INDEX horaire_intendant0_FK (id_intendant), INDEX horaire_jour_FK (id_jour), PRIMARY KEY(id_horaire)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE image_incident (id_image_incident INT AUTO_INCREMENT NOT NULL, id_incident INT DEFAULT NULL, nom_image_incident VARCHAR(255) NOT NULL, INDEX image_incident_incident_FK (id_incident), PRIMARY KEY(id_image_incident)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE incident (id_incident INT AUTO_INCREMENT NOT NULL, id_bail INT DEFAULT NULL, id_type_incident INT DEFAULT NULL, date_incident DATE NOT NULL, commentaire TEXT NOT NULL, INDEX incident_bail_FK (id_bail), INDEX incident_type_incident0_FK (id_type_incident), PRIMARY KEY(id_incident)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE information_centre (id_information_centre INT AUTO_INCREMENT NOT NULL, id_centre INT DEFAULT NULL, nom_document VARCHAR(255) NOT NULL, url_document VARCHAR(255) NOT NULL, date_depo_doc DATE NOT NULL, commentaire_doc TEXT NOT NULL, INDEX information_centre_centre_FK (id_centre), PRIMARY KEY(id_information_centre)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE intendant (id_intendant INT AUTO_INCREMENT NOT NULL, id_personne INT DEFAULT NULL, num_tel_intendant VARCHAR(20) NOT NULL, date_deb_exercice DATE NOT NULL, date_deb_fin DATE DEFAULT NULL, INDEX intendant_personne_FK (id_personne), PRIMARY KEY(id_intendant)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE jour (id_jour INT AUTO_INCREMENT NOT NULL, lib_jour VARCHAR(25) NOT NULL, PRIMARY KEY(id_jour)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messages (id_message INT AUTO_INCREMENT NOT NULL, id_personne INT DEFAULT NULL, contenu LONGTEXT NOT NULL, date DATETIME NOT NULL, INDEX messages_personne_FK (id_personne), PRIMARY KEY(id_message)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE paiement (id_paiement INT AUTO_INCREMENT NOT NULL, id_paiement_type_paiement INT DEFAULT NULL, id_facture INT DEFAULT NULL, date_de_paiement DATE NOT NULL, montant_paiement NUMERIC(10, 0) NOT NULL, INDEX paiement_type_paiement_FK (id_paiement_type_paiement), INDEX paiement_facture0_FK (id_facture), PRIMARY KEY(id_paiement)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE parametre (id_parametre INT AUTO_INCREMENT NOT NULL, id_centre INT DEFAULT NULL, loyer NUMERIC(10, 0) NOT NULL, caution NUMERIC(10, 0) NOT NULL, INDEX parametre_centre_FK (id_centre), PRIMARY KEY(id_parametre)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE participation (id_participation INT AUTO_INCREMENT NOT NULL, id_personne INT DEFAULT NULL, id_session INT DEFAULT NULL, id_financeur INT DEFAULT NULL, INDEX participation_personne_FK (id_personne), INDEX participation_financeur0_FK (id_financeur), INDEX participation_session1_FK (id_session), PRIMARY KEY(id_participation)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE personne (id_personne INT AUTO_INCREMENT NOT NULL, id_role_personne INT DEFAULT NULL, id_civilite INT DEFAULT NULL, numero_beneficiaire VARCHAR(50) DEFAULT NULL, mdp VARCHAR(150) DEFAULT NULL, nom VARCHAR(150) DEFAULT NULL, prenom VARCHAR(150) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, num_telephone VARCHAR(20) DEFAULT NULL, date_naissance DATE DEFAULT NULL, lieu_naissance VARCHAR(255) DEFAULT NULL, is_blacklisted TINYINT(1) DEFAULT NULL, code_roles VARCHAR(25) DEFAULT NULL, ip_inscription VARCHAR(50) DEFAULT NULL, date_inscription DATE DEFAULT NULL, tracker_inscription VARCHAR(255) DEFAULT NULL, date_maj_pers DATE DEFAULT NULL, UNIQUE INDEX UNIQ_FCEC9EFE7927C74 (email), INDEX personne_role_personne_FK (id_role_personne), INDEX personne_civilite0_FK (id_civilite), PRIMARY KEY(id_personne)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE personne_a_contacter (id_personne_contact INT AUTO_INCREMENT NOT NULL, id_personne INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, num_tel_contact VARCHAR(20) NOT NULL, INDEX personne_a_contacter_personne_FK (id_personne), PRIMARY KEY(id_personne_contact)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE plan (id_plan INT AUTO_INCREMENT NOT NULL, id_chambre INT DEFAULT NULL, img_plan VARCHAR(255) NOT NULL, INDEX plan_chambre_FK (id_chambre), PRIMARY KEY(id_plan)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE region (id_region INT AUTO_INCREMENT NOT NULL, code_region VARCHAR(150) NOT NULL, nom_region VARCHAR(150) NOT NULL, slug_region VARCHAR(150) NOT NULL, PRIMARY KEY(id_region)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rendez_vous (id_rendez_vous INT AUTO_INCREMENT NOT NULL, id_intendant INT DEFAULT NULL, id_personne INT DEFAULT NULL, date_rdv DATE NOT NULL, heure_rdv VARCHAR(255) NOT NULL, motif_rdv VARCHAR(500) NOT NULL, INDEX rendez_vous_personne0_FK (id_personne), INDEX rendez_vous_intendant_FK (id_intendant), PRIMARY KEY(id_rendez_vous)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE role_personne (id_role_personne INT AUTO_INCREMENT NOT NULL, lib_role_personne VARCHAR(50) NOT NULL, PRIMARY KEY(id_role_personne)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE session (id_session INT AUTO_INCREMENT NOT NULL, id_formation INT DEFAULT NULL, date_entree DATE NOT NULL, date_sortie DATE NOT NULL, numero_offre VARCHAR(20) NOT NULL, INDEX session_formations_FK (id_formation), PRIMARY KEY(id_session)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE travaux (id_travaux INT AUTO_INCREMENT NOT NULL, id_chambre INT DEFAULT NULL, id_travaux_type_travaux INT DEFAULT NULL, date_debut DATE NOT NULL, date_fin DATE NOT NULL, commentaire_travaux TEXT NOT NULL, INDEX travaux_type_travaux_FK (id_travaux_type_travaux), INDEX travaux_chambre0_FK (id_chambre), PRIMARY KEY(id_travaux)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_etat_lieux (id_type_etat_lieux INT AUTO_INCREMENT NOT NULL, nom_etat_lieux VARCHAR(100) NOT NULL, PRIMARY KEY(id_type_etat_lieux)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_incident (id_type_incident INT AUTO_INCREMENT NOT NULL, nom_type_incident VARCHAR(255) NOT NULL, PRIMARY KEY(id_type_incident)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_paiement (id_paiement INT AUTO_INCREMENT NOT NULL, nom_paiement VARCHAR(50) NOT NULL, PRIMARY KEY(id_paiement)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_travaux (id_travaux INT AUTO_INCREMENT NOT NULL, nom_travaux VARCHAR(255) NOT NULL, PRIMARY KEY(id_travaux)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vacance (id_vacance INT AUTO_INCREMENT NOT NULL, id_session INT DEFAULT NULL, date_deb_vacance DATE NOT NULL, date_fin_vacance DATE NOT NULL, INDEX vacance_session_FK (id_session), PRIMARY KEY(id_vacance)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ville (id_ville INT AUTO_INCREMENT NOT NULL, id_departement INT DEFAULT NULL, nom_ville VARCHAR(150) NOT NULL, code_postal CHAR(5) NOT NULL, code_insee CHAR(5) NOT NULL, slug_ville VARCHAR(150) NOT NULL, gps_lat VARCHAR(50) NOT NULL, gps_lng VARCHAR(50) NOT NULL, INDEX ville_departement_FK (id_departement), PRIMARY KEY(id_ville)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE absence ADD CONSTRAINT FK_765AE0C98265A01C FOREIGN KEY (id_bail) REFERENCES bail (id_bail)');
        $this->addSql('ALTER TABLE adresse ADD CONSTRAINT FK_C35F0816AD4698F3 FOREIGN KEY (id_ville) REFERENCES ville (id_ville)');
        $this->addSql('ALTER TABLE adresse ADD CONSTRAINT FK_C35F08165F15257A FOREIGN KEY (id_personne) REFERENCES personne (id_personne)');
        $this->addSql('ALTER TABLE avertissement ADD CONSTRAINT FK_8C10BF266DD84D8F FOREIGN KEY (id_incident) REFERENCES incident (id_incident)');
        $this->addSql('ALTER TABLE bail ADD CONSTRAINT FK_945BC1E5F15257A FOREIGN KEY (id_personne) REFERENCES personne (id_personne)');
        $this->addSql('ALTER TABLE bail ADD CONSTRAINT FK_945BC1E1B944D8F FOREIGN KEY (id_chambre) REFERENCES chambre (id_chambre)');
        $this->addSql('ALTER TABLE caution ADD CONSTRAINT FK_3E9CC6158265A01C FOREIGN KEY (id_bail) REFERENCES bail (id_bail)');
        $this->addSql('ALTER TABLE caution ADD CONSTRAINT FK_3E9CC615E107968B FOREIGN KEY (id_paiement) REFERENCES type_paiement (id_paiement)');
        $this->addSql('ALTER TABLE centre ADD CONSTRAINT FK_C6A0EA75AD4698F3 FOREIGN KEY (id_ville) REFERENCES ville (id_ville)');
        $this->addSql('ALTER TABLE chambre ADD CONSTRAINT FK_C509E4FFC359B07B FOREIGN KEY (id_etage) REFERENCES etage (id_etage)');
        $this->addSql('ALTER TABLE demande_travaux ADD CONSTRAINT FK_5CD348348265A01C FOREIGN KEY (id_bail) REFERENCES bail (id_bail)');
        $this->addSql('ALTER TABLE departement ADD CONSTRAINT FK_C1765B632955449B FOREIGN KEY (id_region) REFERENCES region (id_region)');
        $this->addSql('ALTER TABLE etat_des_lieux ADD CONSTRAINT FK_F72103122C8E91BA FOREIGN KEY (id_type_etat_lieux) REFERENCES type_etat_lieux (id_type_etat_lieux)');
        $this->addSql('ALTER TABLE etat_des_lieux ADD CONSTRAINT FK_F72103128265A01C FOREIGN KEY (id_bail) REFERENCES bail (id_bail)');
        $this->addSql('ALTER TABLE facture ADD CONSTRAINT FK_FE8664108265A01C FOREIGN KEY (id_bail) REFERENCES bail (id_bail)');
        $this->addSql('ALTER TABLE formations ADD CONSTRAINT FK_40902137A632A3BC FOREIGN KEY (id_domaine) REFERENCES domaine (id_domaine)');
        $this->addSql('ALTER TABLE horaire ADD CONSTRAINT FK_BBC83DB664C6BC4D FOREIGN KEY (id_intendant) REFERENCES intendant (id_intendant)');
        $this->addSql('ALTER TABLE horaire ADD CONSTRAINT FK_BBC83DB65137C5C7 FOREIGN KEY (id_jour) REFERENCES jour (id_jour)');
        $this->addSql('ALTER TABLE image_incident ADD CONSTRAINT FK_B2F32FB26DD84D8F FOREIGN KEY (id_incident) REFERENCES incident (id_incident)');
        $this->addSql('ALTER TABLE incident ADD CONSTRAINT FK_3D03A11A8265A01C FOREIGN KEY (id_bail) REFERENCES bail (id_bail)');
        $this->addSql('ALTER TABLE incident ADD CONSTRAINT FK_3D03A11A4ED45783 FOREIGN KEY (id_type_incident) REFERENCES type_incident (id_type_incident)');
        $this->addSql('ALTER TABLE information_centre ADD CONSTRAINT FK_40101F65E0975F98 FOREIGN KEY (id_centre) REFERENCES centre (id_centre)');
        $this->addSql('ALTER TABLE intendant ADD CONSTRAINT FK_E4F3006A5F15257A FOREIGN KEY (id_personne) REFERENCES personne (id_personne)');
        $this->addSql('ALTER TABLE messages ADD CONSTRAINT FK_DB021E965F15257A FOREIGN KEY (id_personne) REFERENCES personne (id_personne)');
        $this->addSql('ALTER TABLE paiement ADD CONSTRAINT FK_B1DC7A1E3993003B FOREIGN KEY (id_paiement_type_paiement) REFERENCES type_paiement (id_paiement)');
        $this->addSql('ALTER TABLE paiement ADD CONSTRAINT FK_B1DC7A1E201BCD60 FOREIGN KEY (id_facture) REFERENCES facture (id_facture)');
        $this->addSql('ALTER TABLE parametre ADD CONSTRAINT FK_ACC79041E0975F98 FOREIGN KEY (id_centre) REFERENCES centre (id_centre)');
        $this->addSql('ALTER TABLE participation ADD CONSTRAINT FK_AB55E24F5F15257A FOREIGN KEY (id_personne) REFERENCES personne (id_personne)');
        $this->addSql('ALTER TABLE participation ADD CONSTRAINT FK_AB55E24FED97CA4 FOREIGN KEY (id_session) REFERENCES session (id_session)');
        $this->addSql('ALTER TABLE participation ADD CONSTRAINT FK_AB55E24F330E05D9 FOREIGN KEY (id_financeur) REFERENCES financeur (id_financeur)');
        $this->addSql('ALTER TABLE personne ADD CONSTRAINT FK_FCEC9EF9B35FEBB FOREIGN KEY (id_role_personne) REFERENCES role_personne (id_role_personne)');
        $this->addSql('ALTER TABLE personne ADD CONSTRAINT FK_FCEC9EF7C97F743 FOREIGN KEY (id_civilite) REFERENCES civilite (id_civilite)');
        $this->addSql('ALTER TABLE personne_a_contacter ADD CONSTRAINT FK_EAF2D6F75F15257A FOREIGN KEY (id_personne) REFERENCES personne (id_personne)');
        $this->addSql('ALTER TABLE plan ADD CONSTRAINT FK_DD5A5B7D1B944D8F FOREIGN KEY (id_chambre) REFERENCES chambre (id_chambre)');
        $this->addSql('ALTER TABLE rendez_vous ADD CONSTRAINT FK_65E8AA0A64C6BC4D FOREIGN KEY (id_intendant) REFERENCES intendant (id_intendant)');
        $this->addSql('ALTER TABLE rendez_vous ADD CONSTRAINT FK_65E8AA0A5F15257A FOREIGN KEY (id_personne) REFERENCES personne (id_personne)');
        $this->addSql('ALTER TABLE session ADD CONSTRAINT FK_D044D5D4C0759D98 FOREIGN KEY (id_formation) REFERENCES formations (id_formation)');
        $this->addSql('ALTER TABLE travaux ADD CONSTRAINT FK_6C24F39B1B944D8F FOREIGN KEY (id_chambre) REFERENCES chambre (id_chambre)');
        $this->addSql('ALTER TABLE travaux ADD CONSTRAINT FK_6C24F39B2F871742 FOREIGN KEY (id_travaux_type_travaux) REFERENCES type_travaux (id_travaux)');
        $this->addSql('ALTER TABLE vacance ADD CONSTRAINT FK_BD3530F2ED97CA4 FOREIGN KEY (id_session) REFERENCES session (id_session)');
        $this->addSql('ALTER TABLE ville ADD CONSTRAINT FK_43C3D9C3D9649694 FOREIGN KEY (id_departement) REFERENCES departement (id_departement)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE absence DROP FOREIGN KEY FK_765AE0C98265A01C');
        $this->addSql('ALTER TABLE adresse DROP FOREIGN KEY FK_C35F0816AD4698F3');
        $this->addSql('ALTER TABLE adresse DROP FOREIGN KEY FK_C35F08165F15257A');
        $this->addSql('ALTER TABLE avertissement DROP FOREIGN KEY FK_8C10BF266DD84D8F');
        $this->addSql('ALTER TABLE bail DROP FOREIGN KEY FK_945BC1E5F15257A');
        $this->addSql('ALTER TABLE bail DROP FOREIGN KEY FK_945BC1E1B944D8F');
        $this->addSql('ALTER TABLE caution DROP FOREIGN KEY FK_3E9CC6158265A01C');
        $this->addSql('ALTER TABLE caution DROP FOREIGN KEY FK_3E9CC615E107968B');
        $this->addSql('ALTER TABLE centre DROP FOREIGN KEY FK_C6A0EA75AD4698F3');
        $this->addSql('ALTER TABLE chambre DROP FOREIGN KEY FK_C509E4FFC359B07B');
        $this->addSql('ALTER TABLE demande_travaux DROP FOREIGN KEY FK_5CD348348265A01C');
        $this->addSql('ALTER TABLE departement DROP FOREIGN KEY FK_C1765B632955449B');
        $this->addSql('ALTER TABLE etat_des_lieux DROP FOREIGN KEY FK_F72103122C8E91BA');
        $this->addSql('ALTER TABLE etat_des_lieux DROP FOREIGN KEY FK_F72103128265A01C');
        $this->addSql('ALTER TABLE facture DROP FOREIGN KEY FK_FE8664108265A01C');
        $this->addSql('ALTER TABLE formations DROP FOREIGN KEY FK_40902137A632A3BC');
        $this->addSql('ALTER TABLE horaire DROP FOREIGN KEY FK_BBC83DB664C6BC4D');
        $this->addSql('ALTER TABLE horaire DROP FOREIGN KEY FK_BBC83DB65137C5C7');
        $this->addSql('ALTER TABLE image_incident DROP FOREIGN KEY FK_B2F32FB26DD84D8F');
        $this->addSql('ALTER TABLE incident DROP FOREIGN KEY FK_3D03A11A8265A01C');
        $this->addSql('ALTER TABLE incident DROP FOREIGN KEY FK_3D03A11A4ED45783');
        $this->addSql('ALTER TABLE information_centre DROP FOREIGN KEY FK_40101F65E0975F98');
        $this->addSql('ALTER TABLE intendant DROP FOREIGN KEY FK_E4F3006A5F15257A');
        $this->addSql('ALTER TABLE messages DROP FOREIGN KEY FK_DB021E965F15257A');
        $this->addSql('ALTER TABLE paiement DROP FOREIGN KEY FK_B1DC7A1E3993003B');
        $this->addSql('ALTER TABLE paiement DROP FOREIGN KEY FK_B1DC7A1E201BCD60');
        $this->addSql('ALTER TABLE parametre DROP FOREIGN KEY FK_ACC79041E0975F98');
        $this->addSql('ALTER TABLE participation DROP FOREIGN KEY FK_AB55E24F5F15257A');
        $this->addSql('ALTER TABLE participation DROP FOREIGN KEY FK_AB55E24FED97CA4');
        $this->addSql('ALTER TABLE participation DROP FOREIGN KEY FK_AB55E24F330E05D9');
        $this->addSql('ALTER TABLE personne DROP FOREIGN KEY FK_FCEC9EF9B35FEBB');
        $this->addSql('ALTER TABLE personne DROP FOREIGN KEY FK_FCEC9EF7C97F743');
        $this->addSql('ALTER TABLE personne_a_contacter DROP FOREIGN KEY FK_EAF2D6F75F15257A');
        $this->addSql('ALTER TABLE plan DROP FOREIGN KEY FK_DD5A5B7D1B944D8F');
        $this->addSql('ALTER TABLE rendez_vous DROP FOREIGN KEY FK_65E8AA0A64C6BC4D');
        $this->addSql('ALTER TABLE rendez_vous DROP FOREIGN KEY FK_65E8AA0A5F15257A');
        $this->addSql('ALTER TABLE session DROP FOREIGN KEY FK_D044D5D4C0759D98');
        $this->addSql('ALTER TABLE travaux DROP FOREIGN KEY FK_6C24F39B1B944D8F');
        $this->addSql('ALTER TABLE travaux DROP FOREIGN KEY FK_6C24F39B2F871742');
        $this->addSql('ALTER TABLE vacance DROP FOREIGN KEY FK_BD3530F2ED97CA4');
        $this->addSql('ALTER TABLE ville DROP FOREIGN KEY FK_43C3D9C3D9649694');
        $this->addSql('DROP TABLE absence');
        $this->addSql('DROP TABLE adresse');
        $this->addSql('DROP TABLE avertissement');
        $this->addSql('DROP TABLE bail');
        $this->addSql('DROP TABLE caution');
        $this->addSql('DROP TABLE centre');
        $this->addSql('DROP TABLE chambre');
        $this->addSql('DROP TABLE civilite');
        $this->addSql('DROP TABLE demande_travaux');
        $this->addSql('DROP TABLE departement');
        $this->addSql('DROP TABLE domaine');
        $this->addSql('DROP TABLE etage');
        $this->addSql('DROP TABLE etat_des_lieux');
        $this->addSql('DROP TABLE facture');
        $this->addSql('DROP TABLE financeur');
        $this->addSql('DROP TABLE formations');
        $this->addSql('DROP TABLE horaire');
        $this->addSql('DROP TABLE image_incident');
        $this->addSql('DROP TABLE incident');
        $this->addSql('DROP TABLE information_centre');
        $this->addSql('DROP TABLE intendant');
        $this->addSql('DROP TABLE jour');
        $this->addSql('DROP TABLE messages');
        $this->addSql('DROP TABLE paiement');
        $this->addSql('DROP TABLE parametre');
        $this->addSql('DROP TABLE participation');
        $this->addSql('DROP TABLE personne');
        $this->addSql('DROP TABLE personne_a_contacter');
        $this->addSql('DROP TABLE plan');
        $this->addSql('DROP TABLE region');
        $this->addSql('DROP TABLE rendez_vous');
        $this->addSql('DROP TABLE role_personne');
        $this->addSql('DROP TABLE session');
        $this->addSql('DROP TABLE travaux');
        $this->addSql('DROP TABLE type_etat_lieux');
        $this->addSql('DROP TABLE type_incident');
        $this->addSql('DROP TABLE type_paiement');
        $this->addSql('DROP TABLE type_travaux');
        $this->addSql('DROP TABLE vacance');
        $this->addSql('DROP TABLE ville');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
