<?php
require_once __DIR__.'/vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', '1');

use ThangPhu\UnlockOOP\Pig;
use ThangPhu\UnlockOOP\Shark;
use ThangPhu\UnlockOOP\Dog;

$Zhu_Bajie = new Pig();
echo $Zhu_Bajie->voice();
echo $Zhu_Bajie->color();
echo "\n";

$Spike = new Dog();
echo $Spike->voice();
echo $Spike->color();
echo "\n";

$babyShark = new Shark();
$babyShark->setName('do do do');
echo $babyShark->getName();
echo "\n";
$babyShark->setPlace('ocean');
echo $babyShark->getPlace();
echo "\n";
$babyShark->setWeight('500kg');
echo $babyShark->getWeight();
echo "\n";

