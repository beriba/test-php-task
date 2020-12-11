<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BasicController extends AbstractController
{
    /**
     * @Route("/basic", name="basic")
     */
    public function basic(): Response
    {
        sleep(1);
        $number = random_int(0, 100);

        return new JsonResponse([
            'number' => $number
        ]);
    }
}
