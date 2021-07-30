<?php
    session_start();
    ob_start();
    require '../includes/db.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $remember_me = trim($_POST['remeber_me']);

        if (empty($_POST['email'])){
            http_response_code(400);
            echo json_encode("Please Enter your email");
        }elseif (empty($_POST['password'])){
            http_response_code(400);
            echo json_encode("Please Enter Your Password");
        }else{
            try {
                $sql = "SELECT * FROM users WHERE email =:email";
                $stmt = $db->prepare($sql);
                $stmt->execute([
                    ':email'=>$email
                ]);
                $data = $stmt->fetch(PDO::FETCH_ASSOC);
                if($stmt->rowCount() == 0){
                    http_response_code(400);
                    echo json_encode("Wrong Credentials");

                }elseif (password_verify($password, $data['password']) && $data['isAdmin'] == 1){
                    $_SESSION['id'] = session_id();
                    $_SESSION['email'] = $email;
                    $_SESSION['login'] = 'Success';
                    $_SESSION['admin']

                    http_response_code(200);
                    echo json_encode("Processing...");
                    echo '<script>window.location.assign("http://localhost/app.portal/modules/admin")</script>';

                }else{
                    http_response_code(400);
                    echo json_encode("Wrong Credentials");
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
