<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230722152900 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE "user" ALTER zipcode TYPE INT');
        $this->addSql('ALTER TABLE "user" ALTER is_deleted TYPE BOOLEAN');
        $this->addSql('ALTER TABLE "user" ALTER is_deleted DROP DEFAULT');
        $this->addSql('ALTER TABLE "user" ALTER is_deleted SET NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE "user" ALTER zipcode TYPE VARCHAR(15)');
        $this->addSql('ALTER TABLE "user" ALTER zipcode DROP DEFAULT');
        $this->addSql('ALTER TABLE "user" ALTER is_deleted TYPE INT');
        $this->addSql('ALTER TABLE "user" ALTER is_deleted DROP DEFAULT');
        $this->addSql('ALTER TABLE "user" ALTER is_deleted DROP NOT NULL');
    }
}
