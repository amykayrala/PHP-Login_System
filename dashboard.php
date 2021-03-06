<?php 

	// Allow the config
	define('__CONFIG__', true);
	// Require the config
	require_once "inc/config.php"; 

	Page::ForceLogin();

	$User = new User($_SESSION['user_id']);

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="robots" content="follow">

		<title>Dashboard</title>

		<base href="/" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.13.4/dist/css/uikit.min.css" />
	</head>

	<body>
		<div class="uk-section uk-container">
			<h2>Dashboard</h2>
			<p>Hello <?php echo $User->email; ?>, you registered at <?php echo $User->reg_time; ?></p>
			<p><a href="/Github/PHP-Login_System/logout.php"></a></p>
		</div>
			
	<?php require_once "inc/footer.php"; ?>
	</body>
</html>