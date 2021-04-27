<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210427000142 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE voiture (id INT AUTO_INCREMENT NOT NULL, idagence_id INT NOT NULL, matricule VARCHAR(10) NOT NULL, marque VARCHAR(10) NOT NULL, couleur VARCHAR(10) DEFAULT NULL, carburant VARCHAR(10) DEFAULT NULL, nbr_place INT NOT NULL, description VARCHAR(10) DEFAULT NULL, disponibilit� VARCHAR(3) NOT NULL, datemiseencirculation VARCHAR(10) NOT NULL, INDEX IDX_E9E2810FA93E9AF8 (idagence_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE voiture ADD CONSTRAINT FK_E9E2810FA93E9AF8 FOREIGN KEY (idagence_id) REFERENCES agence (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE voiture');
    }
}
