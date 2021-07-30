<?php

    session_start();
    ob_start();
    require '../includes/db.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        if(empty($_POST['password'])){
            http_response_code(400);
            echo json_encode("Enter your password");
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
            $emal = trim($_POST['email']);
            $user_password = trim($_POST['password']);
            $user_password = PASSWORD_HASH($_POST['password'],PASSWORD_DEFAULT);

            try{
                $query = "UPDATE users SET user_password=:user_password WHERE email=:email";
                $stmtt = $db->prepare($query);
                $stmtt->execute([
                    ':user_password'=>$user_password,
                    ':email'=>$email
                ]);

                $data = $stmtt->fetch(PDO::FETCH_ASSOC)
                if($data)

            }catch(PDOException $e){
                $_SESSION['error'] = $e->getMessage();
            }
        }
    }