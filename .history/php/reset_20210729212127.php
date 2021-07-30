<?php
    session_start();
    ob_start();
    require '../includes/db.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $email = trim($_POST['email']);

        if (empty($_POST['email'])){
            http_response_code(400);
            echo json_encode("Please Enter your email");
        }else{
            try {
                $sql = "SELECT *, COUNT(*) AS numrows FROM users WHERE email =:email";
                $stmt = $db->prepare($sql);
                $stmt->execute([
                    ':email'=>$email
                ]);
                $row = $stmt->fetch();
                if($row['numrows'] == 0){
                    http_response_code(400);
                    echo json_encode("Email not found");

                }else{
                    //auto generated fields
                    $reset_code = substr($email,0,1).date('y').rand(0000,9999);
                    //Activation link to email
                    $link = "<a href='http://localhost/mini-project/reset_link.php?key=".$email."&reset_code=".$reset_code."'> Click to Reset Your Password </a>";

                    try{

                    }catch()

                }

            }catch (PDOException $e){
                $_SESSION['error'] = $e->getMessage();
            }
        }
    } else {
        http_response_code(400);
        echo json_encode("Ooops");
    }

    exit;
