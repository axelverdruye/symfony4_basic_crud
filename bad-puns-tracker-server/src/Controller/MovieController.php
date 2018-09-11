<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class MovieController
{
    /**
    * @Route("/movies")
    */
    public function moviesAction()
    {
        return new JsonResponse([
            [
                'title' => 'The Princess Bride',
                'count' => 0
            ]
        ]);
    }
}
