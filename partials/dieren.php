<?php

$dieren = [
    'koe',
    'kip',
    'paard',
    'reiger',
    'tijger',
    'emoe',
    'buffel'
];

?>




<h1>Dieren lijst</h1>
    <ul>
        <?php foreach ($dieren as $dier) {
            echo "<li>$dier</li>";
        }   ?>
    </ul>
    