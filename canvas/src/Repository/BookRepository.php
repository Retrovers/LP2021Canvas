<?php

namespace App\Repository;

use App\Entity\AuthorBook;
use App\Entity\Book;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Query\Expr\Join;
use Doctrine\Persistence\ManagerRegistry;

class BookRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Book::class);
    }

    public function findByAuthor(int $authorId)
    {
        $qb = $this->getEntityManager()->createQueryBuilder();

        $qb->select('b')
            ->from(Book::class, 'b')
            ->innerJoin(AuthorBook::class, 'ab', Join::WITH, 'b.id = ab.book')
            ->where($qb->expr()->eq('ab.author', ':authorId'))
            ->setParameter('authorId', $authorId, Types::INTEGER);

        return $qb->getQuery()->getResult();
    }
}
