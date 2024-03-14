<?php

declare(strict_types=1);

namespace App\Animals\Carnivores;

use App\Animals\Animal;
use App\Food\MealInterface;
use App\Food\TypeOfMeal;
use InvalidArgumentException;

class Fox extends Animal
{
    public const SPECIES = 'Fox';

    protected function meal(): TypeOfMeal
    {
        return TypeOfMeal::MIXED;
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