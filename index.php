<?php
require 'functions.php';
require 'dd.php';

$host = 'localhost';
$dbname = 'MyTodo';
$username = 'melvin';
$password = '';


try {

    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);


} catch (PDOException $pe) {

    die("Could not connect to the database $dbname :" . $pe->getMessage());

}




$statement = $pdo->prepare('select * from todos');

$statement->execute();

$tasks = $statement->fetchAll(PDO::FETCH_OBJ);

dd($tasks);











// class Task
// {
//     protected $description;

//     protected $completed = false;


//     public function __construct($description)

//     {

//         $this->description = $description;
//     }

//     public function complete()
//     {
//         $this->completed = true;
//     }

//     public function isComplete()

//     {

//         return $this->completed;
//     }
// }



// $task = new Task('go to the store');

// $task->complete();

// dd($task->isComplete());








// require 'index.view.php';
// require 'partials/agecheck.php';
// require 'partials/dieren.php';
// require 'partials/tasks.php';
