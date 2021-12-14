<?php

use App\Rectangle;
use App\User;
use App\Person;
use App\Employee;
use App\Developer;

require_once __DIR__ . '/vendor/autoload.php';

/**
 * @var $rect
 */
$rect = new Rectangle(5, 10);
echo $rect->calcArea() . "\n";

/** @var $user */
$user = new User('Ahmed', 'Xantares');

/** @var  $employee */
$employee = new Employee('Bob', 'Ross', '54', '11', '21', '228');

/** @var $developer */
$developer = new Developer('Bill', 'Wood', '37', '22', '42', '133',
    'Senior', 'Rubi');

/** @var $person */
$person = new Person('Salomon', 'Hill', '28');

/** @var Person[] */
$personList = [$employee, $developer, $person];

foreach ($personList as $onePerson){
    $onePerson->greeting();
}
