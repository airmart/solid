<?php

use App\Car;
use App\Models\Post;
use App\Models\User;
use App\Rectangle;
use App\Repositories\PostRepository;
use App\Repositories\UserRepository;
use App\Person;
use App\Employee;
use App\Developer;
use App\UserMongoDBRepo;
use App\UserPostgresRepo;
use App\UserService;

require_once __DIR__ . '/vendor/autoload.php';

/**
 * @var $rect
 */
$rect = new Rectangle(5, 10);
echo $rect->calcArea() . "\n";



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

$car = new Car();
$car->drive();

$userService = new UserService(new UserMongoDBRepo());
$userService->filterUserByAge(15);

$user = new UserRepository();
$data = ['id' => '0', 'username' => 'Svetlana', 'password' => '1488'];
$dataUpdate = ['id' => '11', 'username' => 'Oksana', 'password' => '228'];

var_dump($user->store($data));
var_dump($user->show(0));
var_dump($user->update('0', $dataUpdate));
$user->delete(0);


$postRepo = new PostRepository();
$postData = ['id' => '1', 'title' => 'Duce', 'text' => 'with best regards', 'userId' => 97];
$postDataUpdate = ['id' => '1', 'title' => 'Tatum', 'text' => 'loh', 'userId' => 47];

var_dump($postRepo->store($postData));
var_dump($postRepo->show(1));
var_dump($postRepo->update('1', $postDataUpdate));
$postRepo->delete(1);
