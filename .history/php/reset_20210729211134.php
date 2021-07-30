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

                }else{}

            }catch (PDOException $e){
                $_SESSION['error'] = $e->getMessage();
            }
        }
    } else {
        http_response_code(400);
        echo json_encode("Ooops");
    }

    exit;
