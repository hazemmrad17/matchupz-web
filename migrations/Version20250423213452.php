<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250423213452 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE article (id INT AUTO_INCREMENT NOT NULL, id_article INT NOT NULL, titre VARCHAR(255) NOT NULL, contenu LONGTEXT NOT NULL, id_contrat INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', available_at DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', delivered_at DATETIME DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE articles DROP FOREIGN KEY articles_ibfk_1
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE articles
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE statistiquespostmatch
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE abonnement CHANGE id_abonnement id_abonnement INT AUTO_INCREMENT NOT NULL, CHANGE type_abonnement type_abonnement VARCHAR(50) NOT NULL, CHANGE etat etat VARCHAR(20) NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE abonnement ADD CONSTRAINT FK_351268BB33CE2470 FOREIGN KEY (id_club) REFERENCES club (id_club)
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX id_club ON abonnement
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_351268BB33CE2470 ON abonnement (id_club)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE club CHANGE id_club id_club INT AUTO_INCREMENT NOT NULL, CHANGE photo_url photo_url VARCHAR(255) NOT NULL, ADD PRIMARY KEY (id_club)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE contrats DROP FOREIGN KEY fk1
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE contrats DROP FOREIGN KEY fk1
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE contrats DROP article, CHANGE Titre Titre VARCHAR(255) NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE contrats ADD CONSTRAINT FK_7268396C104C6374 FOREIGN KEY (Id_sponsor) REFERENCES sponsors (Id_sponsor)
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX fk1 ON contrats
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_7268396C104C6374 ON contrats (Id_sponsor)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE contrats ADD CONSTRAINT fk1 FOREIGN KEY (Id_sponsor) REFERENCES sponsors (Id_sponsor) ON UPDATE CASCADE ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE espacesportif CHANGE id_lieu id_lieu INT AUTO_INCREMENT NOT NULL, CHANGE nom_espace nom_espace VARCHAR(255) NOT NULL, CHANGE adresse adresse VARCHAR(255) NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE evaluationphysique DROP INDEX id_joueur, ADD UNIQUE INDEX UNIQ_C8A2D110DB461C28 (id_joueur)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE evaluationphysique CHANGE id_evaluation id_evaluation INT AUTO_INCREMENT NOT NULL, CHANGE date_evaluation date_evaluation DATE DEFAULT NULL, CHANGE niveau_endurance niveau_endurance DOUBLE PRECISION DEFAULT NULL, CHANGE force_physique force_physique DOUBLE PRECISION DEFAULT NULL, CHANGE vitesse vitesse DOUBLE PRECISION DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE evaluationphysique ADD CONSTRAINT FK_C8A2D110DB461C28 FOREIGN KEY (id_joueur) REFERENCES joueur (id_joueur)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE fournisseur CHANGE id_fournisseur id_fournisseur INT AUTO_INCREMENT NOT NULL, CHANGE nom nom VARCHAR(255) NOT NULL, CHANGE email email VARCHAR(255) DEFAULT NULL, CHANGE adresse adresse VARCHAR(255) DEFAULT NULL, CHANGE categorie_produit categorie_produit VARCHAR(255) NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE historiqueclub CHANGE id_historique id_historique INT AUTO_INCREMENT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE historiqueclub ADD CONSTRAINT FK_12E31D9BDB461C28 FOREIGN KEY (id_joueur) REFERENCES joueur (id_joueur)
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX id_joueur ON historiqueclub
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_12E31D9BDB461C28 ON historiqueclub (id_joueur)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE joueur DROP FOREIGN KEY joueur_ibfk_1
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE joueur DROP FOREIGN KEY joueur_ibfk_1
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE joueur DROP nomSport
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE joueur ADD CONSTRAINT FK_FD71A9C5F400AEE2 FOREIGN KEY (id_sport) REFERENCES sport (id_sport)
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX id_sport ON joueur
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_FD71A9C5F400AEE2 ON joueur (id_sport)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE joueur ADD CONSTRAINT joueur_ibfk_1 FOREIGN KEY (id_sport) REFERENCES sport (id_sport) ON UPDATE CASCADE ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE matchs CHANGE idMatch idMatch INT AUTO_INCREMENT NOT NULL, CHANGE C1 C1 VARCHAR(255) NOT NULL, CHANGE C2 C2 VARCHAR(255) NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE materiel ADD barcode VARCHAR(200) NOT NULL, ADD image_data VARCHAR(255) NOT NULL, CHANGE id_materiel id_materiel INT AUTO_INCREMENT NOT NULL, CHANGE id_fournisseur id_fournisseur INT DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE materiel ADD CONSTRAINT FK_18D2B0912E8C07C5 FOREIGN KEY (id_fournisseur) REFERENCES fournisseur (id_fournisseur)
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX fk_fournisseur ON materiel
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_18D2B0912E8C07C5 ON materiel (id_fournisseur)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE performancejoueur CHANGE id_performance id_performance INT AUTO_INCREMENT NOT NULL, CHANGE saison saison VARCHAR(9) NOT NULL, CHANGE buts_marques buts_marques INT NOT NULL, CHANGE passes_decisives passes_decisives INT NOT NULL, CHANGE cartons_jaunes cartons_jaunes INT NOT NULL, CHANGE cartons_rouges cartons_rouges INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE performancejoueur ADD CONSTRAINT FK_2FE9F2C6DB461C28 FOREIGN KEY (id_joueur) REFERENCES joueur (id_joueur)
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX id_joueur ON performancejoueur
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_2FE9F2C6DB461C28 ON performancejoueur (id_joueur)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reservation CHANGE id_reservation id_reservation INT AUTO_INCREMENT NOT NULL, CHANGE id_lieu id_lieu INT DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reservation ADD CONSTRAINT FK_42C84955A477615B FOREIGN KEY (id_lieu) REFERENCES espacesportif (id_lieu)
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX id_lieu ON reservation
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_42C84955A477615B ON reservation (id_lieu)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE schedules CHANGE idSchedule idSchedule INT AUTO_INCREMENT NOT NULL, CHANGE idLieu idLieu INT DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE schedules ADD CONSTRAINT FK_313BDC8E8034B1B7 FOREIGN KEY (idMatchFK) REFERENCES matchs (idMatch)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE schedules ADD CONSTRAINT FK_313BDC8E5CAA23C7 FOREIGN KEY (idLieu) REFERENCES espacesportif (id_lieu)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_313BDC8E5CAA23C7 ON schedules (idLieu)
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX idmatchfk ON schedules
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_313BDC8E8034B1B7 ON schedules (idMatchFK)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sponsors ADD sponsor_picture VARCHAR(255) DEFAULT NULL, DROP sponsorPicture, CHANGE contact contact VARCHAR(255) NOT NULL, CHANGE pack pack VARCHAR(255) NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sport CHANGE id_sport id_sport INT AUTO_INCREMENT NOT NULL, CHANGE description description LONGTEXT DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE transactions DROP FOREIGN KEY transactions_ibfk_1
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE transactions DROP FOREIGN KEY transactions_ibfk_1
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE transactions CHANGE Type type VARCHAR(255) NOT NULL, CHANGE Description description VARCHAR(255) NOT NULL, CHANGE Id_Contrat Id_Contrat INT DEFAULT NULL, CHANGE SommeArgent somme_argent DOUBLE PRECISION NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE transactions ADD CONSTRAINT FK_EAA81A4C3E490AAF FOREIGN KEY (Id_Contrat) REFERENCES contrats (Id_Contrat)
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX id_contrat ON transactions
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_EAA81A4C3E490AAF ON transactions (Id_Contrat)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE transactions ADD CONSTRAINT transactions_ibfk_1 FOREIGN KEY (Id_Contrat) REFERENCES contrats (Id_Contrat) ON UPDATE CASCADE ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE user CHANGE id_user id_user INT AUTO_INCREMENT NOT NULL, CHANGE nom nom VARCHAR(255) NOT NULL, CHANGE prenom prenom VARCHAR(255) NOT NULL, CHANGE email email VARCHAR(255) NOT NULL, CHANGE password password VARCHAR(255) NOT NULL, CHANGE genre genre VARCHAR(255) NOT NULL, CHANGE role role VARCHAR(255) NOT NULL, CHANGE image image VARCHAR(255) NOT NULL, ADD PRIMARY KEY (id_user)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE articles (id_article INT AUTO_INCREMENT NOT NULL, id_contrat INT NOT NULL, titre VARCHAR(250) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, contenu TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, INDEX contrat (id_contrat), PRIMARY KEY(id_article)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE statistiquespostmatch (id_stat_post_match INT NOT NULL, id_joueur INT NOT NULL, id_match INT NOT NULL, buts_marques INT DEFAULT 0, passes_decisives INT DEFAULT 0, distance_parcourue DOUBLE PRECISION NOT NULL, tirs_cadres INT DEFAULT 0, note_match DOUBLE PRECISION NOT NULL) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE articles ADD CONSTRAINT articles_ibfk_1 FOREIGN KEY (id_contrat) REFERENCES contrats (Id_Contrat) ON UPDATE CASCADE ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE article
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE messenger_messages
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE abonnement DROP FOREIGN KEY FK_351268BB33CE2470
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE abonnement DROP FOREIGN KEY FK_351268BB33CE2470
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE abonnement CHANGE id_abonnement id_abonnement INT NOT NULL, CHANGE type_abonnement type_abonnement VARCHAR(255) NOT NULL, CHANGE etat etat VARCHAR(255) NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX idx_351268bb33ce2470 ON abonnement
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX id_club ON abonnement (id_club)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE abonnement ADD CONSTRAINT FK_351268BB33CE2470 FOREIGN KEY (id_club) REFERENCES club (id_club)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE club MODIFY id_club INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX `primary` ON club
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE club CHANGE id_club id_club INT NOT NULL, CHANGE photo_url photo_url VARCHAR(255) DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE contrats DROP FOREIGN KEY FK_7268396C104C6374
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE contrats DROP FOREIGN KEY FK_7268396C104C6374
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE contrats ADD article TEXT NOT NULL, CHANGE Titre Titre VARCHAR(50) NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE contrats ADD CONSTRAINT fk1 FOREIGN KEY (Id_sponsor) REFERENCES sponsors (Id_sponsor) ON UPDATE CASCADE ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX idx_7268396c104c6374 ON contrats
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX fk1 ON contrats (Id_sponsor)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE contrats ADD CONSTRAINT FK_7268396C104C6374 FOREIGN KEY (Id_sponsor) REFERENCES sponsors (Id_sponsor)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE espacesportif CHANGE id_lieu id_lieu INT NOT NULL, CHANGE nom_espace nom_espace VARCHAR(250) NOT NULL, CHANGE adresse adresse VARCHAR(250) NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE evaluationphysique DROP INDEX UNIQ_C8A2D110DB461C28, ADD INDEX id_joueur (id_joueur)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE evaluationphysique DROP FOREIGN KEY FK_C8A2D110DB461C28
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE evaluationphysique CHANGE id_evaluation id_evaluation INT NOT NULL, CHANGE date_evaluation date_evaluation DATE NOT NULL, CHANGE niveau_endurance niveau_endurance DOUBLE PRECISION NOT NULL, CHANGE force_physique force_physique DOUBLE PRECISION NOT NULL, CHANGE vitesse vitesse DOUBLE PRECISION NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE fournisseur CHANGE id_fournisseur id_fournisseur INT NOT NULL, CHANGE nom nom VARCHAR(200) NOT NULL, CHANGE email email VARCHAR(200) NOT NULL, CHANGE adresse adresse VARCHAR(200) NOT NULL, CHANGE categorie_produit categorie_produit VARCHAR(200) NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE historiqueclub DROP FOREIGN KEY FK_12E31D9BDB461C28
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE historiqueclub DROP FOREIGN KEY FK_12E31D9BDB461C28
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE historiqueclub CHANGE id_historique id_historique INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX idx_12e31d9bdb461c28 ON historiqueclub
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX id_joueur ON historiqueclub (id_joueur)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE historiqueclub ADD CONSTRAINT FK_12E31D9BDB461C28 FOREIGN KEY (id_joueur) REFERENCES joueur (id_joueur)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE joueur DROP FOREIGN KEY FK_FD71A9C5F400AEE2
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE joueur DROP FOREIGN KEY FK_FD71A9C5F400AEE2
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE joueur ADD nomSport VARCHAR(255) DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE joueur ADD CONSTRAINT joueur_ibfk_1 FOREIGN KEY (id_sport) REFERENCES sport (id_sport) ON UPDATE CASCADE ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX idx_fd71a9c5f400aee2 ON joueur
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX id_sport ON joueur (id_sport)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE joueur ADD CONSTRAINT FK_FD71A9C5F400AEE2 FOREIGN KEY (id_sport) REFERENCES sport (id_sport)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE matchs CHANGE idMatch idMatch INT NOT NULL, CHANGE C1 C1 VARCHAR(10) NOT NULL, CHANGE C2 C2 VARCHAR(10) NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE materiel DROP FOREIGN KEY FK_18D2B0912E8C07C5
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE materiel DROP FOREIGN KEY FK_18D2B0912E8C07C5
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE materiel DROP barcode, DROP image_data, CHANGE id_materiel id_materiel INT NOT NULL, CHANGE id_fournisseur id_fournisseur INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX idx_18d2b0912e8c07c5 ON materiel
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX FK_FOURNISSEUR ON materiel (id_fournisseur)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE materiel ADD CONSTRAINT FK_18D2B0912E8C07C5 FOREIGN KEY (id_fournisseur) REFERENCES fournisseur (id_fournisseur)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE performancejoueur DROP FOREIGN KEY FK_2FE9F2C6DB461C28
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE performancejoueur DROP FOREIGN KEY FK_2FE9F2C6DB461C28
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE performancejoueur CHANGE id_performance id_performance INT NOT NULL, CHANGE saison saison VARCHAR(20) NOT NULL, CHANGE buts_marques buts_marques INT DEFAULT 0, CHANGE passes_decisives passes_decisives INT DEFAULT 0, CHANGE cartons_jaunes cartons_jaunes INT DEFAULT 0, CHANGE cartons_rouges cartons_rouges INT DEFAULT 0
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX idx_2fe9f2c6db461c28 ON performancejoueur
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX id_joueur ON performancejoueur (id_joueur)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE performancejoueur ADD CONSTRAINT FK_2FE9F2C6DB461C28 FOREIGN KEY (id_joueur) REFERENCES joueur (id_joueur)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955A477615B
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955A477615B
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reservation CHANGE id_reservation id_reservation INT NOT NULL, CHANGE id_lieu id_lieu INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX idx_42c84955a477615b ON reservation
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX id_lieu ON reservation (id_lieu)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reservation ADD CONSTRAINT FK_42C84955A477615B FOREIGN KEY (id_lieu) REFERENCES espacesportif (id_lieu)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE schedules DROP FOREIGN KEY FK_313BDC8E8034B1B7
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE schedules DROP FOREIGN KEY FK_313BDC8E5CAA23C7
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_313BDC8E5CAA23C7 ON schedules
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE schedules DROP FOREIGN KEY FK_313BDC8E8034B1B7
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE schedules CHANGE idSchedule idSchedule INT NOT NULL, CHANGE idLieu idLieu INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX idx_313bdc8e8034b1b7 ON schedules
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idMatchFK ON schedules (idMatchFK)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE schedules ADD CONSTRAINT FK_313BDC8E8034B1B7 FOREIGN KEY (idMatchFK) REFERENCES matchs (idMatch)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sponsors ADD sponsorPicture VARCHAR(250) NOT NULL, DROP sponsor_picture, CHANGE contact contact VARCHAR(8) NOT NULL, CHANGE pack pack VARCHAR(50) NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sport CHANGE id_sport id_sport INT NOT NULL, CHANGE description description TEXT DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE transactions DROP FOREIGN KEY FK_EAA81A4C3E490AAF
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE transactions DROP FOREIGN KEY FK_EAA81A4C3E490AAF
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE transactions CHANGE type Type VARCHAR(50) NOT NULL, CHANGE description Description VARCHAR(250) NOT NULL, CHANGE Id_Contrat Id_Contrat INT NOT NULL, CHANGE somme_argent SommeArgent DOUBLE PRECISION NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE transactions ADD CONSTRAINT transactions_ibfk_1 FOREIGN KEY (Id_Contrat) REFERENCES contrats (Id_Contrat) ON UPDATE CASCADE ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX idx_eaa81a4c3e490aaf ON transactions
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX Id_Contrat ON transactions (Id_Contrat)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE transactions ADD CONSTRAINT FK_EAA81A4C3E490AAF FOREIGN KEY (Id_Contrat) REFERENCES contrats (Id_Contrat)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE user MODIFY id_user INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX `primary` ON user
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE user CHANGE id_user id_user INT NOT NULL, CHANGE nom nom VARCHAR(30) NOT NULL, CHANGE prenom prenom VARCHAR(30) NOT NULL, CHANGE email email VARCHAR(50) NOT NULL, CHANGE password password VARCHAR(30) NOT NULL, CHANGE genre genre VARCHAR(10) NOT NULL, CHANGE role role VARCHAR(40) NOT NULL, CHANGE image image VARCHAR(1000) NOT NULL
        SQL);
    }
}
