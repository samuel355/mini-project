<?php

$dsn = "mysql:host=localhost;dbname=miniproject";

try {
    $db = new PDO($dsn, 'root', '');
}
catch(PDOException $e) {
    echo $e->getMessage();
}

