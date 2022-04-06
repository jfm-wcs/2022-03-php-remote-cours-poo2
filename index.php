<?php

require 'autoload.php';
// require_once './src/Container.php';
// require_once './src/Amphora.php';
// require_once './src/Bottle.php';
// require_once './src/Boat.php';
// require_once './src/RowBoat.php';
// require_once './src/Member.php';
// require_once './src/Game/Member.php';

use App\Member;
use Game\Member as GameMember;

echo Member::$name . PHP_EOL;
echo GameMember::$name . PHP_EOL;

$truc = new GameMember();

$bottle = new Bottle(100, "Bottle 1");
$bottle->setFill(50);

$amphora = new Amphora(500, "Amphora 1");
$amphora->setFill(150);

$boat = new Boat(20);
$boat->load($amphora);
$boat->load($bottle);

$boat2 = new Boat(20);
$boat3 = new Boat(20);
$boat4 = new Boat(20);

// echo Boat::getBoatCounter() . PHP_EOL;

// var_dump($boat->getContainers());
// echo $boat::MAX_AMPHORAE;

$amphora2 =  $amphora;
$amphora2->setLabel("Amphora 2");

// var_dump($amphora instanceof Amphora);

$rowBoat = new RowBoat(30, 10);
// echo $rowBoat->getSpeed();
