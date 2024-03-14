<?php

declare(strict_types=1);

namespace App\Animals;

abstract class Animal
{
    public function __construct(private Name $name, private readonly string $species)
    {
        $this->addSpeciesToName();
    }

    public function __toString(): string
    {
        return $this->name->getName();
    }

    private function addSpeciesToName(): void
    {
        $this->name = $this->name->rename(
            sprintf('%s %s', $this->species, $this->name->getName())
        );
    }

}