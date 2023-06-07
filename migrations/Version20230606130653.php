<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230606130653 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE zgloszenie (id INT AUTO_INCREMENT NOT NULL, kategoria_id INT DEFAULT NULL, dodane_przez_id INT DEFAULT NULL, nazwa VARCHAR(255) NOT NULL, czas_dodania DATETIME NOT NULL, opis VARCHAR(255) NOT NULL, INDEX IDX_39DB3B91359B0684 (kategoria_id), INDEX IDX_39DB3B9191ACAE68 (dodane_przez_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE zgloszenie ADD CONSTRAINT FK_39DB3B91359B0684 FOREIGN KEY (kategoria_id) REFERENCES kategoria (id)');
        $this->addSql('ALTER TABLE zgloszenie ADD CONSTRAINT FK_39DB3B9191ACAE68 FOREIGN KEY (dodane_przez_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE zgloszenie DROP FOREIGN KEY FK_39DB3B91359B0684');
        $this->addSql('ALTER TABLE zgloszenie DROP FOREIGN KEY FK_39DB3B9191ACAE68');
        $this->addSql('DROP TABLE zgloszenie');
    }
}
