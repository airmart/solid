<?php

use App\Rectangle;

require_once __DIR__ . '/vendor/autoload.php';

/**
 * @var $rect
 */
$rect = new Rectangle(5, 10);
echo $rect->calcArea();

