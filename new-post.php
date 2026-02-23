<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

setlocale(LC_TIME, 'pt_PT', 'pt_PT.utf-8', 'pt_PT.utf-8', 'portuguese');
date_default_timezone_set('Europe/Lisbon');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Micro CMS</title>
	<link rel="stylesheet" href="assets/style.css"></head>
<body>

<nav id="site-navigation" role="navigation" class="row row-center">
	<div class="column">
		<h1>
			<a href="index.php">Micro CMS</a>
		</h1>
		<ul class="main-menu column clearfix">
		</ul>
	</div>
</nav>
<div id="content" >
</div>
<footer id="footer">
	<div id="inner-footer">
	   Introduction Course to PHP
	</div>
</footer>
</body>
</html>
