<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AuthorBook.
 *
 * @ORM\Table(name="author_book", uniqueConstraints={@ORM\UniqueConstraint(name="author_book_book_author_uniq_index", columns={"book", "author"})}, indexes={@ORM\Index(name="author_book_author_id_fk", columns={"author"}), @ORM\Index(name="IDX_2F0A2BEECBE5A331", columns={"book"})})
 * @ORM\Entity
 */
class AuthorBook
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var Author
     *
     * @ORM\ManyToOne(targetEntity="Author")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="author", referencedColumnName="id")
     * })
     */
    private $author;

    /**
     * @var Book
     *
     * @ORM\ManyToOne(targetEntity="Book")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="book", referencedColumnName="id")
     * })
     */
    private $book;

    public function getAuthor(): Author
    {
        return $this->author;
    }

    public function setAuthor(Author $author): void
    {
        $this->author = $author;
    }

    public function getBook(): Book
    {
        return $this->book;
    }

    public function setBook(Book $book): void
    {
        $this->book = $book;
    }

    public function getId(): int
    {
        return $this->id;
    }
}
