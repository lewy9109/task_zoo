<?php

declare(strict_types=1);

namespace App\Animals;

interface AnimalInterface
{
    public function feed(TypeOfMeal $meal): string;
}