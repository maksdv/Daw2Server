<?php
session_start()?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

function valorCarta($num){
			 if ($num==1 || $num==14 || $num==27 || $num==40) {
			 	return 11;
			 }

			 if ($num==10 || $num==11 || $num==12 || $num==13 || $num==22 || $num==23 || $num==24 || $num==25 || $num==36 || $num==37 || $num==38 || $num==39 || $num==49 || $num==50 || $num==51 || $num==52) {
			 	return 10;
			 }
			
		
			  if ($num==2 || $num==15 || $num==28 || $num==42) {
			 	return 2;
			 }
		
			  if ($num==3 || $num==16 || $num==29 || $num==41) {
			 	return 3;
			 }
		
			 if ($num==4 || $num==17 || $num==30 || $num==43) {
			 	return 4;
			 }
		
			  if ($num==5 || $num==26 || $num==31 || $num==44) {
			 	return 5;
			 }
		
			  if ($num==6 || $num==18 || $num==32 || $num==45) {
			 	return 6;
			 }
		
			  if ($num==7 || $num==19 || $num==33 || $num==46) {
			 	return 7;
			  }
			  if ($num==8 || $num==20 || $num==34 || $num==47) {
			 	return 8;
			 }
		
			  if ($num==9 || $num==21 || $num==35 || $num==48) {
			 	return 9;
			 }

	}



 function numRand(){
 	$num=rand(1,52);
 	return $num;
 }

 function sacarCarta($n){
 	$tot=0;
 	for ($i=0; $i < count($n); $i++) { 
 		$num=$n[$i];
 		echo '<img src="./imgs/'.$num.'.png">';
 		$tot+=valorCarta($num);
 		
 	}
 	return $tot;
	
}

echo '<form action="index.php" method="POST">
		More Please <input type="radio" name="inp" value="more">
		Pass <input type="radio" name="inp" value="pass">
		Refresh <input type="radio" name="inp" value="refresh">
		<input type="submit" name="entr" id="entr" value="Dale">
	  </form> ';


if(!isset($_SESSION['pal'])){
	
	$_SESSION['cartas']=0;
	$_SESSION['listCartas'][$_SESSION['cartas']]=numRand();
	$_SESSION['cartas']++;
	$_SESSION['listCartas'][$_SESSION['cartas']]=numRand();
	
	$_SESSION['listCartas'];
	$_SESSION['pal']=sacarCarta($_SESSION['listCartas']);
		echo "Tu mano es => ".$_SESSION['pal'];
		echo "<br>";

	
}else{
	
	if ($_POST['inp']=='more') {
		$_SESSION['cartas']++;
		$_SESSION['listCartas'][$_SESSION['cartas']]=numRand();
		$_SESSION['pal']=sacarCarta($_SESSION['listCartas']);
		echo "Tu mano es => ".$_SESSION['pal'];
		echo "<br>";

		if ( $_SESSION['pal']==21) {
			echo "has ganado";
		}

		if($_SESSION['pal']>21){
			echo "Has perdido";
		}


	}

	if ($_POST['inp']=='pass') {
		echo "has pasado";
	}

	if ($_POST['inp']=='refresh') {
		session_destroy();
	}
	
}




?>
</body>
</html>