<?php

$dsn = "mysql:host=localhost;dbname=app_portal";

try {
    $db = new PDO($dsn, 'root', '');
}
catch(PDOException $e) {
    echo $e->getMessage();
}

