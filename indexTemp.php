<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
?>

<!-- html with php files included -->

<!-- head -->
<!DOCTYPE html>
<html lang="ru">
<head>
	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Веб-ТВ</title>
	<link href="css/bootstrap.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="style.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- [if IE] -->
	<script src="http://html5shiv.google.com/svn/trunk/html5.js"></script>
</head>

<!-- body -->
	<body>
	
<!-- wrapper -->
		<div id="wrapper">
			<?php require_once 'library/wrapper.class.php'; ?>
		</div>
	</body>
</html>