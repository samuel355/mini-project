<?php

$dsn = "mysql:host=localhost;dbname=mini_project";

try {
    $db = new PDO($dsn, 'root', '');
}
catch(PDOException $e) {
    echo $e->getMessage();
}

