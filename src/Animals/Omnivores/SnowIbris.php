<?php

declare(strict_types=1);

namespace App\Animals\Omnivores;

use App\Animals\Animal;
use App\Animals\Name;
use App\Food\TypeOfMeal;

class SnowIbris extends Animal
{
    public const SPECIES = 'Snow Ibris';

    public function __construct(private readonly Name $name)
    {
        parent::__construct(
            $this->name,
            $this->getSpecies()
        );
    }

    public function meal(): TypeOfMeal
    {
        return TypeOfMeal::MIXED;
    }

    public function getSpecies(): string
    {
        return self::SPECIES;
    }
}