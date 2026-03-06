<?php
// Verwenden von rand()
$randomNumber = rand(1, 100);
echo "Zufallszahl (rand()): $randomNumber<br>";

// Verwenden von mt_rand()
$betterRandomNumber = mt_rand(1, 50);
echo "Zufallszahl (mt_rand()): $betterRandomNumber<br>";


use Random\Randomizer;

$randomizer = new Randomizer();
$newRandomNumber = $randomizer->getInt(1, 100);
echo "Zufallszahl (Random\\Randomizer): $newRandomNumber<br>";