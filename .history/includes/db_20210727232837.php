<?php

$dsn = "mysql:host=localhost;dbname=mini_project";

try {
    $db = new PDO($dsn, 'root', '');
    if($db){
        
        echo "database connected successfully";
    }else{
        echo "Sorry something went wrong connect"
    }
}
catch(PDOException $e) {
    echo $e->getMessage();
}

