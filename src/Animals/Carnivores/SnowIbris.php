<?php

namespace App\Animals\Carnivores;

use App\Animals\Animal;
use App\Animals\Name;
use App\Animals\TypeOfMeal;
use InvalidArgumentException;

class SnowIbris extends Animal
{
    public const SPECIES = 'Snow Ibris';

    public function __construct(private readonly Name $name)
    {
        parent::__construct(
            $this->name,
            self::SPECIES
        );
    }

    public function feed(TypeOfMeal $meal): string
    {
        if ($meal !== $this->meal()) {
            throw new InvalidArgumentException(
                $this->getFoodErrorMessage(self::SPECIES, $meal)
            );
        }

        return $this->getFoodMessage();
    }

    public function meal(): TypeOfMeal
    {
        return TypeOfMeal::MEAT;
    }
}