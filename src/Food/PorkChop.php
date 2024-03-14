<?php

declare(strict_types=1);

namespace App\Food;

class PorkChop implements MealInterface
{
    private TypeOfMeal $type;

    public function __construct()
    {
        $this->type = TypeOfMeal::MEAT;
    }

    public function getType(): TypeOfMeal
    {
        return $this->type;
    }
}