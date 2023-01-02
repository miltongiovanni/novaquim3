<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230102123530 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user ADD perfil_id INT NOT NULL, ADD activo TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D64957291544 FOREIGN KEY (perfil_id) REFERENCES perfiles (id)');
        $this->addSql('CREATE INDEX IDX_8D93D64957291544 ON user (perfil_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D64957291544');
        $this->addSql('DROP INDEX IDX_8D93D64957291544 ON user');
        $this->addSql('ALTER TABLE user DROP perfil_id, DROP activo');
    }
}
