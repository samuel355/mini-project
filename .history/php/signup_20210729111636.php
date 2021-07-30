<?php

session_start();
ob_start();
require '../includes/db.php';

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
    }elseif(empty($_POST['password'])){
        http_response_code(400);
        echo json_encode("Enter your password");
    }
    elseif(strlen($_POST["password"]) <= '5') {
        http_response_code(400);
        echo json_encode('Your Password Must Contain At Least 6 Characters !');
    }
    elseif(!preg_match("#[0-9]+#",$_POST["password"])) {
        http_response_code(400);
        echo json_encode("Your Password Must Contain At Least 1 Number !") ;
    }
    elseif(!preg_match("#[A-Z]+#",$_POST["password"])) {
        http_response_code(400);
        echo json_encode('Your Password Must Contain At Least 1 Capital Letter !');
    }
    elseif(!preg_match("#[a-z]+#",$_POST["password"])) {
        http_response_code(400);
        echo json_encode("Your Password Must Contain At Least 1 Lowercase Letter !");
    }elseif ($_POST["password"] !== $_POST["repassword"]){
        http_response_code(400);
        echo json_encode("Your Passwords do not match");
    }else{
        $firstname = trim($_POST['firstname']);
        $lastname = trim($_POST['lastname']);
        $email = trim($_POST['email']);
        $user_password = trim($_POST['password']);
        $user_password = PASSWORD_HASH($_POST['password'],PASSWORD_DEFAULT);
        $user_address = trim($_POST['address']);

        $registered_on = date("M n, Y") ." At ". date("h:i A");

        //auto generated fields
        $activation_code = substr($_POST['firstname'],0,1).date('y').rand(0000,9999);

        //check if mail already exits
        $mailExits = $db->prepare("SELECT * FROM users WHERE email = '$email' ");
        if ($mailExits->fetch(PDO::FETCH_ASSOC)) {
            http_response_code(400);
            echo json_encode('Email Already Exits');

        } else {

            $_SESSION['firstname'] = $firstname;
            $_SESSION['lastname'] = $lastname;
            $_SESSION['email'] = $email;

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

                $link = "<a href='http/email-verification.php?key=".$email."&activation_code=".$activation_code."'> Click and Verify Email </a>";
                //Send email
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];


                $email_message = "
                    Hello ".$firstname." + ".$lastname. "
                    Thank you for signin up. click on the link below to verify your email ".$link."
                ";
                $to = $email;
                $subject = 'Account Verification';
                $message = $email_message;
                $headers = "From: Waste Management System";

                mail ($to, $subject, $message, $headers);

            }catch(PDOException $e){
                $_SESSION['error'] = $e->getMessage();
            }

            http_response_code(200);
            echo json_encode('You have Created an account succesfully.');
            echo '<script>window.location.assign("http://localhost/mini-project/sucess.php")</script>';

        }

    }

} else {
    http_response_code(400);
    echo json_encode("Ooops");
}

exit;


