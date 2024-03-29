<?php

declare(strict_types=1);

namespace App\Animals;

use App\Food\MealInterface;
use App\Food\TypeOfMeal;
use InvalidArgumentException;

abstract class Animal implements AnimalInterface
{
    public function __construct(private Name $name, private readonly string $species)
    {
        $this->addSpeciesToName();
    }

    public function __toString(): string
    {
        return $this->name->getName();
    }

    public function feed(MealInterface $meal): string
    {
        if ($meal->getType() === TypeOfMeal::MIXED || $meal->getType() === $this->meal()) {
            return $this->getFoodMessage();
        }

        throw new InvalidArgumentException(
            $this->getFoodErrorMessage($this->getSpecies(), $meal->getType())
        );
    }

    private function addSpeciesToName(): void
    {
        $this->name = $this->name->rename(
            sprintf('%s %s', $this->species, $this->name->getName())
        );
    }

    protected function getFoodErrorMessage(string $species, TypeOfMeal $meal): string
    {
        return sprintf('%s not eat %s', $species, $meal->value);
    }

    protected function getFoodMessage(): string
    {
        return 'Yummy';
    }

    protected abstract function meal(): TypeOfMeal;

    protected abstract function getSpecies(): string;
}