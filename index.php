<?php

use App\Rectangle;
use App\User;

require_once __DIR__ . '/vendor/autoload.php';

/**
 * @var $rect
 */
$rect = new Rectangle(5, 10);
echo $rect->calcArea() . "\n";

/**
 * @var  $user
 */
$user = new User('Ahmed', 'Xantares');

