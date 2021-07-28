<?php
require '../includes/db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(empty($_POST["firstname"])){
        http_response_code(400);
        echo json_encode("Please the firstname cannot be empty");
    }elseif(empty($_POST["lastname"])){
        http_response_code(400);
        echo json_encode("Please the lastname cannot be empty");
    }elseif(empty($_POST["username"])){
        http_response_code(400);
        echo json_encode("Please the username cannot be empty");
    }elseif(empty($_POST["email"])){
        http_response_code(400);
        echo json_encode("Email is required");
    }elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo json_encode("Please your email is invalid");
    }elseif(strlen($_POST["password"]) <= '5') {
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
        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $password = PASSWORD_HASH($_POST['password'],PASSWORD_DEFAULT);
        $address = trim($_POST['address']);

        $registered_on = date("M n, Y") ." At ". date("h:i A");

        //auto generated fields
        $reg_code = substr($_POST['firstname'],0,2).date('y').rand(0000,9999);

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


