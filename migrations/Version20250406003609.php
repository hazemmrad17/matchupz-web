<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250406003609 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', available_at DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', delivered_at DATETIME DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE contrats DROP FOREIGN KEY fk1
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE materiel DROP FOREIGN KEY FK_FOURNISSEUR
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reservation DROP FOREIGN KEY fk_reservation_lieu
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE schedules DROP FOREIGN KEY schedules_ibfk_1
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE transactions DROP FOREIGN KEY transactions_ibfk_1
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE abonnement
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE contrats
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE espacesportif
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE fournisseur
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE matchs
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE materiel
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE reservation
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE schedules
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sponsors
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE transactions
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE user
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE club CHANGE id_club id_club INT AUTO_INCREMENT NOT NULL, CHANGE photo_url photo_url VARCHAR(255) NOT NULL, ADD PRIMARY KEY (id_club)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE evaluationphysique DROP FOREIGN KEY evaluationphysique_ibfk_1
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE evaluationphysique CHANGE id_joueur id_joueur INT DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX id_joueur ON evaluationphysique
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_C8A2D110DB461C28 ON evaluationphysique (id_joueur)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE evaluationphysique ADD CONSTRAINT evaluationphysique_ibfk_1 FOREIGN KEY (id_joueur) REFERENCES joueur (id_joueur)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE historiqueclub DROP FOREIGN KEY historiqueclub_ibfk_1
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE historiqueclub DROP FOREIGN KEY historiqueclub_ibfk_1
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE historiqueclub ADD id_club INT DEFAULT NULL, DROP nom_club, CHANGE id_joueur id_joueur INT DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE historiqueclub ADD CONSTRAINT FK_12E31D9BDB461C28 FOREIGN KEY (id_joueur) REFERENCES joueur (idJoueur)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE historiqueclub ADD CONSTRAINT FK_12E31D9B33CE2470 FOREIGN KEY (id_club) REFERENCES club (idClub)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_12E31D9B33CE2470 ON historiqueclub (id_club)
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX id_joueur ON historiqueclub
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_12E31D9BDB461C28 ON historiqueclub (id_joueur)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE historiqueclub ADD CONSTRAINT historiqueclub_ibfk_1 FOREIGN KEY (id_joueur) REFERENCES joueur (id_joueur)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE joueur DROP FOREIGN KEY fk_sport
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE joueur DROP FOREIGN KEY fk_sport
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE joueur DROP nomSport, CHANGE id_sport id_sport INT NOT NULL, CHANGE nom nom VARCHAR(50) NOT NULL, CHANGE prenom prenom VARCHAR(50) NOT NULL, CHANGE poste poste VARCHAR(50) DEFAULT NULL, CHANGE taille taille DOUBLE PRECISION DEFAULT NULL, CHANGE poids poids DOUBLE PRECISION DEFAULT NULL, CHANGE statut statut VARCHAR(50) DEFAULT NULL, CHANGE email email VARCHAR(100) DEFAULT NULL, CHANGE telephone telephone VARCHAR(20) DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE joueur ADD CONSTRAINT FK_FD71A9C5F400AEE2 FOREIGN KEY (id_sport) REFERENCES sport (id_sport)
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX fk_sport ON joueur
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_FD71A9C5F400AEE2 ON joueur (id_sport)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE joueur ADD CONSTRAINT fk_sport FOREIGN KEY (id_sport) REFERENCES sport (id_sport) ON DELETE SET NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE performancejoueur DROP FOREIGN KEY performancejoueur_ibfk_1
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE performancejoueur CHANGE nombre_matches nombre_matches INT DEFAULT NULL, CHANGE minutes_jouees minutes_jouees INT DEFAULT NULL, CHANGE buts_marques buts_marques INT DEFAULT NULL, CHANGE passes_decisives passes_decisives INT DEFAULT NULL, CHANGE cartons_jaunes cartons_jaunes INT DEFAULT NULL, CHANGE cartons_rouges cartons_rouges INT DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX id_joueur ON performancejoueur
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_2FE9F2C6DB461C28 ON performancejoueur (id_joueur)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE performancejoueur ADD CONSTRAINT performancejoueur_ibfk_1 FOREIGN KEY (id_joueur) REFERENCES joueur (id_joueur)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sport CHANGE description description LONGTEXT DEFAULT NULL
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE abonnement (id_abonnement INT AUTO_INCREMENT NOT NULL, id_club INT NOT NULL, type_abonnement VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, date_debut DATE NOT NULL, date_fin DATE NOT NULL, tarif NUMERIC(10, 0) NOT NULL, etat VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, INDEX id_club (id_club), PRIMARY KEY(id_abonnement)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE contrats (Id_Contrat INT AUTO_INCREMENT NOT NULL, Titre VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, DateDebut DATE NOT NULL, DateFin DATE NOT NULL, Montant DOUBLE PRECISION NOT NULL, Id_sponsor INT NOT NULL, INDEX fk1 (Id_sponsor), PRIMARY KEY(Id_Contrat)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE espacesportif (id_lieu INT AUTO_INCREMENT NOT NULL, nom_espace VARCHAR(250) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, adresse VARCHAR(250) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, categorie VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, capacite DOUBLE PRECISION NOT NULL, PRIMARY KEY(id_lieu)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE fournisseur (id_fournisseur INT AUTO_INCREMENT NOT NULL, nom VARCHAR(200) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, email VARCHAR(200) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, adresse VARCHAR(200) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, categorie_produit VARCHAR(200) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, PRIMARY KEY(id_fournisseur)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE matchs (idMatch INT AUTO_INCREMENT NOT NULL, C1 VARCHAR(10) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, C2 VARCHAR(10) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, SportType VARCHAR(255) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, PRIMARY KEY(idMatch)) DEFAULT CHARACTER SET latin1 COLLATE `latin1_swedish_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE materiel (id_materiel INT AUTO_INCREMENT NOT NULL, id_fournisseur INT NOT NULL, nom VARCHAR(200) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, type VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, quantite INT NOT NULL, etat VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, prix_unitaire DOUBLE PRECISION NOT NULL, INDEX FK_FOURNISSEUR (id_fournisseur), PRIMARY KEY(id_materiel)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE reservation (id_reservation INT AUTO_INCREMENT NOT NULL, id_lieu INT NOT NULL, date_reservee DATETIME NOT NULL, motif VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, status VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, INDEX id_lieu (id_lieu), PRIMARY KEY(id_reservation)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE schedules (idSchedule INT AUTO_INCREMENT NOT NULL, dateMatch DATE NOT NULL, startTime TIME NOT NULL, endTime TIME NOT NULL, idMatchFK INT NOT NULL, idLieu INT NOT NULL, INDEX idMatchFK (idMatchFK), PRIMARY KEY(idSchedule)) DEFAULT CHARACTER SET latin1 COLLATE `latin1_swedish_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sponsors (Id_sponsor INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, contact VARCHAR(8) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, pack VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, PRIMARY KEY(Id_sponsor)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE transactions (Id_Transaction INT AUTO_INCREMENT NOT NULL, Type VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, SommeArgent DOUBLE PRECISION NOT NULL, Date DATE NOT NULL, Description VARCHAR(250) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, Id_Contrat INT NOT NULL, INDEX Id_Contrat (Id_Contrat), PRIMARY KEY(Id_Transaction)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE user (id_user INT AUTO_INCREMENT NOT NULL, nom VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, prenom VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, email VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, password VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, num_telephone INT NOT NULL, date_de_naissance DATE NOT NULL, genre VARCHAR(10) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, role VARCHAR(40) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, image VARCHAR(1000) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, reset_code INT NOT NULL, PRIMARY KEY(id_user)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE contrats ADD CONSTRAINT fk1 FOREIGN KEY (Id_sponsor) REFERENCES sponsors (Id_sponsor) ON UPDATE CASCADE ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE materiel ADD CONSTRAINT FK_FOURNISSEUR FOREIGN KEY (id_fournisseur) REFERENCES fournisseur (id_fournisseur)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reservation ADD CONSTRAINT fk_reservation_lieu FOREIGN KEY (id_lieu) REFERENCES espacesportif (id_lieu) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE schedules ADD CONSTRAINT schedules_ibfk_1 FOREIGN KEY (idMatchFK) REFERENCES matchs (idMatch) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE transactions ADD CONSTRAINT transactions_ibfk_1 FOREIGN KEY (Id_Contrat) REFERENCES contrats (Id_Contrat) ON UPDATE CASCADE ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE messenger_messages
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
            ALTER TABLE evaluationphysique DROP FOREIGN KEY FK_C8A2D110DB461C28
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE evaluationphysique CHANGE id_joueur id_joueur INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX idx_c8a2d110db461c28 ON evaluationphysique
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX id_joueur ON evaluationphysique (id_joueur)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE evaluationphysique ADD CONSTRAINT FK_C8A2D110DB461C28 FOREIGN KEY (id_joueur) REFERENCES joueur (id_joueur)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE historiqueclub DROP FOREIGN KEY FK_12E31D9BDB461C28
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE historiqueclub DROP FOREIGN KEY FK_12E31D9B33CE2470
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_12E31D9B33CE2470 ON historiqueclub
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE historiqueclub DROP FOREIGN KEY FK_12E31D9BDB461C28
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE historiqueclub ADD nom_club VARCHAR(100) NOT NULL, DROP id_club, CHANGE id_joueur id_joueur INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE historiqueclub ADD CONSTRAINT historiqueclub_ibfk_1 FOREIGN KEY (id_joueur) REFERENCES joueur (id_joueur)
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX idx_12e31d9bdb461c28 ON historiqueclub
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX id_joueur ON historiqueclub (id_joueur)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE historiqueclub ADD CONSTRAINT FK_12E31D9BDB461C28 FOREIGN KEY (id_joueur) REFERENCES joueur (idJoueur)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE joueur DROP FOREIGN KEY FK_FD71A9C5F400AEE2
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE joueur DROP FOREIGN KEY FK_FD71A9C5F400AEE2
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE joueur ADD nomSport VARCHAR(255) DEFAULT NULL, CHANGE id_sport id_sport INT DEFAULT NULL, CHANGE nom nom VARCHAR(255) NOT NULL, CHANGE prenom prenom VARCHAR(255) NOT NULL, CHANGE poste poste VARCHAR(255) NOT NULL, CHANGE taille taille DOUBLE PRECISION NOT NULL, CHANGE poids poids DOUBLE PRECISION NOT NULL, CHANGE statut statut VARCHAR(255) NOT NULL, CHANGE email email VARCHAR(255) NOT NULL, CHANGE telephone telephone VARCHAR(255) NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE joueur ADD CONSTRAINT fk_sport FOREIGN KEY (id_sport) REFERENCES sport (id_sport) ON DELETE SET NULL
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX idx_fd71a9c5f400aee2 ON joueur
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX fk_sport ON joueur (id_sport)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE joueur ADD CONSTRAINT FK_FD71A9C5F400AEE2 FOREIGN KEY (id_sport) REFERENCES sport (id_sport)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE performancejoueur DROP FOREIGN KEY FK_2FE9F2C6DB461C28
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE performancejoueur CHANGE nombre_matches nombre_matches INT NOT NULL, CHANGE minutes_jouees minutes_jouees INT NOT NULL, CHANGE buts_marques buts_marques INT DEFAULT 0, CHANGE passes_decisives passes_decisives INT DEFAULT 0, CHANGE cartons_jaunes cartons_jaunes INT DEFAULT 0, CHANGE cartons_rouges cartons_rouges INT DEFAULT 0
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
            ALTER TABLE sport CHANGE description description TEXT DEFAULT NULL
        SQL);
    }
}
