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
                    $sql1 = "UPDATE users SET activation_code=:activation_code WHERE email=";
                    $stmt1 = $db->prepare($sql1);
                    $stmt1->execute([
                        ':activation_code'=> 1 ,
                    ]);
                }

            }catch (PDOException $e){
                $_SESSION['error'] = $e->getMessage();
            }
        }
    ?>

  <div class="preloader">
    <div class="preloader-inner">
      <div class="preloader-icon">
        <span></span>
        <span></span>
      </div>
    </div>
  </div>

  <div class="account-login section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
          
          <div class="card login-form inner-content">
            <div class="card-body">
              <div class="title">
                <h3>Waste Management System</h3>
                <p>Thank you for signing up. Please verify your email to continue with us</p>
              </div>
              <div class="alt-option">
                <a href="index.php" class="option-button">
                    Go Home
                </a>
              </div>
              </h4>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <?php include('./includes/scripts.php') ?>