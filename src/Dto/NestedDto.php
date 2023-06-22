<?php

declare(strict_types=1);

namespace App\Dto;

final readonly class NestedDto
{
    public function __construct(
        public string $value,
    ) {}
}
