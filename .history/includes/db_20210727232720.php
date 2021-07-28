<?php

$dsn = "mysql:host=localhost;dbname=mini_project";

try {
    $db = new PDO($dsn, 'root', '');
    echo "database connected successfully"
}
catch(PDOException $e) {
    echo $e->getMessage();
}

