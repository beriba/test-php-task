<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ImageController extends AbstractController
{
    /**
     * @Route("/image", name="image")
     */
    public function image(): Response
    {
        $image = imagecreate(1, 1);
        return new JsonResponse([
            'success' => imagefill($image, 0, 0, imagecolorallocate($image, 0, 0, 0))
        ]);
    }
}
