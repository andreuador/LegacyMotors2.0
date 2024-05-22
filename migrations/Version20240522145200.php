<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240522145200 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation ADD reservation_order_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955102A8F2C FOREIGN KEY (reservation_order_id) REFERENCES `order` (id)');
        $this->addSql('CREATE INDEX IDX_42C84955102A8F2C ON reservation (reservation_order_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955102A8F2C');
        $this->addSql('DROP INDEX IDX_42C84955102A8F2C ON reservation');
        $this->addSql('ALTER TABLE reservation DROP reservation_order_id');
    }
}
