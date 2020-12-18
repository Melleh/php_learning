<?php

class Task {
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


$task = [

    'title'         =>  'fietsen',

    'due'           =>  'morgen',

    'assigned_to'   =>  'jan',

    'completed'     =>  true,

    'onTime'        =>  false

];

?>



<h1>To do lijstje</h1>
    <li>
        <strong>Name: </strong> <?= $task['title']; ?>
    </li>
    <li>
        <strong>Deadline: </strong> <?= $task['due']; ?>
    </li>
    <li>
        <strong>Door: </strong> <?= $task['assigned_to']; ?>
    </li>
    <li>
        <strong>Status: </strong>
        <?php if ($task['completed']) : ?>
            <span class="icon">&#9989</span>

        <?php else : ?>

            <span class="icon">&#10062</span>

        <?php endif ?>
    </li>
    <li>
        <strong>Op tijd: </strong>
        <?php if ($task['onTime']) : ?>
            <span class="icon">&#9989</span>

        <?php else : ?>

            <span class="icon">&#10062</span>

        <?php endif ?>
    </li>


</ul>