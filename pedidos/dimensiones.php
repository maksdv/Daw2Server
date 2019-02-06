<?php 
session_start();
include 'functions.php';

echo "<h1>Que dimensiones quieres que tenga tu ". $_SESSION['figura']." ?</h1>";
	
	if ($_SESSION['figura']=='cuadrado') {
		dimensionesCuadrado();
		
		

	}elseif($_SESSION['figura']=='circulo'){
		dimensionesCirculo();
		
		
	}elseif($_SESSION['figura']=='triangulo'){
		dimensionesTriangulo();
		
		
	}

	if (isset($_POST['validar'])) {
		$_SESSION['dimension']=$_POST['dimenss'];
		header('Location: dibujo.php');
	}

	




 ?>