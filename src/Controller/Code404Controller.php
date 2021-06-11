<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Code404Controller extends AbstractController
{
    /**
     * @Route("/404", name="code404")
     */
    public function index(): Response
    {
        return $this->json(
            null,
            Response::HTTP_NOT_FOUND
        );
    }
}
