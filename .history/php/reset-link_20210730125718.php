<?php

    session_start();
    ob_start();
    require '../includes/db.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        if(empty($_POST['password'])){
            http_response_code(400);
            echo json_encode("Enter your password");
        }elseif(empty($_POST['repassword'])){
            http_response_code(400);
            echo json_encode("Please repeat your password");
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

            $email = trim($_POST['email']);
            $user_password = trim($_POST['password']);
            $user_password = PASSWORD_HASH($_POST['password'],PASSWORD_DEFAULT);

            try{
                $query = "UPDATE users SET user_password=:user_password, reset_code=:reset_code WHERE email=:email";
                $stmtt = $db->prepare($query);
                $stmtt->execute([
                    ':user_password'=>$user_password,
                    ':email'=>$email,
                    ':reset_code'=>''
                ]);

            }catch(PDOException $e){
                $_SESSION['error'] = $e->getMessage();
            }

            http_response_code(200);
            echo
            echo '<script>window.location.assign("http://localhost/mini-project/signin.php")</script>';
        }
    }else{
        http_response_code(400);
        echo json_encode('Opps');
    }
    exit;
?>