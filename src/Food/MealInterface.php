<?php

declare(strict_types=1);

namespace App\Food;

interface MealInterface
{
    public function getType(): TypeOfMeal;
}