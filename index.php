<?php 

	// Allow the config
	define('__CONFIG__', true);
	// Require the config
	require_once "inc/config.php"; 

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="robots" content="follow">

		<title>LoginCourse</title>

		<base href="/" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.13.4/dist/css/uikit.min.css" />
	</head>

	<body>
		<div class="uk-section uk-container">
			<?php
				echo "Hello world. Today is: ";
				echo date("Y m d");
			?>
			<p>
				<a href="/GitHub/PHP-Login_System/login.php">Login</a>
				<a href="/GitHub/PHP-Login_System/register.php">Register</a>

		</div>
	<?php require_once "inc/footer.php"; ?>
	</body>
</html>