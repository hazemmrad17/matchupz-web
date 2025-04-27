<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20250423214554 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Fix sponsors table schema to match Sponsor entity';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE sponsors CHANGE sponsorPicture sponsor_picture VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE sponsors MODIFY contact VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE sponsors MODIFY pack VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE sponsors CHANGE sponsor_picture sponsorPicture VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE sponsors MODIFY contact VARCHAR(8) NOT NULL');
        $this->addSql('ALTER TABLE sponsors MODIFY pack VARCHAR(50) NOT NULL');
    }
}