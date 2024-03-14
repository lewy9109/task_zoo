<?php

declare(strict_types=1);

namespace App\Animals;

use InvalidArgumentException;

class Name
{
    public function __construct(private readonly string $name)
    {
        $this->validate();
    }

    private function validate(): void
    {
        if (empty($this->name)){
            throw new InvalidArgumentException('The name cannot be empty.');
        }
    }

    public function getName(): string
    {
        return $this->name;
    }
}