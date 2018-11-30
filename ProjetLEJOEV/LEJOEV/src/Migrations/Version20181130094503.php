<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181130094503 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('CREATE TEMPORARY TABLE __temp__utilisateurs AS SELECT id, nom, prenom, age, mental, savoir, physique, sociabilit, moyenne FROM utilisateurs');
        $this->addSql('DROP TABLE utilisateurs');
        $this->addSql('CREATE TABLE utilisateurs (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom INTEGER NOT NULL, prenom VARCHAR(255) NOT NULL COLLATE BINARY, age INTEGER NOT NULL, mental INTEGER NOT NULL, savoir INTEGER NOT NULL, physique INTEGER NOT NULL, moyenne INTEGER NOT NULL, sociabilite INTEGER NOT NULL, comportement INTEGER NOT NULL)');
        $this->addSql('INSERT INTO utilisateurs (id, nom, prenom, age, mental, savoir, physique, sociabilite, moyenne) SELECT id, nom, prenom, age, mental, savoir, physique, sociabilit, moyenne FROM __temp__utilisateurs');
        $this->addSql('DROP TABLE __temp__utilisateurs');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('CREATE TEMPORARY TABLE __temp__utilisateurs AS SELECT id, nom, prenom, age, mental, savoir, physique, moyenne FROM utilisateurs');
        $this->addSql('DROP TABLE utilisateurs');
        $this->addSql('CREATE TABLE utilisateurs (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom INTEGER NOT NULL, prenom VARCHAR(255) NOT NULL, age INTEGER NOT NULL, mental INTEGER NOT NULL, savoir INTEGER NOT NULL, physique INTEGER NOT NULL, moyenne INTEGER NOT NULL, sociabilit INTEGER NOT NULL)');
        $this->addSql('INSERT INTO utilisateurs (id, nom, prenom, age, mental, savoir, physique, moyenne) SELECT id, nom, prenom, age, mental, savoir, physique, moyenne FROM __temp__utilisateurs');
        $this->addSql('DROP TABLE __temp__utilisateurs');
    }
}
