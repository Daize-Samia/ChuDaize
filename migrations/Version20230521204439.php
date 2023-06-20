<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230521204439 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE observation (id INT AUTO_INCREMENT NOT NULL, patient_id INT DEFAULT NULL, adresse VARCHAR(255) NOT NULL, agemere VARCHAR(255) NOT NULL, agepere VARCHAR(255) NOT NULL, grossesse VARCHAR(255) NOT NULL, parite INT NOT NULL, nombre_fratrie INT NOT NULL, grossesse_s VARCHAR(255) NOT NULL, serologie VARCHAR(255) NOT NULL, deroulement VARCHAR(255) NOT NULL, option_deroulement VARCHAR(255) DEFAULT NULL, agegestationnel VARCHAR(255) NOT NULL, accouchement VARCHAR(255) NOT NULL, pn VARCHAR(255) NOT NULL, allaitement VARCHAR(255) NOT NULL, developpementpsychomoteur VARCHAR(255) NOT NULL, irr VARCHAR(255) NOT NULL, chirurgicaux VARCHAR(255) NOT NULL, consanguinite VARCHAR(255) NOT NULL, option_consanguinite VARCHAR(255) DEFAULT NULL, cardfamille VARCHAR(255) NOT NULL, atcdmaternels VARCHAR(255) NOT NULL, option_atcd VARCHAR(255) DEFAULT NULL, pmedic VARCHAR(255) NOT NULL, option_medicament VARCHAR(255) DEFAULT NULL, motif_hosp_consul VARCHAR(255) NOT NULL, age_app_sym VARCHAR(255) NOT NULL, dyspnee VARCHAR(255) NOT NULL, sueurs_aleffort VARCHAR(255) NOT NULL, cyanose VARCHAR(255) NOT NULL, malaise VARCHAR(255) NOT NULL, diffalimentaire VARCHAR(255) NOT NULL, stagnationponderale VARCHAR(255) NOT NULL, syncope VARCHAR(255) NOT NULL, palpitation VARCHAR(255) NOT NULL, signesrespiratoires VARCHAR(255) NOT NULL, autres VARCHAR(255) DEFAULT NULL, poids DOUBLE PRECISION NOT NULL, taille DOUBLE PRECISION NOT NULL, pc DOUBLE PRECISION NOT NULL, temperature DOUBLE PRECISION NOT NULL, ta DOUBLE PRECISION NOT NULL, fr DOUBLE PRECISION NOT NULL, fc DOUBLE PRECISION NOT NULL, alaireambiante DOUBLE PRECISION NOT NULL, souso2 DOUBLE PRECISION NOT NULL, dysmorphie VARCHAR(255) NOT NULL, option_dysmorphie VARCHAR(255) DEFAULT NULL, souffle VARCHAR(255) NOT NULL, pouls_peripherique_percues VARCHAR(255) NOT NULL, option_ppp VARCHAR(255) DEFAULT NULL, eclat_b2 VARCHAR(255) NOT NULL, bruit_galop VARCHAR(255) NOT NULL, option_bruit VARCHAR(255) DEFAULT NULL, hippocratisme_digital VARCHAR(255) NOT NULL, deformation_thoracique VARCHAR(255) NOT NULL, resteexamenclinique VARCHAR(255) NOT NULL, option_rec VARCHAR(255) DEFAULT NULL, ecg VARCHAR(255) NOT NULL, radio_thoracique VARCHAR(255) NOT NULL, echographie_cardiaque VARCHAR(255) NOT NULL, cat VARCHAR(255) NOT NULL, s_insuf_card LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', UNIQUE INDEX UNIQ_C576DBE06B899279 (patient_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        //$this->addSql('CREATE TABLE patient (id INT AUTO_INCREMENT NOT NULL, i_p VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, sex VARCHAR(255) NOT NULL, date_de_naiss DATE NOT NULL, date_de_consultation DATE NOT NULL, tele VARCHAR(255) NOT NULL, province VARCHAR(255) NOT NULL, categorie VARCHAR(255) NOT NULL, maladie VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
       // $this->addSql('CREATE TABLE `user` (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, password VARCHAR(255) NOT NULL, roles JSON NOT NULL, firstname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, position VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE observation ADD CONSTRAINT FK_C576DBE06B899279 FOREIGN KEY (patient_id) REFERENCES patient (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE observation DROP FOREIGN KEY FK_C576DBE06B899279');
        $this->addSql('DROP TABLE observation');
      //  $this->addSql('DROP TABLE patient');
     //   $this->addSql('DROP TABLE `user`');
    }
}
