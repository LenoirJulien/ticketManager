<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181219134436 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE temps_ticket (id INT AUTO_INCREMENT NOT NULL, id_ticket_id INT DEFAULT NULL, INDEX IDX_788009A6F035FBF5 (id_ticket_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE temps_ticket ADD CONSTRAINT FK_788009A6F035FBF5 FOREIGN KEY (id_ticket_id) REFERENCES ticket (id)');
        $this->addSql('DROP TABLE temps_tickets');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE temps_tickets (id INT AUTO_INCREMENT NOT NULL, id_ticket_id INT DEFAULT NULL, INDEX IDX_24C349DFF035FBF5 (id_ticket_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE temps_tickets ADD CONSTRAINT FK_24C349DFF035FBF5 FOREIGN KEY (id_ticket_id) REFERENCES ticket (id)');
        $this->addSql('DROP TABLE temps_ticket');
    }
}
