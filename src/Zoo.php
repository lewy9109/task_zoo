<?php

declare(strict_types=1);

namespace App;

use App\Animals\AnimalInterface;

class Zoo
{
    /**
     * @param array<AnimalInterface> $animals
     */
    public function __construct(private array $animals = [])
    {
    }

    /**
     * @return AnimalInterface[]
     */
    public function toArray(): array
    {
        return $this->animals;
    }

    public function add(AnimalInterface $animal): void
    {
        $this->animals[] = $animal;
    }
}