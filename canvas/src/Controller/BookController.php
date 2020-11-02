<?php

namespace App\Controller;

use App\Entity\Book;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/book")
 */
class BookController extends AbstractController
{
    /**
     * @Route("/", name="get_all_books", methods={"GET"})
     */
    public function getAllAction(): JsonResponse
    {
        return $this->json($this->getDoctrine()->getRepository(Book::class)->findAll());
    }

    /**
     * @Route("/{id}", name="get_one_book",  methods={"GET"})
     */
    public function getOneAction(int $id): JsonResponse
    {
        return $this->json($this->getDoctrine()->getRepository(Book::class)->find($id), 200, [], ['category' => true]);
    }

    /**
     * @Route("/author/{id}", name="get_by_author_book",  methods={"GET"})
     */
    public function getByAuthorAction(int $id): JsonResponse
    {
        return $this->json($this->getDoctrine()->getRepository(Book::class)->findByAuthor($id), 200, [], ['category' => true]);
    }
}
