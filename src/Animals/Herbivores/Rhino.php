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
            self::SPECIES
        );
    }

    public function feed(MealInterface $meal): string
    {
        if ($meal->getType() !== $this->meal()) {
            throw new InvalidArgumentException(
                $this->getFoodErrorMessage(self::SPECIES, $meal->getType())
            );
        }

        return $this->getFoodMessage();
    }

    public function meal(): TypeOfMeal
    {
        return TypeOfMeal::PLANTS;
    }

}