<?php

declare(strict_types=1);

namespace App\Animals;

use App\Food\MealInterface;

interface AnimalInterface
{
    public function feed(MealInterface $meal): string;
}