<?php

use App\Animals\Herbivores\Rabbit;
use App\Animals\Name;

require_once('vendor/autoload.php');



$rabbit = new Rabbit(
    new Name('Tomek')
);


echo  $rabbit;
//dd($rabbit);