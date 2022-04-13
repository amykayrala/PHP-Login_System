<?php 

	// Allow the config
	define('__CONFIG__', true);

	// Require the config
	require_once "../inc/config.php";

	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		// Always retutn JSON format
		header('Content-Type: application/json');

		$return = [];

		$email = Filter::String( $_POST['email']);
		$password = $_POST['password'];


		$user_found = User::Find($email, true);

		if($user_found) {
			//User exists, try and sign them in
			$user_id['user_id'] =  (int) $user_found['user_id'];
			$hash = (string) $user_found['password'];

			if(password_verify($password, $hash)) {
				// User is signed in
				$return['redirect'] =  'GitHub/PHP-Login_System/dashboard.php';

				$_SESSION['user_id'] = $user_id;
			} else {
				// Invalid user email/password combo
				$return['error'] = "Invalid user email/password";
			}

			$return['error'] == "You already have an account";
			$return['is_logged_in'] = false;
		} else {
			// They need to create a new account
			$return['error'] = "You do not have an account. <a href='/GitHub/PHP-Login_System/register.php'>Create one now?</a>";
		}

			

		echo json_encode($return, JSON_PRETTY_PRINT); exit; 

	} else {
		// Die, Kill the script, redirect the user
		exit('Invalid URL');
	}

?>
