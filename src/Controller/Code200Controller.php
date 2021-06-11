<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Code200Controller extends AbstractController
{
    /**
     * @Route("/200", name="code200")
     */
    public function index(): Response
    {
        return $this->json(
            [
                'message' => 'Hello!',
            ],
            Response::HTTP_OK
        );
    }
}
