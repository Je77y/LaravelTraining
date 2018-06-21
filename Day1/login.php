<?php 
	include("db.php");
 	session_start();	

	$email = $_POST['email'];
	$password = $_POST['password'];

	$query = "SELECT us.* FROM users us JOIN role_users rl_us on us.id = rl_us.user_id WHERE email like :femail and password like :fpassword and rl_us.role_id = 1";	

	$database = new Database();
	$database->query($query);
	$database->bind(':femail', $email);
	$database->bind(':fpassword', $password);

	$user = $database->single();

	if ($user) {
		$_SESSION['signed_in'] = true;
		$_SESSION['user_id'] = $user['id'];
	}

	header('location: index.php');
