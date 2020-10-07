<?php


namespace App\Controller;


use App\Model\Book;
use App\Normalizer\BookNormalizer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Serializer;

class HelloController extends AbstractController
{

    public function helloAction() {
        return new Response("Bonjour");
    }

}