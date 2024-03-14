<?php

declare(strict_types=1);

namespace App\Animals\Herbivores;

use App\Animals\Animal;
use App\Animals\Name;
use App\Animals\TypeOfMeal;
use InvalidArgumentException;

class Rabbit extends Animal
{
    public const SPECIES = 'Rabbit';

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
        return TypeOfMeal::PLANTS;
    }
}