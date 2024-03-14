<?php

declare(strict_types=1);

namespace App\Animals\Herbivores;

use App\Animals\Animal;
use App\Animals\Name;
use App\Animals\TypeOfMeal;

class Rabbit extends Animal
{
    public const SPECIES = 'Rabbit';

    public function __construct(Name $name)
    {
        parent::__construct(
            $name,
            self::SPECIES
        );
    }

    public function meal(): TypeOfMeal
    {
        return TypeOfMeal::PLANTS;
    }
}