<?php

function ageCheck($age)
{
    if ($age <= 18) {
        echo 'not allowed';
    } else {
        echo 'come in';
    }
}


echo '<pre>';

ageCheck(20);

echo '</pre> <pre>';

ageCheck(15);

echo '</pre>';
