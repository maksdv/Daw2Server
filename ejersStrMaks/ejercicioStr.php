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
			height: 140px;
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
	</style>
</head>
<body>


	
<?php
function pintF(){
	echo '<form action="ejercicioStr.php" method="POST">';

	echo '<textarea name="texto" rows="5"></textarea>';
	echo 'Introduce la cadena a buscar	<input type="texto" name="clave" id="clave">';
	echo '<input type="submit" name="submit" id="submit">';
	echo '</form>';
}

function lookFind($aguja,$pajar){
	$arr=array();
	$arr=explode(' ', $pajar);
	$res=array();
	$pos=0;
	for ($i=0; $i < count($arr) ; $i++) { 
		if ($aguja==$arr[$i]) {
			$res[$pos]=$i+1;
			$pos++;
			
		}
	}
	return $res;
}

if (!isset($_POST['submit'])) {
	pintF();

	
}else{
	$tt=$_POST['texto'];
	$cl=$_POST['clave'];
	pintF();
	echo "<br>";
	if (empty(lookFind($cl,$tt))) {
		echo '<h2> No hay coincidencias!</h2>';
		echo '<image src="img/giff.gif">';
		
	}else{
		if (count(lookFind($cl,$tt))>1) {
			echo '<h2> La palabra clave se encuentra en las posiciones ['.implode(' ', lookFind($cl,$tt)).']</h2><br>' ;
			echo '<image src="img/gifW.gif">';


		}else{
			echo '<h2> La palabra clave se encuentra en la posicion ['.implode(' ', lookFind($cl,$tt)).']</h2><br>' ;
			echo '<image src="img/gifW.gif">';

		}
	}

	
	

}





?>
</body>
</html>