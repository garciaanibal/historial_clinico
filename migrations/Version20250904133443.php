<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250904133443 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE historia_clinica CHANGE oper_alta oper_alta VARCHAR(255) DEFAULT NULL, CHANGE oper_mod oper_mod VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE obra_social CHANGE oper_alta oper_alta VARCHAR(255) DEFAULT NULL, CHANGE oper_mod oper_mod VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE paciente CHANGE oper_alta oper_alta VARCHAR(255) DEFAULT NULL, CHANGE oper_mod oper_mod VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE historia_clinica CHANGE oper_alta oper_alta DATE NOT NULL, CHANGE oper_mod oper_mod DATE NOT NULL');
        $this->addSql('ALTER TABLE obra_social CHANGE oper_alta oper_alta DATE NOT NULL, CHANGE oper_mod oper_mod DATE NOT NULL');
        $this->addSql('ALTER TABLE paciente CHANGE oper_alta oper_alta DATE DEFAULT NULL, CHANGE oper_mod oper_mod DATE DEFAULT NULL');
    }
}
