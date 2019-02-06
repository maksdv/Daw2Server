<!DOCTYPE html>
<html>
<head>
	<title>
		Ejercicio Avanzado
	</title>
	<style type="text/css">
		form{
			text-align: center;
			border-color: blue;
			border-radius: 10px;
			background-color: red;
			width: 50%;
			margin-left:25%;
			margin-top: 5%;

		}
		input{
			padding: 2px;
			margin: 2px;
		}
	</style>

</head>
<body>
	

	<?php

		function pintrTabla(){
		echo '<form action="ejAvanzado.php" method="POST">';
		echo '0 <input type="range" name="vol" id="vol"> 100';
		echo '+ <input type="number" name="numb" id="numb" value="50"> = <input type="number" name="res" id="res">';
		echo '<br>';
		echo 'Estaciones <select type="text" name="station" id="station">';
			echo '<option value="Winter">Winter</option>';
			echo '<option value="Spring">Spring</option>';
			echo '<option value="Summer">Summer</option>';
			echo '<option value="Outumn">Outumn</option>';

		echo '</select>';
		echo '<br>';
		echo 'Color favorito <input type="color" name="color" id="color"> ';
		echo '<br> ';
		echo 'Buscar <input type="text" name="busc" id="busc"> ';
		echo '<br>';
		echo 'Nombre <input type="text" name="name" id="name">';
		echo '<br>';
		echo ' Apellidos <input type="text" name="apes" id="apes">';
		echo '<br>';
		echo 'E-mail <input type="email" name="mail" id="mail"> ';
		echo '<br> ';
		echo 'Fecha de nacimiento <input type="date" name="fech" id="fech"> ';
		echo '<br>';
		echo 'Edad(de 0 a 150) <input type="number" name="edad" id="edad" max="150" min="0">';
		echo '<br>';
		echo 'Pagina personal <input type="text" name="ppers" id="ppers">';
		echo 'Horario: De <input type="time" name="time" id="time">';
		echo '"a <input type="time" name="time2" id="time2">';
		echo '"<br> <input type="submit" name="subm" id="subm">';
		echo '</form>';
		}


		function controlStr($string){

			return preg_replace("/[a-zA-Z áéíóúÁÉÍÚÓ 0-9]/", '', $string);

		}


	

	if (!isset($_POST['subm'])) {
		pintrTabla();
	}else{
		$vol=$_REQUEST['vol'];
		$numb=$_REQUEST['numb'];
		$res=$vol+$numb;
		//$res=$_REQUEST['res'];
		$stt=$_POST['station'];
		$busc=trim(strip_tags($_POST['busc']));
		$name=trim(strip_tags($_POST['name']));
		$apes=trim(strip_tags($_POST['apes']));
		$mail=trim(strip_tags($_POST['mail']));
		$pag=trim(strip_tags($_POST['ppers']));



		if(!empty($name) && !empty($apes) && !empty($busc) && !empty($mail) && !empty($mail) && !empty($pag)){
			if(strlen(controlStr($name)>0) || strlen(controlStr($apes)>0) || controlStr($busc)> 0){
				echo "Vuelva a escribir el nombre, los caracteres ".controlStr($name)." no sestán permitidos <br>";

			}
			
			if(strlen(controlStr($name))===0 && strlen(controlStr($apes))===0 && strlen(controlStr($busc))===0){
				echo "Los datos se han introducido correctamente";
				echo "<br>";
				
			}
	}else
	echo "Alguno de los campos esta en blanco";
	pintrTabla();
			
		
		
	}

		

	
	
	?>

</body>
</html>