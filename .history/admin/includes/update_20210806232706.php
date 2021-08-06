<?php

    require 'db.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if(empty($_POST["firstname"])){
            http_response_code(400);
            echo json_encode("Please Enter your firstname");
        }elseif(empty($_POST["lastname"])){
            http_response_code(400);
            echo json_encode("Enter Your Lastname");
        }elseif(empty($_POST["phone"])){
            http_response_code(400);
            echo json_encode("Add phone");
        }elseif(empty($_POST["user_address"])){
            http_response_code(400);
            echo json_encode("Please enter your address");
        }else {

            
            $firstname = trim($_POST['firstname']);
            $lastname = trim($_POST['lastname']);
            $email = trim($_POST['email']);
            $user_address = trim($_POST['user_address']);
            $phone = $_POST['phone'];
            $user_image = $_FILES['user-image']['name'];
            $temp = $_FILES['user-image']['tmp_name'];
            $path = 
            move_uploaded_file($temp, '../assets/img/profiles/'.$user_image);

            try {
                
                $query = "UPDATE users SET firstname=:firstname, lastname=:lastname, user_address=:user_address, phone=:phone, user_image=:user_image WHERE email=:email";
                $stmt = $db->prepare($query);
                $stmt->execute([
                    ':firstname'=>$firstname, 
                    ':lastname'=>$lastname, 
                    ':user_address'=>$user_address,  
                    ':phone'=>$phone, 
                    ':user_image'=>$user_image, 
                    ':email'=>$email
                ]);

                $_SESSION['success'] = 'Account updated successfully';

                $userid = $db->lastInsertId();
                header('location: client-profile.php');
                

            }catch(PDOException $e){
                $_SESSION['error'] = $e->getMessage();
            }

            http_response_code(200);
            echo json_encode('You have Updated your profile succesfully.');
         }

    } else {
        http_response_code(400);
        echo json_encode("Ooops");
    }

    exit;


?>