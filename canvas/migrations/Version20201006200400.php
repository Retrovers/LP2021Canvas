<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201006200400 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Library data';
    }

    public function up(Schema $schema): void
    {
        $this->addSql("
        insert into user (id, first_name, last_name) values (1, 'Pénélope', 'Braunes');
        insert into user (id, first_name, last_name) values (2, 'Cécile', 'Mackro');
        insert into user (id, first_name, last_name) values (3, 'Styrbjörn', 'Henfre');
        insert into user (id, first_name, last_name) values (4, 'Lorène', 'Bly');
        insert into user (id, first_name, last_name) values (5, 'Måns', 'Enga');
        insert into user (id, first_name, last_name) values (6, 'Vénus', 'Tuckett');
        insert into user (id, first_name, last_name) values (7, 'Mélys', 'Bedberry');
        insert into user (id, first_name, last_name) values (8, 'Nadège', 'Balsdon');
        insert into user (id, first_name, last_name) values (9, 'Mélina', 'Scothorn');
        insert into user (id, first_name, last_name) values (10, 'Loïca', 'Iggulden');
        insert into user (id, first_name, last_name) values (11, 'Kù', 'Hanratty');
        insert into user (id, first_name, last_name) values (12, 'Åslög', 'Hounsham');
        insert into user (id, first_name, last_name) values (13, 'Marie-hélène', 'Bachelor');
        insert into user (id, first_name, last_name) values (14, 'Méryl', 'Whitlow');
        insert into user (id, first_name, last_name) values (15, 'Anaëlle', 'Barttrum');
        insert into user (id, first_name, last_name) values (16, 'Méng', 'Norkett');
        insert into user (id, first_name, last_name) values (17, 'Mahélie', 'Leishman');
        insert into user (id, first_name, last_name) values (18, 'Méng', 'Tytler');
        insert into user (id, first_name, last_name) values (19, 'Kallisté', 'Gaytor');
        insert into user (id, first_name, last_name) values (20, 'Görel', 'Mattioli');
        insert into user (id, first_name, last_name) values (21, 'Maïté', 'Balling');
        insert into user (id, first_name, last_name) values (22, 'Märta', 'Brunnen');
        insert into user (id, first_name, last_name) values (23, 'Björn', 'Loweth');
        insert into user (id, first_name, last_name) values (24, 'Marie-thérèse', 'Dallimare');
        insert into user (id, first_name, last_name) values (25, 'Gérald', 'Kase');
        insert into user (id, first_name, last_name) values (26, 'Håkan', 'Blazi');
        insert into user (id, first_name, last_name) values (27, 'Célia', 'Sketh');
        insert into user (id, first_name, last_name) values (28, 'Vénus', 'Hugli');
        insert into user (id, first_name, last_name) values (29, 'Léana', 'Gawke');
        insert into user (id, first_name, last_name) values (30, 'Maïlis', 'Tonge');
        insert into user (id, first_name, last_name) values (31, 'Ophélie', 'Jonke');
        insert into user (id, first_name, last_name) values (32, 'Inès', 'Mandrier');
        insert into user (id, first_name, last_name) values (33, 'Françoise', 'Creaney');
        insert into user (id, first_name, last_name) values (34, 'Alizée', 'MacBain');
        insert into user (id, first_name, last_name) values (35, 'Simplifiés', 'Divell');
        insert into user (id, first_name, last_name) values (36, 'Yóu', 'Adamiec');
        insert into user (id, first_name, last_name) values (37, 'Maïté', 'Normavill');
        insert into user (id, first_name, last_name) values (38, 'Rachèle', 'Callaghan');
        insert into user (id, first_name, last_name) values (39, 'Alizée', 'Birmingham');
        insert into user (id, first_name, last_name) values (40, 'Andréanne', 'Mollin');
        insert into user (id, first_name, last_name) values (41, 'Mélanie', 'Pennycuick');
        insert into user (id, first_name, last_name) values (42, 'Cécilia', 'Dyerson');
        insert into user (id, first_name, last_name) values (43, 'Tú', 'Dawidman');
        insert into user (id, first_name, last_name) values (44, 'Réservés', 'Nestor');
        insert into user (id, first_name, last_name) values (45, 'Anaël', 'Scorton');
        insert into user (id, first_name, last_name) values (46, 'Réservés', 'Atkin');
        insert into user (id, first_name, last_name) values (47, 'Liè', 'Hargroves');
        insert into user (id, first_name, last_name) values (48, 'Maëly', 'Neachell');
        insert into user (id, first_name, last_name) values (49, 'Mén', 'Hasely');
        insert into user (id, first_name, last_name) values (50, 'Tán', 'Willden');
        insert into user (id, first_name, last_name) values (51, 'Clémence', 'Halpeine');
        insert into user (id, first_name, last_name) values (52, 'Nuó', 'Simacek');
        insert into user (id, first_name, last_name) values (53, 'Méline', 'Happel');
        insert into user (id, first_name, last_name) values (54, 'Léana', 'Leavy');
        insert into user (id, first_name, last_name) values (55, 'Mylène', 'Atwill');
        insert into user (id, first_name, last_name) values (56, 'Annotée', 'Cleevely');
        insert into user (id, first_name, last_name) values (57, 'Mélissandre', 'Iacomi');
        insert into user (id, first_name, last_name) values (58, 'Maï', 'Aizikov');
        insert into user (id, first_name, last_name) values (59, 'Mélodie', 'Ingley');
        insert into user (id, first_name, last_name) values (60, 'Maéna', 'Hache');
        insert into user (id, first_name, last_name) values (61, 'Maëlyss', 'Leat');
        insert into user (id, first_name, last_name) values (62, 'Yè', 'Coughan');
        insert into user (id, first_name, last_name) values (63, 'Mélodie', 'Kelsow');
        insert into user (id, first_name, last_name) values (64, 'Irène', 'Rivel');
        insert into user (id, first_name, last_name) values (65, 'Kallisté', 'Dunrige');
        insert into user (id, first_name, last_name) values (66, 'Danièle', 'Madelin');
        insert into user (id, first_name, last_name) values (67, 'Tán', 'Mc Gaughey');
        insert into user (id, first_name, last_name) values (68, 'Annotés', 'Northway');
        insert into user (id, first_name, last_name) values (69, 'Esbjörn', 'Cuberley');
        insert into user (id, first_name, last_name) values (70, 'Eliès', 'Skocroft');
        insert into user (id, first_name, last_name) values (71, 'Geneviève', 'Bullocke');
        insert into user (id, first_name, last_name) values (72, 'Océanne', 'Cribbins');
        insert into user (id, first_name, last_name) values (73, 'Dà', 'Clayden');
        insert into user (id, first_name, last_name) values (74, 'Vénus', 'MacKimm');
        insert into user (id, first_name, last_name) values (75, 'Simplifiés', 'Chape');
        insert into user (id, first_name, last_name) values (76, 'Gérald', 'Giles');
        insert into user (id, first_name, last_name) values (77, 'Aloïs', 'Fields');
        insert into user (id, first_name, last_name) values (78, 'Maëline', 'Lorraway');
        insert into user (id, first_name, last_name) values (79, 'Maïwenn', 'Thominga');
        insert into user (id, first_name, last_name) values (80, 'Lucrèce', 'Benne');
        insert into user (id, first_name, last_name) values (81, 'Geneviève', 'Littefair');
        insert into user (id, first_name, last_name) values (82, 'Göran', 'Mityashev');
        insert into user (id, first_name, last_name) values (83, 'Séverine', 'Jelliman');
        insert into user (id, first_name, last_name) values (84, 'Valérie', 'Bister');
        insert into user (id, first_name, last_name) values (85, 'Inès', 'Ianiello');
        insert into user (id, first_name, last_name) values (86, 'Eliès', 'Perulli');
        insert into user (id, first_name, last_name) values (87, 'Océanne', 'Smith');
        insert into user (id, first_name, last_name) values (88, 'Marylène', 'Darcey');
        insert into user (id, first_name, last_name) values (89, 'Frédérique', 'Rowson');
        insert into user (id, first_name, last_name) values (90, 'Yú', 'Leopold');
        insert into user (id, first_name, last_name) values (91, 'Léone', 'Prawle');
        insert into user (id, first_name, last_name) values (92, 'Loïc', 'Gerckens');
        insert into user (id, first_name, last_name) values (93, 'Cécile', 'Bettam');
        insert into user (id, first_name, last_name) values (94, 'Renée', 'Felder');
        insert into user (id, first_name, last_name) values (95, 'Bérénice', 'Ciobotaro');
        insert into user (id, first_name, last_name) values (96, 'Mén', 'Closs');
        insert into user (id, first_name, last_name) values (97, 'Léandre', 'Marsden');
        insert into user (id, first_name, last_name) values (98, 'Uò', 'Elliott');
        insert into user (id, first_name, last_name) values (99, 'Laïla', 'Biaggioli');
        insert into user (id, first_name, last_name) values (100, 'Véronique', 'Meenehan');
                
");
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
    }
}
