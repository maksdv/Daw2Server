<?php
session_start();
include 'functions.php';
include 'clases/figura.php';
include 'clases/cuadrado.php';
include 'clases/circulo.php';
include 'clases/triangulo.php';

echo $_SESSION['dimension']."   ".$_SESSION['color'];

/*$kk = new Cuadrado($_SESSION['dimension']);
$kk->pintFigura($_SESSION['dimension'],$_SESSION['color']);
$kk->setColor($_SESSION['color']);*/


if ($_SESSION['figura']=='cuadrado') {

		$kk = new Cuadrado($_SESSION['dimension']);
		$kk->pintFigura($_SESSION['dimension'],$_SESSION['color']);
		$kk->mensaje();
		

	}elseif($_SESSION['figura']=='circulo'){
		$kk=new Circulo($_SESSION['dimension']);
		$kk->pintFigura($_SESSION['dimension'],$_SESSION['color']);
		
		
	}elseif($_SESSION['figura']=='triangulo'){
		$kk=new Triangulo($_SESSION['dimension']);
		$kk->pintFigura($_SESSION['dimension'],$_SESSION['color']);
		
		
		
	}

?>