<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201006182919 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Initial schema';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('
        create table user
            (
                id int auto_increment,
                first_name varchar(255) null,
                last_name varchar(255) null,
                constraint user_pk
                    primary key (id)
            );'
        );
        $this->addSql('
        create table author
            (
                id int auto_increment,
                first_name varchar(255) null,
                last_name varchar(255) null,
                birth_date date null,
                constraint author_pk
                    primary key (id)
            );'
        );
        $this->addSql('
        create table book
            (
                id int auto_increment,
                label varchar(255) null,
                isbn varchar(255) null,
                category int null,
                constraint book_pk
                    primary key (id)
            );'
        );
        $this->addSql('
        create table category
            (
                id int auto_increment,
                label varchar(255) null,
                constraint category_pk
                    primary key (id)
            );'
        );
        $this->addSql('
        create table library
            (
                id int auto_increment,
                name varchar(255) null,
                constraint library_pk
                    primary key (id)
            );'
        );
        $this->addSql('
        create table author_book
        (
            id int auto_increment,
            book int null,
            author int null,
            constraint author_book_pk
                primary key (id),
            constraint author_book_author_id_fk
                foreign key (author) references author (id),
            constraint author_book_book_id_fk
                foreign key (book) references book (id)
        );
        
        create unique index author_book_book_author_uniq_index
            on author_book (book, author);'
        );

        $this->addSql('
        alter table book
            add constraint book_category_id_fk
                foreign key (category) references category (id);'
        );
        $this->addSql('
        create table book_library
            (
                id int auto_increment,
                book int null,
                library int null,
                constraint book_library_pk
                    primary key (id),
                constraint book_library_book_id_fk
                    foreign key (book) references book (id),
                constraint book_library_library_id_fk
                    foreign key (library) references library (id)
            );'
        );
        $this->addSql('
        create table user_book_library
            (
                id int auto_increment,
                book_library int not null,
                user int not null,
                start date not null,
                end date null,
                constraint user_book_library_pk
                    primary key (id),
                constraint user_book_library_book_library_id_fk
                    foreign key (book_library) references book_library (id),
                constraint user_book_library_user_id_fk
                    foreign key (user) references user (id)
            );'
        );
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
    }
}
