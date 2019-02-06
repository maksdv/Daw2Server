<!DOCTYPE html>
<html>
<head>
	<title>pedidos</title>
</head>
<body>
	
	<?php
	session_start();
	include 'functions.php';
	formulario();

	if (isset($_POST['ok'])) {

		$_SESSION['figura']=$_POST['figura'];
		$_SESSION['color']=$_POST['color'];
			header('Location: dimensiones.php');
		
	}


	?>

</body>
</html>