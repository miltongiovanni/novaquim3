<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230114124313 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE permission (id INT AUTO_INCREMENT NOT NULL, perfil_id INT NOT NULL, atributo VARCHAR(255) NOT NULL, modulo VARCHAR(255) NOT NULL, fecha_creacion DATETIME NOT NULL, fecha_actualizacion DATETIME DEFAULT NULL, INDEX IDX_E04992AA57291544 (perfil_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE permission ADD CONSTRAINT FK_E04992AA57291544 FOREIGN KEY (perfil_id) REFERENCES perfiles (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE permission DROP FOREIGN KEY FK_E04992AA57291544');
        $this->addSql('DROP TABLE permission');
    }
}
