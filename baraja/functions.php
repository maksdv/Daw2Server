<?php
	
	function principal(){
		$x=49;
		$y=70;
		$inicioX=0;
		$inicioY=-3;
		$pIniX=10.5;
		$pIniY=10;
		$pFinX=96;
		$pFinY=100;
for ($i=0; $i < 52; $i++) {
	 if($i<13){
		$fotka=recortarCarta($x,$y,$inicioX,$inicioY,$pIniX, $pIniY, $pFinX, $pFinY);
		imagejpeg($fotka,'./carta'.$i.'.jpg');
		echo '<img src="./carta'.$i.'.jpg">      ';
		$pIniX+=56;

	}

	if($i>=13 && $i<26){
		if($i==13){
			$pIniX=10.5;
		}
		$pIniY=91;

	$fotka=recortarCarta($x,$y,$inicioX,$inicioY,$pIniX, $pIniY, $pFinX, $pFinY);
	imagejpeg($fotka,'./carta'.$i.'.jpg');

	echo '<img src="./carta'.$i.'.jpg">';
	$pIniX+=56;
	}
	if ($i>=26 && $i<39) {
		if($i==26){
			$pIniX=10.5;
		}
		$pIniY=172;

	$fotka=recortarCarta($x,$y,$inicioX,$inicioY,$pIniX, $pIniY, $pFinX, $pFinY);
	imagejpeg($fotka,'./carta'.$i.'.jpg');

	echo '<img src="./carta'.$i.'.jpg">';
	$pIniX+=56;
	}
	if ($i>=39 ) {
		if($i==39){
			$pIniX=10.5;
		}
		$pIniY=253;

	$fotka=recortarCarta($x,$y,$inicioX,$inicioY,$pIniX, $pIniY, $pFinX, $pFinY);
	imagejpeg($fotka,'./carta'.$i.'.jpg');

	echo '<img src="./carta'.$i.'.jpg">';
	$pIniX+=56;
	}
	
	}
}

	function recortarCarta($anchura,$altura,$inicioX,$inicioY,$pIniX,$pIniY,$pFinX,$pFinY){
		$i=1;
		$origImg = imagecreatefromjpeg("baraja.jpg");
		$newImg = ImageCreateTrueColor(95, 100);
		imagecolortransparent($newImg, imagecolorallocate($newImg, 0, 0, 0));
		imagecopyresampled($newImg, $origImg, $inicioX, $inicioY, $pIniX, $pIniY, $pFinX, $pFinY, $anchura, $altura);
		header("Cache-Control: no-cache, must-revalidate");
		return $newImg;
		$i++;
	}

	
	function barajar(){
		$arrayNumeros=array();
		for ($i=0; $i < 52 ; $i++) { 
			$kk=rand(0,51);
				if (!in_array($kk, $arrayNumeros)) {
					array_push($arrayNumeros, $kk);
					echo '<img src="./carta'.$kk.'.jpg">';
				}else{
					$i--;
				}
		}
		
	}

	function sacarRojas(){
		for ($i=0; $i <52 ; $i++) { 
			if ($i>12 && $i<26 || $i>39) {
			echo '<img src="./carta'.$i.'.jpg">';
		}
		}		
	}

	 function sacarNegras(){
	 	for ($i=0; $i <52 ; $i++) { 
			if ($i<13 || $i<39 && $i>26) {
			echo '<img src="./carta'.$i.'.jpg">';
		}
		}	
	 }

	 function sacarFiguras(){
	 	for ($i=0; $i <52 ; $i++) { 
			if ($i==0 || $i>9 && $i<14 || $i>22 && $i<27 || $i>35 && $i<40 || $i>48) {
			echo '<img src="./carta'.$i.'.jpg">';
		}
		}
	 }



?>