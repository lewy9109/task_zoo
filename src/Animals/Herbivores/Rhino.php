<?php

namespace App\Animals\Herbivores;

use App\Animals\Animal;
use App\Animals\Name;
use App\Food\MealInterface;
use App\Food\TypeOfMeal;
use InvalidArgumentException;

class Rhino extends Animal
{
    public const SPECIES = 'Rhino';

    public function __construct(private readonly Name $name)
    {
        parent::__construct(
            $this->name,
            $this->getSpecies()
        );
    }

    public function meal(): TypeOfMeal
    {
        return TypeOfMeal::PLANTS;
    }

    public function getSpecies(): string
    {
        return self::SPECIES;
    }
}