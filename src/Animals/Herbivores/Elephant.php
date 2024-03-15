<?php

declare(strict_types=1);

namespace App\Animals\Herbivores;

use App\Animals\Animal;
use App\Animals\Name;
use App\Food\TypeOfMeal;

class Elephant extends Animal
{
    public const SPECIES = 'Elephant';

    public function __construct(private readonly Name $name)
    {
        parent::__construct(
            $this->name,
            $this->getSpecies()
        );
    }

    protected function meal(): TypeOfMeal
    {
        return TypeOfMeal::PLANTS;
    }

    public function getSpecies(): string
    {
        return self::SPECIES;
    }
}