<?php

declare(strict_types=1);

namespace App\Animals\Herbivores;

use App\Animals\Animal;
use App\Animals\FurInterface;
use App\Animals\Name;
use App\Food\TypeOfMeal;

class Rabbit extends Animal implements FurInterface
{
    public const SPECIES = 'Rabbit';

    public function __construct(private readonly Name $name)
    {
        dd($name);
        parent::__construct(
            $this->name,
            $this->getSpecies()
        );
    }

    public function meal(): TypeOfMeal
    {
        return TypeOfMeal::PLANTS;
    }

    public function combFur(): void
    {
        echo "The animal has been groomed.";
    }

    public function getSpecies(): string
    {
        return self::SPECIES;
    }
}