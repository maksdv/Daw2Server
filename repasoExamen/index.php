<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="./styles.css">
</head>
<body>
	<form action="mostrarDatos.php" method="POST">
		<select name="moneda">
		  <option value="euro">Euros</option>
		  <option value="dolar">Dolares</option>
		  <option value="rublo">Rublos</option>
		  <option value="libra">Libras</option>
		</select><br><br>
		<select name="tipo">
		  <option value="adosado">Adosado</option>
		  <option value="apartamento">Apartamento</option>
		  <option value="chalet">Chalet</option>
		  <option value="piso">Piso</option>
		  <option value="finca">Finca</option>
		  <option value="parcela">Parcela</option>
		</select><br><br>
		<select name="zona">
		  <option value="alcobendas">alcobendas</option>
		  <option value="alcorcon">alcorcon</option>
		  <option value="lasRozas">lasRozas</option>
		  <option value="Madrid">Madrid</option>
		  <option value="Pozuelo">Pozuelo</option>
		  <option value="Majadahonda">Majadahonda</option>
		  <option value="Villalba">Villalba</option>
		</select><br><br>
		<span>Habitaciones</span>
		<select name="dormitorios">
		  <option value="1">1</option>
		  <option value="2">2</option>
		  <option value="3">3</option>
		  <option value="4">4 o mas</option>
		</select><br><br><br><br>

		<select name="precio">
		  <option value="100000">Hasta 100.000</option>
		  <option value="200000">100.000 a 200.000</option>
		  <option value="300000">200.000 300.000</option>
		  <option value="400000">300.000 400.000</option>
		</select><br><br>
			<input type="button" value="back">
			<input type="submit" name="next" value="next">
			
	</form>


	<?php 
include 'xmltobd.php';
$xmlManager = new XML2BD();

if ($xmlManager->exist()) {
	$xmlManager->leerXML();
	echo "hemos populado la bd";
}



?>

</body>
</html>