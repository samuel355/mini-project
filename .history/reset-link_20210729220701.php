<?php include './includes/head.php'; ?>
<body class="bg-light">

    <?php
        include 'includes/db.php';
        session_start();
        
        $output = '';

        if( !isset($_GET['reset_code']) OR !isset($_GET['email'])){
            $output .= '
                <div class="alert alert-danger">
                    <h4 class="aligns-item-center"><i class="icon fa fa-warning"></i> Error!</h4>
                    Code to reset your password NOT found.
                </div>
            '; 

        }else{
            $reset_code = $_GET['reset_code'];
            $email = $_GET['email'];

            $sql = "SELECT *, COUNT(*) AS numrows FROM users WHERE reset_code=:reset_code AND email=:email";
            $stmt = $db->prepare($sql);
            $stmt->execute([
                ':reset_code'=>$reset_code,
                ':email'=>$email,
            ]);

            $row = $stmt->fetch();

            $check = $row['numrows'];

            if($row['numrows'] > 0){
                //If
                if($row['reset_code']){
                    $output .= '
                        <form method="POST" id="reset-link-form" role="form">
                            <div class="input-head">
                                <div class="form-group input-group">
                                    <label><i class="lni lni-lock-alt"></i></label>
                                    <input class="form-control" type="password" id="password" name="password" placeholder="Your password">
                                    
                                </div>
                                <div class="form-group input-group">
                                    <label><i class="lni lni-lock-alt"></i></label>
                                    <input class="form-control" type="password" id="repassword" name="repassword" placeholder="Confirm password">
                                    
                                </div>

                                <div class="button">
                                    <button class="btn" name="submit" type="submit" id="submit">Create Account</button>
                                </div>
                            </div>
                        </form>
                    ';
                }else{
                    
                    $output .= '
                        <div class="alert alert-danger">
                            <h4 class="aligns-item-center"><i class="icon fa fa-warning"></i> Error!</h4>
                            Reset Code not found
                        </div>
                    '; 

                }

            }else{
                $output .= '
                    <div class="alert alert-danger">
                        <h4 class="aligns-item-center"><i class="icon fa fa-warning"></i> Error!</h4>
                        Something went wrong...You can\'t reset your password
                    </div>
                '; 
            }
        }
    ?>

    <div class="account-login section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                    <div class="card login-form inner-content">
                        <div class="card-body">
                            <!--notifications-->
							<div class="row">
								<div class="col-12">

									<div id="process" class="alert alert-primary alert-dismissible fade show form-group input-group" role="alert" style="display: none;">
										<strong>Processing ! .... </strong>
										<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
									</div>

									<div id="alert" class="alert alert-danger alert-dismissible fade show form-group input-group" role="alert" style="display: none;">
										<strong id="messages"></strong>
										<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
									</div>

									<div id="succ" class="alert alert-info alert-dismissible fade show form-group input-group" role="alert" style="display: none;">
										<strong id="done"></strong>
										<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
									</div>
								</div>
							</div>
                            <!--/notifications-->

                            <?php echo $output ?> 
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

  <?php include('./includes/scripts.php') ?>