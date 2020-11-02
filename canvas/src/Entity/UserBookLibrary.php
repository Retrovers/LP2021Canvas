<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserBookLibrary.
 *
 * @ORM\Table(name="user_book_library", indexes={@ORM\Index(name="user_book_library_book_library_id_fk", columns={"book_library"}), @ORM\Index(name="user_book_library_user_id_fk", columns={"user"})})
 * @ORM\Entity(repositoryClass="App\Repository\UserBookLibraryRepository")
 */
class UserBookLibrary
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
     * @var \DateTime
     *
     * @ORM\Column(name="start", type="date", nullable=false)
     */
    private $start;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="end", type="date", nullable=true)
     */
    private $end;

    /**
     * @var BookLibrary
     *
     * @ORM\ManyToOne(targetEntity="BookLibrary")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="book_library", referencedColumnName="id")
     * })
     */
    private $bookLibrary;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user", referencedColumnName="id")
     * })
     */
    private $user;

    public function getId(): int
    {
        return $this->id;
    }

    public function getStart(): \DateTime
    {
        return $this->start;
    }

    public function setStart(\DateTime $start): void
    {
        $this->start = $start;
    }

    public function getEnd(): ?\DateTime
    {
        return $this->end;
    }

    public function setEnd(?\DateTime $end): void
    {
        $this->end = $end;
    }

    public function getBookLibrary(): BookLibrary
    {
        return $this->bookLibrary;
    }

    public function setBookLibrary(BookLibrary $bookLibrary): void
    {
        $this->bookLibrary = $bookLibrary;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function setUser(User $user): void
    {
        $this->user = $user;
    }
}
