<?php

class Connection

{
    public static function make()
    {
        $host = 'localhost';
        $dbname = 'MyTodo';
        $username = 'melvin';
        $password = '';

        try {
            return new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        } catch (PDOException $pe) {
            die("Could not connect to the database $dbname :" . $pe->getMessage());
        }
    }
}
