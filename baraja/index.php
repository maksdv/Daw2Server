<!DOCTYPE html>
<html>
<head>
	<title>baraja</title>
	<style type="text/css">
	body{
		background-image: url('fondo.jpg');
	}
		form{
			text-align: center;
			padding: 5px;
			
		}
		input{
			margin-left: 40px;
			background-color: red;
			

		}
		#l1{
			background-color: blue;
			padding:5px;
		}
		#l2{
			background-color: yellow;
			padding:5px;
		}
		img{
			border-style: double;
			margin: 10px;
		}
		#max{
			float: left;
			border-color: white;

		}
		#other{
			float: left;
		}
		#cartasL{
			width: 40%;

		}
		#cartasR{
			border: white;
		}
	</style>
</head>
<body>
	<form action="index.php" method="POST">
		<label id="l1"><input type="radio" id="cbox1" name="brr"  value="barajar" checked> Barajar! </label>
		<label id="l2"><input type="radio" id="cbox2" name="brr"  value="sacarRojas"> Sacar Rojas! </label>
		<label id="l1"><input type="radio" id="cbox3" name="brr" value="sacarNegras"> Sacar negras! </label>
		<label id="l2"><input type="radio" id="cbox4" name="brr" value="figuras"> Sacar Figuraas! </label>
		<label id="l2"><input type="radio" id="cbox2" name="brr"  value="repartir"> Repartir! </label><br><br>
		<input type="submit" name="go" id="go" value="Barajar">

	</form>
<?php
require('functions.php');
	function separar(){
	 	for ($i=0; $i <52 ; $i++) { 
			if ($i==0 || $i>9 && $i<14 || $i>22 && $i<27 || $i>35 && $i<40 || $i>48) {

			echo '<div id="cartasL"> <img id="max" src="./carta'.$i.'.jpg"></div>';
			}
			if($i>0 && $i<10  || $i>13 && $i<23 || $i>26 && $i<36 || $i>40 && $i<49){
				echo '<div="cartasR"> <img id="other" src="./carta'.$i.'.jpg"></div>';
			}
	 }

}



	if(!isset($_POST['go'])){
		principal();

	}elseif($_POST['brr']=='barajar'){
		barajar();
	}elseif ($_POST['brr']=='sacarRojas') {
		sacarRojas();
	}elseif ($_POST['brr']=='sacarNegras') {
		sacarNegras();
	}elseif ($_POST['brr']=='figuras') {
		sacarFiguras();
	}elseif ($_POST['brr']=='repartir') {
		separar();
	}


	?>


</body>
</html>