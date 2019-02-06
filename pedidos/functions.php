<?php
	
	function formulario(){
		echo'<form action="index.php" method="POST">
			<h1>Que figura quieres pintar?</h1>
				Cuandrado: <input type="radio" name="figura" id="cuadrado" value="cuadrado" ></br>
				Circulo: <input type="radio" name="figura" id="circulo" value="circulo"></br>
				Triangulo: <input type="radio" name="figura" id="triangulo" value="triangulo"> </br>
				<input type="color" name="color"> </br>
				<input type="submit" name="ok">
			</form>';
	}


	function dimensionesCuadrado(){
		echo'<form action="dimensiones.php" method="POST">
				Perimetro: <input type="number" name="dimenss" id="perimetro">
				<input type="submit" name="validar">
			</form>';
	}
	
	function dimensionesCirculo(){
		echo '
			<form action="dimensiones.php" method="POST">
				Radio: <input type="number" name="dimenss" id="radio">
				<input type="submit" name="validar">
			</form>';
		;
	}

	function dimensionesTriangulo(){
		echo '
			<form action="dimensiones.php" method="POST">
				Lado: <input type="number" name="dimenss" id="lado">
				<input type="submit" name="validar">
			</form>';
		;
	}


?>