<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220414104017 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE commande (id INT AUTO_INCREMENT NOT NULL, date VARCHAR(255) NOT NULL, statut VARCHAR(255) NOT NULL, total VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ligne_commande (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, quantite VARCHAR(255) NOT NULL, total VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE categorie DROP nom');
        $this->addSql('ALTER TABLE produit ADD titre VARCHAR(255) NOT NULL, ADD prix NUMERIC(10, 2) NOT NULL, ADD image VARCHAR(255) NOT NULL, CHANGE categorie description VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE user ADD nom VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE commande');
        $this->addSql('DROP TABLE ligne_commande');
        $this->addSql('ALTER TABLE categorie ADD nom VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE produit ADD categorie VARCHAR(255) NOT NULL, DROP description, DROP titre, DROP prix, DROP image');
        $this->addSql('ALTER TABLE user DROP nom');
    }
}
