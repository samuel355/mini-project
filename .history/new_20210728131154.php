<?php 
	if(isset($_POST['action'])  == 'register'){
		include 'includes/db.php';
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];
		$address = $_POST['address'];

		//Validation
		$error = array(
			'error_status' => 0
		);

		if(empty($firstname)){
			$error['error_status'] = 1;
			$error['name'] = 'First Name missing';
		}
		if(empty($lastname)){
			$error['error_status'] = 1;
			$error['name'] = 'Last Name missing';
		}
		if(empty($email)){
			$error['error_status'] = 1;
			$error['name'] = 'Email missing';
		}
		if($error['error_status'] > 0){
			echo json_encode($error);
			exit();
		}
	}
?>