<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BookLibrary.
 *
 * @ORM\Table(name="book_library", indexes={@ORM\Index(name="book_library_book_id_fk", columns={"book"}), @ORM\Index(name="book_library_library_id_fk", columns={"library"})})
 * @ORM\Entity(repositoryClass="App\Repository\BookLibraryRepository")
 */
class BookLibrary
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
     * @var Book
     *
     * @ORM\ManyToOne(targetEntity="Book")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="book", referencedColumnName="id")
     * })
     */
    private $book;

    /**
     * @var Library
     *
     * @ORM\ManyToOne(targetEntity="Library")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="library", referencedColumnName="id")
     * })
     */
    private $library;

    public function getBook(): Book
    {
        return $this->book;
    }

    public function setBook(Book $book): void
    {
        $this->book = $book;
    }

    public function getLibrary(): Library
    {
        return $this->library;
    }

    public function setLibrary(Library $library): void
    {
        $this->library = $library;
    }

    public function getId(): int
    {
        return $this->id;
    }
}
