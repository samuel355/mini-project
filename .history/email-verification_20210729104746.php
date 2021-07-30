<?php include './includes/head.php'; ?>
<body>

    <?php
        if($_GET['key'] && $_GET['token']){
            include 'includes/db.php';
            $email = $_GET['key'];
            $activation_code = $_GET['activation_code'];

            try{
                
                $sql = "SELECT * FROM users WHERE email=:email AND actionvation_code=:activation_code";
                $stmt = $db->prepare($sql);
                $stmt->execute([
                    ':email'=>$email,
                    ':activation_code'=>$activation_code
                ]);

                $data = $stmt->fetch(PDO::FETCH_ASSOC);

                if($stmt->rowCount() > 0){
                    //Update Database
                    $sql1 = "UPDATE users SET activation_code=:activation_code WHERE email=:email";
                    $stmt1 = $db->prepare($sql1);
                    $stmt1->execute([
                        ':activation_code'=> 1 ,
                        ':email'=>$email
                    ]);
                }else{
                  echo '
                        
                  ';
                }

            }catch (PDOException $e){
                $_SESSION['error'] = $e->getMessage();
            }
        }
    ?>


  <?php include('./includes/scripts.php') ?>