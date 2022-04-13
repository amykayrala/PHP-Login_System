<?php
	if(!defined('__CONFIG__')) {
		exit('You do not have a config file');
	}

class Page {

	// force the user to be logged in, or redirest
		static function ForceLogin() {

			if(isset($_SESSION['user_id'])) {
				// the user is allowed here
			} else {
				// the user is not allows here
				header("Location: /GitHub/PHP-Login_System/login.php");
			}
		}

		static function ForceDashboard() {
			if(isset($_SESSION['user_id'])) {
				// the user is allowed here, but redirect anyway
				header("Location: /GitHub/PHP-Login_System/dashboard.php");
			} else {
				// the user is not allows here
			}

	}
}
?>