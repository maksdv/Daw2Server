<?php 
require_once('conection.php');

class XML2BD extends Connection
{
	//private $db=null;

	function __construct()
	{
		parent::__construct();


	}

	public function leerXML(){
		/*$xmlstr=file_get_contents("vivienda.xml");
		$xml=new SimpleeXMLElement($xmlstr);
		var_dump($xml);*/

		$xml = file_get_contents("viviendas.xml");

		$ob = simplexml_load_string($xml);

		$json = json_encode($ob);

		$array = json_decode($json, true);
		//var_dump($array);
		include('./source.php');

		foreach($array['vivienda'] as $item){
			$dorm = intval($item['dormitorios']);
			$precio = abs(floatval($item['precio']));
			$image = $item['image'];
			if ($item['extras']['garaje'] === 'si') {
				$garage = 1;
			} else {
				$garage = 0;
			}
			if ($item['extras']['padel'] === 'si') {
				$padel = 1;
			} else {
				$padel = 0;
			}
			if ($item['extras']['piscina'] === 'si') {
				$piscina = 1;
			} else {
				$piscina = 0;
			}
			$tipo = $item['tipo'];
			$zona = $item['zona'];	
			$insert_productos = "INSERT INTO `viviendas` (`dormitorios`,`precio`,`image`,`garaje`,`padel`,`piscina`,`tipo`,`localidad`) VALUES 
		(".$dorm.",".$precio.",'".$image."',".$garage.",".$padel.",".$piscina.",'".$tipo."','".$zona."');";

		$this->db->exec($insert_productos);

}
	}

	public function exist(){
		$lista=$this->db->query('Select * from tipos');
		$listas = $lista->fetchAll(PDO::FETCH_OBJ);

		if(empty($listas)){
			return true;
		}else{
			return false;
		}
		

	}
}


 ?>