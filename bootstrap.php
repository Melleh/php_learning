<?php

require 'database/Connection.php';
require 'database/QueryBuilder.php';
require 'dd.php';



return new QueryBuilder(
    
    Connection::make()

);
