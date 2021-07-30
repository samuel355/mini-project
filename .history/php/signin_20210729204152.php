<?php
    session_start();
    ob_start();
    require '../includes/db.php';
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        if (empty($_POST['email'])){
            http_response_code(400);
            echo json_encode("Please Enter your email");
        }elseif (empty($_POST['password'])){
            http_response_code(400);
            echo json_encode("Please Enter Your Password");
        }else{

            try {
                $sql = "SELECT *, COUNT(*) AS numrows FROM users WHERE email =:email";
                $stmt = $db->prepare($sql);
                $stmt->execute([
                    ':email'=>$email
                ]);

                $row = $stmt->fetch();

                if($row['numrows'] > 0){
                    if($row['isVerified'] ==1){
                        if(password_verify($password, $row['password'])){
                            if($row['idAdmin'] == 1){
                                $_SESSION['id'] = session_id();
                                $_SESSION['email'] = $email;
                                $_SESSION['login'] = 'Success';
                                $_SESSION['admin'] = 'admin';

                                http_response_code(200);
                                echo json_encode("Processing...");
                                echo '<script>window.location.assign("http://localhost/mini-project/dashboard")</script>';

                            }else{
                                $_SESSION['id'] = session_id();
                                $_SESSION['email'] = $email;
                                $_SESSION['login'] = 'Success';
                                $_SESSION['client'] = 'client';
            
                                http_response_code(200);
                                echo json_encode("Processing...");
                                echo '<script>window.location.assign("http://localhost/mini-project/dashboard/event.php")</script>';
                         
                            }
                        }else{
                            http_response_code(400);
                            echo json_encode("Wrong Credentials");
                        }
                    }else{
                        http_response_code(400);
                        echo json_encode("Account not verified. Check your mail to verify");
                    }
                }else{
                    http_response_code(400);
                    echo json_encode("Email not found")l
                }

                if($stmt->rowCount() == 0){
                    http_response_code(400);
                    echo json_encode("Wrong Credentials");

                }elseif (password_verify($password, $data['password'])){
                    $_SESSION['id'] = session_id();
                    $_SESSION['email'] = $email;
                    $_SESSION['login'] = 'Success';
                    $_SESSION['admin'] = 'admin';

                    http_response_code(200);
                    echo json_encode("Processing...");
                    echo '<script>window.location.assign("http://localhost/mini-project/dashboard")</script>';

                }elseif(password_verify($password, $data['password'])){
                    $_SESSION['id'] = session_id();
                    $_SESSION['email'] = $email;
                    $_SESSION['login'] = 'Success';
                    $_SESSION['client'] = 'client';

                    http_response_code(200);
                    echo json_encode("Processing...");
                    echo '<script>window.location.assign("http://localhost/mini-project/dashboard/event.php")</script>';
             
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
