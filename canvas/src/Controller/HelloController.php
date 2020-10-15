<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HelloController
{
    public function helloAction(): Response
    {
        return new Response('Hello');
    }
}
