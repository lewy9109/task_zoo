<?php

namespace App\Animals\Carnivores;

use App\Animals\Animal;
use App\Animals\Name;
use App\Animals\TypeOfMeal;

class SnowIbris extends Animal
{
    public const SPECIES = 'Snow Ibris';

    public function __construct(Name $name)
    {
        parent::__construct(
            $name,
            self::SPECIES
        );
    }

    public function meal(): TypeOfMeal
    {
        return TypeOfMeal::MEAT;
    }
}