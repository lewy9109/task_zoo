<?php

declare(strict_types=1);

namespace App\Animals\Herbivores;

use App\Animals\Animal;
use App\Animals\Name;
use App\Food\MealInterface;
use App\Food\TypeOfMeal;
use InvalidArgumentException;

class Elephant extends Animal
{
    public const SPECIES = 'Elephant';

    public function __construct(private readonly Name $name)
    {
        parent::__construct(
            $this->name,
            self::SPECIES
        );
    }

    protected function meal(): TypeOfMeal
    {
        return TypeOfMeal::PLANTS;
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
}