<?php
require 'functions.php';



try {
    
    $pdo = new PDO('mysql:host=localhost;MyTodo=', 'melvin', '');

} catch (PDOException $e) {

    die($e->getMessage());

}

$statement = $pdo->prepare('select * from todos');

$statement->execute();

$tasks = $statement->fetchAll();

var_dump($statement->fetchAll());











class Task
{
    protected $description;

    protected $completed = false;


    public function __construct($description)

    {

        $this->description = $description;
    }

    public function complete()
    {
        $this->completed = true;
    }

    public function isComplete()

    {

        return $this->completed;
    }
}



// $task = new Task('go to the store');

// $task->complete();

// dd($task->isComplete());








require 'index.view.php';
// require 'partials/agecheck.php';
// require 'partials/dieren.php';
// require 'partials/tasks.php';
