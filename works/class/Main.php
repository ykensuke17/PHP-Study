<?php

// Userクラスの読み込み
require 'Gun.php';

$mainWeapon = new Gun("AK47", 30);
$subWeapon = new Gun("Mosin-Nagant", 5);

// 現在の状態を表示
$mainWeapon->echoStatus();
$subWeapon->echoStatus();


$mainWeapon->setExtendedMagazine(10);
$mainWeapon->echoStatus();

$mainWeapon->relaod();
$mainWeapon->echoStatus();

$mainWeapon->unsetExtendedMagazine();

$mainWeapon->echoStatus();
$subWeapon->echoStatus();
