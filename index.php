<?php
require 'functions.php';













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





















$dieren = [
    'koe',
    'kip',
    'paard',
    'reiger',
    'tijger',
    'emoe',
    'buffel'
];





$task = [
    'title'         =>  'fietsen',
    'due'           =>  'morgen',
    'assigned_to'   =>  'jan',
    'completed'     =>  true,
    'onTime'        =>  false
];


ageCheck(20);





require 'index.view.php';
