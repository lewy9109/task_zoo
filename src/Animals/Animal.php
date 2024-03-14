<?php

declare(strict_types=1);

namespace App\Animals;

abstract class Animal
{
    public function __construct(private readonly Name $name)
    {
    }

    public function __toString(): string
    {
        return $this->name->getName();
    }
}