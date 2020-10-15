<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201006200100 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Category data';
    }

    public function up(Schema $schema): void
    {
        $this->addSql("
        insert into category (id, label) values (1, 'Documentary');
insert into category (id, label) values (2, 'Children|Comedy');
insert into category (id, label) values (3, 'Comedy');
insert into category (id, label) values (4, 'Film-Noir|Thriller');
insert into category (id, label) values (5, 'Comedy|War');
insert into category (id, label) values (6, 'Drama');
insert into category (id, label) values (7, 'Drama');
insert into category (id, label) values (8, 'Action');
insert into category (id, label) values (9, 'Drama|Romance');
insert into category (id, label) values (10, 'Documentary');
insert into category (id, label) values (11, 'Adventure|Western');
insert into category (id, label) values (12, 'Comedy|Crime|Thriller');
insert into category (id, label) values (13, 'Documentary');
insert into category (id, label) values (14, 'Action|Adventure|Comedy|Drama|War');
insert into category (id, label) values (15, 'Drama|Romance|War');
insert into category (id, label) values (16, 'Drama|Mystery|Thriller');
insert into category (id, label) values (17, 'Drama|Romance|War');
insert into category (id, label) values (18, 'Comedy|Horror');
insert into category (id, label) values (19, 'Drama');
insert into category (id, label) values (20, 'Comedy|Drama|Musical');
insert into category (id, label) values (21, 'Crime|Drama');
insert into category (id, label) values (22, 'Action|Crime');
insert into category (id, label) values (23, 'Comedy');
insert into category (id, label) values (24, 'Adventure|Children|Fantasy');
insert into category (id, label) values (25, 'Drama');
insert into category (id, label) values (26, 'Action|Drama|Mystery');
insert into category (id, label) values (27, 'Horror');
insert into category (id, label) values (28, 'Comedy|Horror');
insert into category (id, label) values (29, 'Drama|Horror|Thriller');
insert into category (id, label) values (30, 'Comedy|Musical');
insert into category (id, label) values (31, 'Comedy');
insert into category (id, label) values (32, 'Action|Mystery|Thriller');
insert into category (id, label) values (33, 'Thriller|War');
insert into category (id, label) values (34, 'Action|Children|Sci-Fi|IMAX');
insert into category (id, label) values (35, 'Comedy');
insert into category (id, label) values (36, 'Drama');
insert into category (id, label) values (37, 'Horror');
insert into category (id, label) values (38, 'Drama');
insert into category (id, label) values (39, 'Drama');
insert into category (id, label) values (40, 'Drama|Film-Noir|Thriller');
insert into category (id, label) values (41, 'Documentary|Musical');
insert into category (id, label) values (42, 'Comedy|Fantasy');
insert into category (id, label) values (43, 'Crime|Thriller');
insert into category (id, label) values (44, 'Drama');
insert into category (id, label) values (45, 'Drama');
insert into category (id, label) values (46, 'Documentary');
insert into category (id, label) values (47, 'Drama|Musical|Romance');
insert into category (id, label) values (48, 'Action|Horror|Thriller');
insert into category (id, label) values (49, 'Comedy|Drama');
insert into category (id, label) values (50, 'Drama');
insert into category (id, label) values (51, 'Action|Crime');
insert into category (id, label) values (52, 'Drama');
insert into category (id, label) values (53, 'Comedy');
insert into category (id, label) values (54, 'Adventure|Comedy|Fantasy');
insert into category (id, label) values (55, 'Action|Sci-Fi');
insert into category (id, label) values (56, 'Crime|Drama|Mystery');
insert into category (id, label) values (57, 'Comedy|Drama');
insert into category (id, label) values (58, 'Drama|Romance');
insert into category (id, label) values (59, 'Crime|Drama|Thriller');
insert into category (id, label) values (60, 'Comedy');
insert into category (id, label) values (61, 'Drama|Horror|Thriller');
insert into category (id, label) values (62, 'Drama');
insert into category (id, label) values (63, 'Drama|Romance');
insert into category (id, label) values (64, 'Action|Thriller');
insert into category (id, label) values (65, 'Drama');
insert into category (id, label) values (66, 'Animation');
insert into category (id, label) values (67, 'Crime|Drama|Mystery|Thriller');
insert into category (id, label) values (68, 'Comedy|Mystery|Romance');
insert into category (id, label) values (69, 'Documentary');
insert into category (id, label) values (70, 'Drama');
insert into category (id, label) values (71, '(no genres listed)');
insert into category (id, label) values (72, 'Documentary');
insert into category (id, label) values (73, 'Comedy|Romance');
insert into category (id, label) values (74, 'Horror|Sci-Fi|Thriller');
insert into category (id, label) values (75, 'Comedy');
insert into category (id, label) values (76, 'Comedy|Crime');
insert into category (id, label) values (77, 'Comedy|Drama');
insert into category (id, label) values (78, 'Comedy|Crime|Mystery|Thriller');
insert into category (id, label) values (79, 'Comedy|Drama');
insert into category (id, label) values (80, 'Comedy|Drama');
insert into category (id, label) values (81, 'Horror');
insert into category (id, label) values (82, 'Romance|Western');
insert into category (id, label) values (83, 'Comedy|Drama|Romance');
insert into category (id, label) values (84, 'Drama|Sci-Fi|Thriller');
insert into category (id, label) values (85, 'Musical');
insert into category (id, label) values (86, 'Adventure|Fantasy|Romance');
insert into category (id, label) values (87, 'Sci-Fi');
insert into category (id, label) values (88, 'Drama|Musical');
insert into category (id, label) values (89, 'Drama|Horror');
insert into category (id, label) values (90, 'Action|Drama|Sci-Fi|Thriller');
insert into category (id, label) values (91, 'Drama|Romance');
insert into category (id, label) values (92, 'Comedy|Musical');
insert into category (id, label) values (93, 'Drama');
insert into category (id, label) values (94, 'Action|Comedy|Crime');
insert into category (id, label) values (95, 'Comedy|Fantasy');
insert into category (id, label) values (96, 'Action|Comedy');
insert into category (id, label) values (97, 'Comedy');
insert into category (id, label) values (98, 'Drama|Romance');
insert into category (id, label) values (99, 'Action|Adventure');
insert into category (id, label) values (100, 'Drama|Horror|Thriller');
insert into category (id, label) values (101, 'Thriller');
        "
        );
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
    }
}
