<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

#[Route('tag')]
class TagController
{
    #[Route(methods: ['POST'])]
    public function post(Request $request): void
    {
        dump($request->request->all());
    }
}
