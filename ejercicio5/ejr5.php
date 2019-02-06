<?php

	if (isset($_POST['entry'])) {
		
		$id=$_POST['num'];
		$clave=$_POST['clave'];
		$bool=false;
		echo $bool;
		$user="";

		$contacts=array();
		$contacts ['max']= array(001,111);
		$contacts ['popo']= array("002",222);
		$contacts ['yiha']= array("003",333);
		
		
		foreach ($contacts as $key => $value) {
			
			for ($i=0; $i < (count($value)-1) ; $i++){ 
				if($value[0] == $id & $value[1]==$clave){
					$bool=true;
					$user=$key;
					
				}
			}		
	}
	if($bool)
		echo "El usuario ".$user." Puede entar.";
	else 
		echo "El usuario ".$user." No puede entrar.";
	}



?>


