<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201006200300 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Library data';
    }

    public function up(Schema $schema): void
    {
        $this->addSql("
        insert into library (id, name) values (1, 'Miguel Hidalgo');
insert into library (id, name) values (2, 'Leonidovo');
insert into library (id, name) values (3, 'Chonghe');
insert into library (id, name) values (4, 'Berezayka');
insert into library (id, name) values (5, 'Kolç');
insert into library (id, name) values (6, 'Kadusimbar');
insert into library (id, name) values (7, 'Biny Selo');
insert into library (id, name) values (8, 'Cabittaogan');
insert into library (id, name) values (9, 'Nine');
insert into library (id, name) values (10, 'Puyang');
insert into library (id, name) values (11, 'Pantang');
insert into library (id, name) values (12, 'Little Rock');
insert into library (id, name) values (13, 'Zangzhai');
insert into library (id, name) values (14, 'Pamplona/Iruña');
insert into library (id, name) values (15, 'Lille');
insert into library (id, name) values (16, 'Xinchengzi');
insert into library (id, name) values (17, 'Ash Shuyūkh');
insert into library (id, name) values (18, 'Vlachovice');
insert into library (id, name) values (19, 'Židlochovice');
insert into library (id, name) values (20, 'Lacombe');
insert into library (id, name) values (21, 'Krajan Tengah');
insert into library (id, name) values (22, 'Ōno-hara');
insert into library (id, name) values (23, 'Santana');
insert into library (id, name) values (24, 'Sumusţā as Sulţānī');
insert into library (id, name) values (25, 'Mauhao');
insert into library (id, name) values (26, 'San Rafael');
insert into library (id, name) values (27, 'Vera Cruz');
insert into library (id, name) values (28, 'Manalad');
insert into library (id, name) values (29, 'Kembang');
insert into library (id, name) values (30, 'Baltimore');
insert into library (id, name) values (31, 'Lagoa Santa');
insert into library (id, name) values (32, 'Kayakent');
insert into library (id, name) values (33, 'Umeå');
insert into library (id, name) values (34, 'São Paio de Seide');
insert into library (id, name) values (35, 'Chociwel');
insert into library (id, name) values (36, 'Herzliya Pituah');
insert into library (id, name) values (37, 'Kalianget');
insert into library (id, name) values (38, 'Cincinnati');
insert into library (id, name) values (39, 'Maroa');
insert into library (id, name) values (40, 'Zhonghechang');
insert into library (id, name) values (41, 'Douane');
insert into library (id, name) values (42, 'Gaotai');
insert into library (id, name) values (43, 'Takari');
insert into library (id, name) values (44, 'Kafr Sawm');
insert into library (id, name) values (45, 'Golug');
insert into library (id, name) values (46, 'Tunggar');
insert into library (id, name) values (47, 'Caomiao');
insert into library (id, name) values (48, 'Lecherías');
insert into library (id, name) values (49, 'Parintins');
insert into library (id, name) values (50, 'Baofeng');
insert into library (id, name) values (51, 'Malaryta');
insert into library (id, name) values (52, 'Linshui');
insert into library (id, name) values (53, 'Coripata');
insert into library (id, name) values (54, 'Novokuybyshevsk');
insert into library (id, name) values (55, 'Karkkila');
insert into library (id, name) values (56, 'Jingang');
insert into library (id, name) values (57, 'Lesnoye');
insert into library (id, name) values (58, 'Ayotupas');
insert into library (id, name) values (59, 'Francisco Villa');
insert into library (id, name) values (60, 'Orekhovo-Zuyevo');
insert into library (id, name) values (61, 'Yanaoca');
insert into library (id, name) values (62, 'Dijon');
insert into library (id, name) values (63, 'Piteå');
insert into library (id, name) values (64, 'Komorniki');
insert into library (id, name) values (65, 'Ban Tak');
insert into library (id, name) values (66, 'Rāwandūz');
insert into library (id, name) values (67, 'Yatsuomachi-higashikumisaka');
insert into library (id, name) values (68, 'Buseresere');
insert into library (id, name) values (69, 'Wonokerto');
insert into library (id, name) values (70, 'Qal‘eh-ye Khvājeh');
insert into library (id, name) values (71, 'Três Passos');
insert into library (id, name) values (72, 'Itatuba');
insert into library (id, name) values (73, 'Goyang-si');
insert into library (id, name) values (74, 'Nizhyn');
insert into library (id, name) values (75, 'Haiyanmiao');
insert into library (id, name) values (76, 'Lipin Bor');
insert into library (id, name) values (77, 'Borbon');
insert into library (id, name) values (78, 'Pervomayskoye');
insert into library (id, name) values (79, 'Kuilehe');
insert into library (id, name) values (80, 'Raemude');
insert into library (id, name) values (81, 'Kanugrahan');
insert into library (id, name) values (82, 'Unity');
insert into library (id, name) values (83, 'Zarrīn Shahr');
insert into library (id, name) values (84, 'Constantia');
insert into library (id, name) values (85, 'Biggar');
insert into library (id, name) values (86, 'Cobre');
insert into library (id, name) values (87, 'Bamusso');
insert into library (id, name) values (88, 'Vista Hermosa');
insert into library (id, name) values (89, 'Dangbigih');
insert into library (id, name) values (90, 'Wu’erbu Baolige');
insert into library (id, name) values (91, 'Sañgay');
insert into library (id, name) values (92, 'Mazra‘at Bayt Jinn');
insert into library (id, name) values (93, 'Jiepai');
insert into library (id, name) values (94, 'Zhantang');
insert into library (id, name) values (95, 'Quillabamba');
insert into library (id, name) values (96, 'Muraharjo');
insert into library (id, name) values (97, 'Ziyang');
insert into library (id, name) values (98, 'Sangiang');
insert into library (id, name) values (99, 'Liuhe');
insert into library (id, name) values (100, 'Mascote');
insert into library (id, name) values (101, 'Huwan');"
        );
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
    }
}
