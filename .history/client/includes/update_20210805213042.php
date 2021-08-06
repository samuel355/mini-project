<?php

    require 'db.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if(empty($_POST["firstname"])){
            http_response_code(400);
            echo json_encode("Please Enter your firstname");
        }elseif(empty($_POST["lastname"])){
            http_response_code(400);
            echo json_encode("Enter Your Lastname");
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
            $user_address = trim($_POST['address']);
            $phone = $_POST['phone'];
            $photo = $_FILES['photo']['name'];

            if(!empty($photo)){
                move_uploaded_file($_FILES['photo']['tmp_name'], '../assets/img/profiles/'.$photo);
                $filename = $photo;
            }
            else{
                $filename = 'assets/img/profiles/avatar-09.jpg';
            }


                try {
                    $stmt = $conn->prepare("UPDATE users SET firstname=:firstname, lastname=:lastname, user_address=:user_address, phone=:phone, photo=:photo WHERE email=:email");
                    $stmt->execute(['email'=>$email,'user_address'=>$user_address, 'digital_address_code'=>$digital_address_code, 'country'=>$country, 'telephone'=>$telephone, 'firstname'=>$firstname, 'lastname'=>$lastname, 'photo'=>$filename, 'id'=>$admin['id']]);

                    $_SESSION['success'] = 'Account updated successfully';

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