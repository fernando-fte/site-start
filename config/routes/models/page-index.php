<?php include 'config/index.php' ?>
<!DOCTYPE html>
<html>
	<head>
		<?php include 'views/'.$settings->get('page')['route']['header'].'.php' ?>
	</head>
	<body>
		<?php include 'views/'.$settings->get('page')['route']['content'].'.php' ?>

		<?php include 'views/'.$settings->get('page')['route']['script'].'.php' ?>
	</body>
</html>
