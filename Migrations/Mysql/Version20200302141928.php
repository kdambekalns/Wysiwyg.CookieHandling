<?php
namespace Neos\Flow\Persistence\Doctrine\Migrations;

use Doctrine\DBAL\Exception as DBALException;
use Doctrine\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\Exception\MigrationException;

/**
 * Auto-generated Migration: Please modify to your needs! This block will be used as the migration description if getDescription() is not used.
 */
class Version20200302141928 extends AbstractMigration
{

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return '';
    }

    /**
     * @param Schema $schema
     * @return void
     * @throws MigrationException|DBALException
     */
    public function up(Schema $schema): void
    {
        // this up() migration is autogenerated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on "mysql".');

        $this->addSql('CREATE TABLE wysiwyg_cookiehandling_domain_model_loggedcookie (persistence_object_identifier VARCHAR(40) NOT NULL, cookiename VARCHAR(255) NOT NULL, domain VARCHAR(255) DEFAULT NULL, counter INT NOT NULL, lastmodified DATETIME DEFAULT NULL, PRIMARY KEY(persistence_object_identifier)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE wysiwyg_cookiehandling_domain_model_deletedcookie');
    }

    /**
     * @param Schema $schema
     * @return void
     * @throws MigrationException|DBALException
     */
    public function down(Schema $schema): void
    {
        // this down() migration is autogenerated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on "mysql".');

        $this->addSql('CREATE TABLE wysiwyg_cookiehandling_domain_model_deletedcookie (persistence_object_identifier VARCHAR(40) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, cookiename VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, counter INT NOT NULL, domain VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, lastmodified DATETIME DEFAULT NULL, PRIMARY KEY(persistence_object_identifier)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE wysiwyg_cookiehandling_domain_model_loggedcookie');
    }
}
