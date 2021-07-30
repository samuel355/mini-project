<?php

    session_start();
    ob_start();
    require '../includes/db.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        if(empty($_POST['password'])){
            http_response_code(400);
            echo json_encode("Enter your password");
        }
    }