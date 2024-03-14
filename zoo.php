<?php

use App\Animals\Herbivores\Rabbit;
use App\Animals\Name;
use App\Animals\TypeOfMeal;

require_once('vendor/autoload.php');

$rabbit = new Rabbit(
    new Name('Tomek')
);

$meet =  TypeOfMeal::MEAT;
$plants = TypeOfMeal::PLANTS;

echo  $rabbit;


dd($rabbit->feed($plants));