<?php
session_start();
?>

<!-- html with php files included -->

<!-- head -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>The Free Web TV</title>
	<link href="css/bootstrap.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="style.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- [if IE] -->
	<script src="http://html5shiv.google.com/svn/trunk/html5.js"></script>
</head>

<!-- body -->
	<body>
	
<!-- header -->
		<div id="header">
			<?php include("library/header.class.php"); ?>
		</div>

<!-- jumbotron -->
		<div id="jumbotron">
			<?php include("library/jumbotron.class.php"); ?>
		</div>
		
<!-- horisontal navigation bar -->
		<div id="navhor">
			<?php include("library/navhor.class.php"); ?>
		</div>
		
<!-- navigation -->
		<div id="nav">
			<?php include("library/nav.class.php"); ?>
		</div>		
		
<!-- sidebar -->
		<div id="sidebar">
			<?php include("library/sidebar.class.php"); ?>
		</div>

<!-- columnOne -->
		<section class="columnOne">
			<?php include("library/columnOne.class.php"); ?>
		</section>
		
<!-- columnTwo -->
		<section class="columnTwo">
			<?php include("library/columnTwo.class.php"); ?>
		</section>
		
<!-- footer -->
		<div id="footer">
			<?php include("library/footer.class.php"); ?>
		</div>
		
		
<!--  		
		
		<div class="container">
			<h1>
				The Free Web-TV
			</h1>
		<div>
			<span class="label label-info">Number1</span>
			<span class="label label-default">Number11</span>
			<span class="label label-danger">Number111</span>
			<span class="label label-success">Number111</span>
		</div>
		<div>
		Here is a form:
		<form>
		Name: <input type="text" value="" placeholder="Enter your name" /><br />
		email: <input type="text" value="" placeholder="you@domain.com" /><br />
		<button class="btn btn-success btn-sm">Save</button>
		<a href="#" class="btn btn-warning btn-sm">Cancel</a>
		Search: <input type="text" value="150" placeholder="you@domain.com" />
		<button class="btn btn-danger btn-sm">Subscribe</button><br />
		</form>
		</div>
		<div>
		Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, 
		Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, 
		</div>
		</div>
-->	
	</body>
</html>