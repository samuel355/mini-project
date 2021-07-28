<?php
require '../includes/db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $image = $_FILES['photo']['name'];
    if(!empty($image)){
        move_uploaded_file($_FILES['photo']['tmp_name'], '../assets/img/students/'.$image);
    }else{
        $image = "assets/img/user.jpg";
    }

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
    }elseif ($_POST["password"] !== $_POST["cpassword"]){
        http_response_code(400);
        echo json_encode("Your Passwords do not match");
    }elseif (empty($_POST['country'])){
        http_response_code(400);
        echo json_encode('Please Select Country of origin');
    }elseif (empty($_POST['dob'])){
        http_response_code(400);
        echo json_encode('Please add date of birth');
    }else{
        $title = trim($_POST['title']);
        $gender = trim($_POST['gender']);
        $firstname = trim($_POST['firstname']);
        $lastname = trim($_POST['lastname']);
        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $password = PASSWORD_HASH($_POST['password'],PASSWORD_DEFAULT);
        $address = trim($_POST['address']);
        $country = trim($_POST['country']);
        $dob = trim($_POST['dob']);
        $phone = $_POST['phone'];

        $registered_on = date("M n, Y") ." At ". date("h:i A");

        //auto generated fields
        $student_id = substr($_POST['firstname'],0,3).date('y').rand(0000,9999);

        //check if mail already exits
        $mailExits = $db->prepare("SELECT * FROM students WHERE email = '$email' ");
        if ($mailExits->fetch(PDO::FETCH_ASSOC)) {
            http_response_code(400);
            echo json_encode('Email Already Exits');

        } else {

            $_SESSION['gender'] = $gender;
            $_SESSION['firstname'] = $firstname;
            $_SESSION['lastname'] = $lastname;
            $_SESSION['email'] = $email;
            $_SESSION['student_id'] = $student_id;
            $_SESSION['username'] = $username;

            try {
                //Insert user Values and Display success Message for registration details
                $insert = "INSERT INTO students(title, gender, student_id, firstname, lastname, username, email, password, dob, phone, address, country, image, registered_on) 
                        VALUES (:title, :gender, :student_id, :firstname, :lastname, :username, :email, :password, :dob, :phone, :address, :country, :image, :registered_on)";
                $stmt = $db->prepare($insert);
                $stmt->execute([
                    'title' => $title,
                    'gender' => $gender,
                    'student_id' => $student_id,
                    'firstname' => $firstname,
                    'lastname' => $lastname,
                    'username' => $username,
                    'email' => $email,
                    'password' => $password,
                    'dob' => $dob,
                    'phone' => $phone,
                    'address' => $address,
                    'country' =>$country,
                    'image' => $image,
                    'registered_on' => $registered_on
                ]);
                $userid = $db->lastInsertId();

            }catch(PDOException $e){
                $_SESSION['error'] = $e->getMessage();
            }

            http_response_code(200);
            echo json_encode('You have Added a Student succesfully');

        }

    }

} else {
    http_response_code(400);
    echo json_encode("Ooops");
}

exit;


