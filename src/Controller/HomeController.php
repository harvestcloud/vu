<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController
{
    #[Route('/', name: 'app_home')]
    public function __invoke(): Response
    {
        return new Response('Hello, attributes!');
    }
}
