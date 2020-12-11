<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        header {
            background-color: grey;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>To do lijstje</h1>
    <!-- <ul>
        <?php foreach ($task as $tasks => $value) : ?>
            <li>
                <strong><?= ucwords($tasks); ?>: </strong> <?= $value; ?>
            </li>
        <?php endforeach ?>
    </ul> -->

    <ul>

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







    <!-- <h1>Dieren lijst</h1>
    <ul>
        <?php foreach ($dieren as $dier) {
            echo "<li>$dier</li>";
        }   ?>
    </ul> -->






</body>

</html>