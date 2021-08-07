<div class="header">
			
            <!-- Logo -->
            <div class="header-left">
                <a href="index.php" class="logo">
                    <img src="assets/img/logo.png" width="40" height="40" alt="">
                </a>
            </div>
            <!-- /Logo -->
            
            <a id="toggle_btn" href="javascript:void(0);">
                <span class="bar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>
            
            <!-- Header Title -->
            <div class="page-title-box">
                <h3>Waste Management</h3>
            </div>
            <!-- /Header Title -->
            
            <a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>
            
            <!-- Header Menu -->
            <ul class="nav user-menu">
            
                <!-- Search -->
                <li class="nav-item">
                    <div class="top-nav-search">
                        <a href="javascript:void(0);" class="responsive-search">
                            <i class="fa fa-search"></i>
                       </a>
                        <form action="search.html">
                            <input class="form-control" type="text" placeholder="Search here">
                            <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </li>
                <!-- /Search -->
        
            
                <!-- Notifications -->
                <li class="nav-item dropdown">
                    <?php 
                    
                    ?>
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i> <span class="badge badge-pill">3</span>
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Notifications</span>
                        </div>
                        <div class="noti-content">
                            <ul class="notification-list">

                                <?php 
                                    include 'includes/db.php';

                                    try{

                                        $qry = "SELECT * FROM messages ORDER BY id DESC";
                                        $prep = $db->prepare($qry);
                                        $prep->execute();
                                        while($data = $prep->fetch(PDO::FETCH_ASSOC)){
                                            echo '
                                                <li class="notification-message">
                                                    <a href="activities.html">
                                                        <div class="media">
                                                            <span class="avatar">
                                                                <img alt="" src="assets/img/profiles/avatar-02.jpg">
                                                            </span>
                                                            <div class="media-body">
                                                                <p class="noti-details"><span class="noti-title"> '.$data['firstname'].'</span> '.$data['subject_'].' <span class="noti-title">'.$data['message_'].'</span></p>
                                                                <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            ';
                                        }
                                    }catch(PDOException $e){
                                        $e->getMessage();
                                    }
                                ?>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="activities.php">View all Notifications</a>
                        </div>
                    </div>
                </li>
                <!-- /Notifications -->
                

                <li class="nav-item dropdown has-arrow main-drop">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <span class="user-img"><img src="assets/img/profiles/avatar-21.jpg" alt="">
                        <span class="status online"></span></span>
                        <span><?php echo $row['firstname'] ?></span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="client-profile.php">My Profile</a>
                        <a class="dropdown-item" href="settings.php">Settings</a>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>
            </ul>
            <!-- /Header Menu -->
            
            <!-- Mobile Menu -->
            <div class="dropdown mobile-user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="client-profile.php">My Profile</a>
                    <a class="dropdown-item" href="settings.php">Settings</a>
                    <a class="dropdown-item" href="login.php">Logout</a>
                </div>
            </div>
            <!-- /Mobile Menu -->
            
        </div>