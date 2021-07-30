<?php include './includes/head.php'; ?>
<body>

    <?php
        include 'includes/db.php';
        session_start();
        
        $output = '';

        if( !isset($_GET['activation_code']) AND !isset($_GET['email'])){
            $output .= '
                <div class="account-login section">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                                
                                <div class="card login-form inner-content">
                                    <div class="card-body">
                                        <div class="alert alert-danger">
                                            <h4><i class="icon fa fa-warning"></i> Error!</h4>
                                            Code to activate account not found.
                                        </div>
                                        <p>You may <a class="text-sucess" href="signup.php">Signup</a> or back to <a href="index.php">Homepage</a>.</p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            '; 

        }
    ?>

    <div class="account-login section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                    
                    <div class="card login-form inner-content">
                        <div class="card-body">
                            <div class="alert alert-danger">
                                <h4><i class="icon fa fa-warning"></i> Error!</h4>
                                Code to activate account not found.
                            </div>
                            <h4>You may <a href="signup.php">Signup</a> or back to <a href="index.php">Homepage</a>.</h4>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

  <?php include('./includes/scripts.php') ?>