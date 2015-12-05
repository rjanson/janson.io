<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="{ janson.io }">
		<meta name="author" content="Rich Janson">
		<link rel="shortcut icon" href="images/favicon.png">
		<title> janson.io - &lt;/Oops!&gt;</title>

		<!-- Bootstrap -->
		<link href="/error/bootstrap.min.css" rel="stylesheet">
		<!-- Google Font -->
		<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,800" rel="stylesheet" type="text/css">	
		<!-- Main-Style -->
		<link href="/error/style.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	
	<body class="bg-static">
	
		<!-- pattern -->
		<div id="bg_pattern"></div>
		<!-- ./pattern -->
						
		<!-- Error -->	
		<div id="home" class="fullSection">
			<div class="container">
				<div class="top-heading text-center">
					<h2>&lt;/Oops!&gt;</h2>
					<?php 
					if($_GET["e"] == 404) {
						echo '<p>Did not found...</p>';
					} elseif ($_GET["e"] == 403) {
						echo '<p>No can has...</p>';
					} else {
						echo '<p>Maybe bad gateway?</p>';
					}
					?>

				</div>
			</div>			
		</div>	
		<!-- ./Error -->
			
		<!-- footer -->
		<footer id="footer">
			<div class="container">
				<div class="text-center">
					&copy; 2015 janson.io
				</div>
			</div>
		</footer>	
		<!-- ./footer -->

	</body>
</html>