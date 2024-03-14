<?php

declare(strict_types=1);

namespace App\Food;

enum TypeOfMeal: string
{
    case MEAT = 'Meat';
    case PLANTS = 'Plants';
    case MIXED = 'Mixed';
}