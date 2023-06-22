<?php

declare(strict_types=1);

namespace App\Dto;

final readonly class ParentDto
{
    public function __construct(
        public NestedDto $nested,
    ) {}
}
