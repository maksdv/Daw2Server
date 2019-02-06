<!DOCTYPE html>
<html>
<head>
	<title>
		Strings
	</title>
	<style type="text/css">
		form{
			border: black double;
			text-align: center;
			color: blue;
			background-color: yellow;
			height: 50%;
		}
		input{
			margin: 15px;
			color: blue;

		}
		h2{
			color:red;
		}
		textarea{
			margin: 10px;
			float: left;
			width: 40%;
		}
		div{
			position: absolute;
			overflow: hidden;
			margin-left: 20px;
			margin-top: -180px;

			background-color:white;
		}
	</style>
</head>
<body>


	
<?php

function printRes($t){
		echo '<form action="ejercicioStr2.php" method="POST">';
		echo '<textarea name="texto" rows="5">'.$t.'</textarea>';
		echo 'Introduce la cadena a buscar	<input type="texto" name="clave" id="clave"><br>';
		echo '<label><input type="radio" id="cbox1" name="brr" id="r1" value="borrar"> Eliminar</label>';
		echo '<label><input type="radio" id="cbox2" name="brr" id="r2" value="sustituir"> Sustituir </label>';
		echo '<label><input type="radio" id="cbox3" name="brr" value="mayus"> Poner Mayusculas </label>';
		echo '<label><input type="radio" id="cbox4" name="brr" value="minus"> Poner Minusculas </label><br>';
		echo '<label><input type="radio" id="cbox5" name="brr" value="remarc"> Remarcar </label><br>';
		echo '<input type="texto" name="palSus" rows="5" placeholder="Ingresa la palabra nueva">';
		echo '<input type="submit" name="submit" id="submit" value="enviar"><br>';
		echo '<input type="file" name="arch">';
		echo '<label><input type="radio" id="cbox6" name="brr" value="subir"> Subir PDF </label><br>';
		echo '</form>';

	}

function pintF(){
	echo '<form action="ejercicioStr2.php" method="POST">';
	echo '<textarea name="texto" rows="5" placeholder="Ingresa el texto"></textarea>';
	echo 'Introduce la cadena a buscar	<input type="texto" name="clave" id="clave"><br>';
	echo '<label><input type="radio" id="cbox1" name="brr" value="borrar"> Eliminar palabra';
	echo '<label><input type="radio" id="cbox2" name="brr" value="sustituir"> Sustituir </label>';
	echo '<label><input type="radio" id="cbox3" name="brr" value="mayus"> Poner Mayusculas </label>';
	echo '<label><input type="radio" id="cbox4" name="brr" value="minus"> Poner Minusculas </label><br>';
	echo '<label><input type="radio" id="cbox5" name="brr" value="remarc"> Remarcar </label><br>';
	echo '<input type="texto" name="palSus" rows="5" placeholder="Ingresa la palabra nueva">';
	
	echo '<input type="submit" name="submit" id="submit" value="enviar"><br>';
	echo '<input type="file" name="arch">';
	echo '<label><input type="radio" id="cbox6" name="brr" value="subir"> Subir PDF </label><br>';

	echo '</form>';
	
}



if (!isset($_POST['submit'])) {
	pintF();
	
	
}else{
	if ($_POST['brr']=='borrar') {
		$tt=$_POST['texto'];
		$cl=$_POST['clave'];
		$tt=str_replace($cl, '', $tt);
		printRes($tt);
			
	}elseif($_POST['brr']=='sustituir'){
			$tt=$_POST['texto'];
			$cl=$_POST['clave'];
			$new=$_POST['palSus'];
			$tt=str_replace($cl,$new,$tt);
			printRes($tt);
	}elseif ($_POST['brr']=='mayus') {
			$tt=$_POST['texto'];
			$cl=$_POST['clave'];
			printRes(strtoupper($tt));
	}elseif ($_POST['brr']=='minus') {
			$tt=$_POST['texto'];
			$cl=$_POST['clave'];
			printRes(strtolower($tt));
	}elseif ($_POST['brr']=='remarc') {
			$tt=$_POST['texto'];
			$cl=$_POST['clave'];
			$rer= '<span style="background-color:red">'.$cl.'</span>';
			$ttext=str_replace($cl,$rer,$tt);
			printRes('');
			$si='<div id="divEd" contenteditable="true"> 
			'.$ttext.'  </div>';
			echo $si;

	}elseif($_POST['brr']=='subir'){
		
		$namePdf=$_FILES['arch']['name'].'.pdf';
		$carpetaImages=$_SERVER['DOCUMENT_ROOT'];
		echo $namePdf;
		$dir=$carpetaImages.$namePdf;
		echo $dir;
		/*move_uploaded_file($_FILES['pdf']['tmp_name'],$namePdf);
		header('Content-type: application/pdf');
		header('Content-Disposition: inline; filename="'.$namePdf.'"');
		readfile($namePdf);*/


	}




}



/*echo '<form action="ejercicioStr2.php" method="POST">';
	echo '<input type="file" name="pdf">';
	echo '<input type="submit" name="submit" id="submit" value="enviar"><br>';
	echo '</form>';
	$namePdf=
		$sizePdf=$_FILES['pdf']['size'];
		$typePdf=$_FILES['pdf']['type'];

		$fp=fopen($namePdf, 'r');*/

?>
</body>
</html>