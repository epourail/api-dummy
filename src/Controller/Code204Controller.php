<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Code204Controller extends AbstractController
{
    /**
     * @Route("/204", name="code204")
     */
    public function index(): Response
    {
        return $this->json(
            null,
            Response::HTTP_NO_CONTENT
        );
    }
}
