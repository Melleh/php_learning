<?php

function ageCheck($age)
{
    if ($age <= 18) {
        echo 'not allowed';
    } else {
        echo 'come in';
    }
}

function dd($data){
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}

