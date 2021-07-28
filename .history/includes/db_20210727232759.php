<?php

$dsn = "mysql:host=localhost;dbname=mini_project";

try {
    $db = new PDO($dsn, 'root', '');
    if(db){

    }
}
catch(PDOException $e) {
    echo $e->getMessage();
}

