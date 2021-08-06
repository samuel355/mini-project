<?php

    require 'db.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if(empty($_POST["firstname"])){
            http_response_code(400);
            echo json_encode("Please the firstname cannot be empty");
        }elseif(empty($_POST["lastname"])){
            http_response_code(400);
            echo json_encode("Please the lastname cannot be empty");
        }elseif(empty($_POST["email"])){
            http_response_code(400);
            echo json_encode("Your email is empty");
        }elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            http_response_code(400);
            echo json_encode("Please your email is invalid");
        }elseif(empty($_POST["user_address"])){
            http_response_code(400);
            echo json_encode("Please enter your address");
        }else {

            $firstname = trim($_POST['firstname']);
            $lastname = trim($_POST['lastname']);
            $email = trim($_POST['email']);
            $user_password = trim($_POST['password']);
            $user_password = PASSWORD_HASH($_POST['password'],PASSWORD_DEFAULT);
            $user_address = trim($_POST['address']);


                try {
                    //Insert user Values and Display success Message for registration details
                    $insert = "INSERT INTO users( firstname, lastname, user_password, email, user_address, registered_on, activation_code) 
                            VALUES (:firstname, :lastname, :user_password, :email,  :user_address, :registered_on, :activation_code)";
                    $stmt = $db->prepare($insert);
                    $stmt->execute([
                        'firstname' => $firstname,
                        'lastname' => $lastname,
                        'user_password' => $user_password,
                        'email' => $email,
                        'user_address' => $user_address,
                        'registered_on' => $registered_on,
                        'activation_code' => $activation_code
                    ]);

                    $userid = $db->lastInsertId();
                    

                }catch(PDOException $e){
                    $_SESSION['error'] = $e->getMessage();
                }

                http_response_code(200);
                echo json_encode('You have Created an account succesfully.');
         }

    } else {
        http_response_code(400);
        echo json_encode("Ooops");
    }

    exit;


?>