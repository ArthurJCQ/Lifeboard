<?php

declare(strict_types=1);

namespace App\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220416174454 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mood ADD owner_id INT NOT NULL');
        $this->addSql('ALTER TABLE mood ADD CONSTRAINT FK_339AEF67E3C61F9 FOREIGN KEY (owner_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_339AEF67E3C61F9 ON mood (owner_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE mood DROP CONSTRAINT FK_339AEF67E3C61F9');
        $this->addSql('DROP INDEX IDX_339AEF67E3C61F9');
        $this->addSql('ALTER TABLE mood DROP owner_id');
    }
}
