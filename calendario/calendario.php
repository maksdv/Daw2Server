<!DOCTYPE html>
<html>
<head>
	<title>Calendario excersize</title>
	<style type="text/css">
		table{
			margin-left: 1px;
			margin-right: 5px;
			
			

		}
		h2{
			text-align: left;
		}
		table tr th{
			color: red;
			

		}
		tr td{
			text-align: center;
			background-color: #dcf4f4;
			border-collapse: collapse;
			overflow: hidden;
			
			


		}
		td:nth-child(6n){
			background-color: #bdfbfc;
		}
		td:nth-child(7n){
			background-color: #bdfbfc;
		}

	</style>
</head>
<body>

<?php
	
	function diasMes($num,$bool){
	switch ($num) {
		case '1':
			 $diasMes=31;
			 $mes='Enero';

			break;
		case '2':
			 $diasMes=28;
			 $mes='Febrero';
			break;
		case '3':
			 $diasMes=31;
			 $mes='Marzo';
			break;
		case '4':
			 $diasMes=30;
			 $mes='Abril';
			break;
		case '5':
			 $diasMes=31;
			 $mes='Mayo';
			break;
		case '6':
			 $diasMes=30;
			 $mes='Junio';
			break;
		case '7':
			 $diasMes=31;
			 $mes='Julio';
			break;
		case '8':
			 $diasMes=31;
			 $mes='Agosto';
			break;
		case '9':
			 $diasMes=30;
			 $mes='Septiembre';
			break;
		case '10':
			 $diasMes=31;
			 $mes='Octubre';
			break;
		case '11':
			 $diasMes=30;
			 $mes='Noviembre';
			break;
		case '12':
			 $diasMes=31;
			 $mes='Diciembre';
			break;
		
		default:
			# code...
			break;

	}
	if($bool){
		return $diasMes;
	}else{
		return $mes;
	}
}

function calendar($yearr){

	for($y=1;$y<=12;$y++){
		$aux=diasMes($y,true);
		$auxMes=diasMes($y,false);

		$time=mktime(0,0,0,$y,1,$yearr);
		$empti=date('w',$time)-1;
		echo '<table style="float:left">';
		echo '<tr><th style="color:blue">'.$auxMes;
		echo '<tr>';
		echo '<th>Lunes</th>';
			echo '<th>Martes</th>';
			echo '<th>Miercoles</th>';
			echo '<th>Jueves</th>';
			echo '<th>Viernes</th>';
			echo '<th>Sabado</th>';
			echo '<th>Domingo</th>';
		echo '</tr></th></tr>';
		echo '<tr>';


		if ($yearr%4==0 && $auxMes=='Febrero') {
			$aux=$aux+1;
		}
		for ($i=1; $i <=$aux+$empti ; $i++) { 
			if ($i<=$empti) {
				echo '<td> </td>';
			}else{
			echo '<td>'.($i-$empti).'</td>';
			if ($i%7==0) {
				echo '</tr><tr>';

			}
		}
		}
		echo '</tr></table>';
	}
	
}




function select(){
	echo '<form action="calendario/calendario.php" method="POST">';
	echo 'Selecciona el año  <input type="number" name="fecha" id="fecha" min="2000" max="2020">';
	echo '<input type="submit" name="entry">';
	echo '</form>';
}


if (!isset($_POST['entry'])) {
	select();
	calendar(2018);

}else{
	select();
	$year=$_POST['fecha'];
	calendar($year);
}

?>
</body>
</html>