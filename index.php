<?php
require_once __DIR__.'/vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', '1');

use ThangPhu\UnlockOOP\Pig;
use ThangPhu\UnlockOOP\Shark;
use ThangPhu\UnlockOOP\Dog;

$Zhu_Bajie = new Pig();
$Zhu_Bajie->voice();
$Zhu_Bajie->color();
echo "\n";

$Spike = new Dog();
$Spike->voice();
$Spike->color();
echo "\n";

$babyShark = new Shark();
$babyShark->setName('do do do');
$babyShark->getName();
echo "\n";
$babyShark->setPlace('ocean');
$babyShark->getPlace();
echo "\n";
$babyShark->setWeight('500kg');
echo $babyShark->getWeight();
echo "\n";

