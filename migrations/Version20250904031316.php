<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250904031316 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE paciente (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, apellido VARCHAR(255) NOT NULL, dni INT NOT NULL, nro_afiliado INT NOT NULL, dir VARCHAR(255) DEFAULT NULL, altura VARCHAR(255) DEFAULT NULL, ciudad VARCHAR(255) NOT NULL, telefono VARCHAR(255) DEFAULT NULL, mail VARCHAR(255) DEFAULT NULL, contacto VARCHAR(255) DEFAULT NULL, fecha_alta DATE DEFAULT NULL, oper_alta DATE DEFAULT NULL, fecha_mod DATE DEFAULT NULL, oper_mod DATE DEFAULT NULL, credencial_nro INT NOT NULL, sexo VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE paciente');
    }
}
