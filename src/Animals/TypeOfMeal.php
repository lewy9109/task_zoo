<?php

declare(strict_types=1);

namespace App\Animals;

enum TypeOfMeal
{
    case MEAT;
    case PLANTS;
    case MIXED;
}