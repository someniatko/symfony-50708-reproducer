<?php

declare(strict_types=1);

namespace App\Controller;

use App\Dto\ParentDto;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\MapRequestPayload;
use Symfony\Component\Routing\Annotation\Route;

final class Controller extends AbstractController
{
    #[Route(path: [ '/path' ], methods: 'POST')]
    public function index(#[MapRequestPayload] ParentDto $dto): Response
    {
        return $this->json($dto);
    }
}
