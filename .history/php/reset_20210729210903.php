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
                $sql = "SELECT *, COUNT(*)  FROM users WHERE email =:email";
                $stmt = $db->prepare($sql);
                $stmt->execute([
                    ':email'=>$email
                ]);
                $data = $stmt->fetch(PDO::FETCH_ASSOC);
                if($stmt->rowCount() == 0){
                    http_response_code(400);
                    echo json_encode("Email not found");

                }elseif (password_verify($password, $data['password'])){
                    $_SESSION['id'] = session_id();
                    $_SESSION['email'] = $email;
                    $_SESSION['username'] = $data['username'];
                    $_SESSION['admin_id'] = $data['admin_id'];
                    $_SESSION['firstname'] = $data['firstname'];
                    $_SESSION['login'] = 'Success';

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
