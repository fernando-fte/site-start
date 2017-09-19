<?php
$updateCSS = null;
if ($settings->devMode()) { 
	$updateCSS = '?update='.$settings->get('updateCache');
}
?>
<head>
	<title><?php echo $settings->get('page')['title']; ?></title>

	<meta charset="utf-8">

	<?php foreach ($settings->get('page')['meta'] as $meta_name => $meta_content) { ?>
	<meta name="<?php echo $meta_name?>" content="<?php echo $meta_content?>">
	<?php } ?>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/assets/style/fonts/geogrotesque.css">
	<link rel="stylesheet" type="text/css" href="/assets/style/app.css<?php echo $updateCSS;?>">
</head>
