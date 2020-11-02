<?php

namespace App\Controller;

use App\Entity\Library;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/library")
 */
class LibraryController extends AbstractController
{
    /**
     * @Route("/", name="get_all_libraries", methods={"GET"})
     */
    public function getAllAction(): JsonResponse
    {
        return $this->json($this->getDoctrine()->getRepository(Library::class)->findAll());
    }

    /**
     * @Route("/{id}", name="get_one_library",  methods={"GET"})
     */
    public function getOneAction(Request $request, int $id): JsonResponse
    {
        $context = [];
        $needBooks = $request->get('book');
        if (null !== $needBooks) {
            $context['book'] = true;
        }
        return $this->json($this->getDoctrine()->getRepository(Library::class)->find($id), 200, [], $context);
    }
}
