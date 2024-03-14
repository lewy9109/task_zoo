<?php

declare(strict_types=1);

namespace App\Food;

class Lettuce implements MealInterface
{
    private TypeOfMeal $type;

    public function __construct()
    {
        $this->type = TypeOfMeal::PLANTS;
    }

    public function getType(): TypeOfMeal
    {
        return $this->type;
    }
}