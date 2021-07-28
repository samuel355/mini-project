<?php

session_start();
ob_start();
require '../includes/db.php';

if(isset($_GET['action'])  == 'register'){

    if(empty($_GET["firstname"])){
        http_response_code(400);
        echo json_encode("Please the firstname cannot be empty");
    }elseif(empty($_GET["lastname"])){
        http_response_code(400);
        echo json_encode("Please the lastname cannot be empty");
    }elseif(empty($_GET["username"])){
        http_response_code(400);
        echo json_encode("Please the username cannot be empty");
    }elseif(empty($_GET["email"])){
        http_response_code(400);
        echo json_encode("Your email is empty");
    }elseif(!filter_var($_GET["email"], FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo json_encode("Please your email is invalid");
    }elseif(empty($_GET['password'])){
        http_response_code(400);
        echo json_encode("Enter your password");
    }
    elseif(strlen($_GET["password"]) <= '5') {
        http_response_code(400);
        echo json_encode('Your Password Must Contain At Least 6 Characters !');
    }
    elseif(!preg_match("#[0-9]+#",$_GET["password"])) {
        http_response_code(400);
        echo json_encode("Your Password Must Contain At Least 1 Number !") ;
    }
    elseif(!preg_match("#[A-Z]+#",$_GET["password"])) {
        http_response_code(400);
        echo json_encode('Your Password Must Contain At Least 1 Capital Letter !');
    }
    elseif(!preg_match("#[a-z]+#",$_GET["password"])) {
        http_response_code(400);
        echo json_encode("Your Password Must Contain At Least 1 Lowercase Letter !");
    }elseif ($_GET["password"] !== $_GET["repassword"]){
        http_response_code(400);
        echo json_encode("Your Passwords do not match");
    }else{
        $firstname = trim($_GET['firstname']);
        $lastname = trim($_GET['lastname']);
        $username = trim($_GET['username']);
        $email = trim($_GET['email']);
        $password = trim($_GET['password']);
        $password = PASSWORD_HASH($_GET['password'],PASSWORD_DEFAULT);
        $address = trim($_GET['address']);

        $registered_on = date("M n, Y") ." At ". date("h:i A");

        //auto generated fields
        $reg_code = substr($_GET['firstname'],0,2).date('y').rand(0000,9999);

        //check if mail already exits
        $mailExits = $db->prepare("SELECT * FROM users WHERE email = '$email' ");
        if ($mailExits->fetch(PDO::FETCH_ASSOC)) {
            http_response_code(400);
            echo json_encode('Email Already Exits');

        } else {

            $_SESSION['firstname'] = $firstname;
            $_SESSION['lastname'] = $lastname;
            $_SESSION['email'] = $email;
            $_SESSION['username'] = $username;

            try {
                //Insert user Values and Display success Message for registration details
                $insert = "INSERT INTO u( firstname, lastname, username, email, password, address, registered_on) 
                        VALUES (:firstname, :lastname, :username, :email, :password, :address, :registered_on)";
                $stmt = $db->prepare($insert);
                $stmt->execute([
                    'firstname' => $firstname,
                    'lastname' => $lastname,
                    'username' => $username,
                    'email' => $email,
                    'password' => $password,
                    'dob' => $dob,
                    'phone' => $phone,
                    'address' => $address,
                    'registered_on' => $registered_on
                ]);
                $userid = $db->lastInsertId();

            }catch(PDOException $e){
                $_SESSION['error'] = $e->getMessage();
            }

            http_response_code(200);
            echo json_encode('You have Created an account succesfully');

        }

    }

} else {
    http_response_code(400);
    echo json_encode("Ooops");
}

exit;


