<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181106081554 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE admissions_exams_results CHANGE subject_id subject_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE admissions_user CHANGE updated_at updated_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE admissions_halls CHANGE hall_bank_id hall_bank_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE admissions_applicants CHANGE nationality_id nationality_id INT DEFAULT NULL, CHANGE former_school_id former_school_id INT DEFAULT NULL, CHANGE region_id region_id INT DEFAULT NULL, CHANGE programme_id1_id programme_id1_id INT DEFAULT NULL, CHANGE programme_id2_id programme_id2_id INT DEFAULT NULL, CHANGE programme_id3_id programme_id3_id INT DEFAULT NULL, CHANGE status status VARCHAR(255) DEFAULT \'Applicant\' NOT NULL, CHANGE section_admitted section_admitted VARCHAR(255) DEFAULT \'Regular\' NOT NULL');
        $this->addSql('ALTER TABLE admissions_departments CHANGE faculty_id_id faculty_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE programme DROP FOREIGN KEY FK_3DDCB9FFAE80F5DF');
        $this->addSql('DROP INDEX UNIQ_3DDCB9FF5E237E06 ON programme');
        $this->addSql('DROP INDEX UNIQ_3DDCB9FFA093C16C ON programme');
        $this->addSql('DROP INDEX IDX_3DDCB9FFAE80F5DF ON programme');
        $this->addSql('ALTER TABLE programme ADD running INT NOT NULL, ADD section VARCHAR(255) DEFAULT NULL, ADD duration INT NOT NULL, ADD show_on_portal INT NOT NULL, ADD level_admitted INT NOT NULL, CHANGE department_id department_id INT NOT NULL, CHANGE fees code VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE admissions_applicants CHANGE nationality_id nationality_id INT DEFAULT NULL, CHANGE former_school_id former_school_id INT DEFAULT NULL, CHANGE region_id region_id INT DEFAULT NULL, CHANGE programme_id1_id programme_id1_id INT DEFAULT NULL, CHANGE programme_id2_id programme_id2_id INT DEFAULT NULL, CHANGE programme_id3_id programme_id3_id INT DEFAULT NULL, CHANGE status status VARCHAR(255) DEFAULT \'\'Applicant\'\' NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE section_admitted section_admitted VARCHAR(255) DEFAULT \'\'Regular\'\' NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE admissions_departments CHANGE faculty_id_id faculty_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE admissions_exams_results CHANGE subject_id subject_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE admissions_halls CHANGE hall_bank_id hall_bank_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE admissions_user CHANGE updated_at updated_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE programme DROP running, DROP section, DROP duration, DROP show_on_portal, DROP level_admitted, CHANGE department_id department_id INT DEFAULT NULL, CHANGE code fees VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE programme ADD CONSTRAINT FK_3DDCB9FFAE80F5DF FOREIGN KEY (department_id) REFERENCES admissions_departments (department_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_3DDCB9FF5E237E06 ON programme (name)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_3DDCB9FFA093C16C ON programme (fees)');
        $this->addSql('CREATE INDEX IDX_3DDCB9FFAE80F5DF ON programme (department_id)');
    }
}
