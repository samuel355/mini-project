<?php include './includes/head.php'; ?>
<body>

    <?php
        include 'includes/db.php';
        session_start();
        
        $output = '';

        if( !isset($_GET['activation_code']) AND !isset($_GET['email'])){
            $output .= '
			<div class="alert alert-danger">
                <h4><i class="icon fa fa-warning"></i> Error!</h4>
                Code to activate account not found.
            </div>
            <h4>You may <a href="signup.php">Signup</a> or back to <a href="index.php">Homepage</a>.</h4>
            '; 
            $email = $_GET['email'];
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
                    <div class="account-login section">
                        <div class="container">
                            <div class="row">
                            <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                                
                                <div class="card login-form inner-content">
                                <div class="card-body">
                                    <div class="title">
                                    <h3>Waste Management System</h3>
                                    <p class="text-danger"> Error Occured</p>
                                    </div>
                                    </h4>
                                </div>
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>
                  ';
                }

            }catch (PDOException $e){
                $_SESSION['error'] = $e->getMessage();
            }
        }
    ?>


  <?php include('./includes/scripts.php') ?>