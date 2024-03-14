<?php

require_once('vendor/autoload.php');

use App\Animals\Omnivores\Fox;
use App\Animals\Herbivores\Rabbit;
use App\Animals\Name;
use App\Food\Lettuce;
use App\Food\PorkChop;
use App\Zoo;

$rabbit = new Rabbit(
    new Name('Tomek')
);

$fox = new Fox(
    new Name('Chytruesk')
);

$porkChop = new PorkChop();
$lettuce = new Lettuce();

echo  $rabbit.PHP_EOL;
echo  $rabbit->combFur().PHP_EOL;

echo $rabbit->feed($lettuce).PHP_EOL;

$zoo = new Zoo();
dump($zoo->toArray());

$zoo->add($rabbit);
dump($zoo->toArray());

$zoo->add($fox);
dump($zoo->toArray());

dd($rabbit->feed($lettuce));