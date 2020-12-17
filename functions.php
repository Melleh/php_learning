<?php

function ageCheck($age)
{
    if ($age <= 18) {
        echo 'not allowed';
    } else {
        echo 'come in';
    }
}

function dd()
{
    $args = func_get_args();
    if (count($args))
    {
        echo "<pre>";
        foreach ($args as $arg)
        {
            var_dump($arg);
        }
        echo "</pre>";
        die();
    }
}

