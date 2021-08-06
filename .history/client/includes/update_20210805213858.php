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
            $photo = $_FILES['photo']['name'];

            if(!empty($photo)){
                move_uploaded_file($_FILES['photo']['tmp_name'], '../assets/img/profiles/'.$photo);
                $filename = $photo;
            }
            else{
                $filename = ' ';
            }


                try {
                    $
                    $stmt = $db->prepare();
                    $stmt->execute([
                        ':firstname'=>$firstname, 
                        ':lastname'=>$lastname, 
                        ':user_address'=>$user_address,  
                        ':phone'=>$phone, 
                        ':photo'=>$filename, 
                        ':email'=>$email
                    ]);

                    $_SESSION['success'] = 'Account updated successfully';

                    $userid = $db->lastInsertId();
                    

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