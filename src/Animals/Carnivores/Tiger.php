<?php

declare(strict_types=1);

namespace App\Animals\Carnivores;

use App\Animals\Animal;
use App\Animals\Name;
use App\Food\MealInterface;
use App\Food\TypeOfMeal;
use InvalidArgumentException;

class Tiger extends Animal
{
    public const SPECIES = 'Tiger';

    public function __construct(private readonly Name $name)
    {
        parent::__construct(
            $this->name,
            $this->getSpecies()
        );
    }

    protected function meal(): TypeOfMeal
    {
        return TypeOfMeal::MEAT;
    }

    public function getSpecies(): string
    {
        return self::SPECIES;
    }
}