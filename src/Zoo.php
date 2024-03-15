<?php

declare(strict_types=1);

namespace App;

use App\Animals\AnimalInterface;
use App\Animals\FurInterface;
use App\Food\MealInterface;
use App\Food\Lettuce;
use App\Food\PorkChop;
use App\Food\TypeOfMeal;
use Exception;

class Zoo
{
    /**
     * @param array<AnimalInterface> $animals
     */
    public function __construct(private array $animals = [])
    {
    }

    /**
     * @return AnimalInterface[]
     */
    public function toArray(): array
    {
        return $this->animals;
    }

    public function add(AnimalInterface $animal): void
    {
        $this->animals[] = $animal;
    }

    public function groomAnimals(): void
    {
        foreach ($this->animals as $animal) {
           if($animal instanceof FurInterface) {
               $animal->combFur();
           }
        }
    }

    /**
     * @throws Exception
     */
    public function feedAnimals(): void
    {
        foreach ($this->animals as $animal) {
            $food = $this->makeMeal($animal);
            $animal->feed($food);
        }
    }

    /**
     * @throws Exception
     */
    private function makeMeal(AnimalInterface $animal): MealInterface
    {
        return match ($animal->meal()) {
            TypeOfMeal::PLANTS => $this->makePlantMeal(),
            TypeOfMeal::MEAT => $this->makeMeatMeal(),
            TypeOfMeal::MIXED => $this->makeMixedMeal(),
            default => throw new Exception('Unknown meal type')
        };
    }

    private function makePlantMeal(): MealInterface
    {
        return new Lettuce();
    }

    private function makeMeatMeal(): MealInterface
    {
        return new PorkChop();
    }

    private function makeMixedMeal(): MealInterface
    {
        // TODO: Implement makeMixedMeal() method.
    }
}