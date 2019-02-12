<?php 
	
	class Connection
	{
			protected $db;
		function __construct()
		{
			$config=json_decode(file_get_contents('./config.json'), true);
			try{
			//	$this->db = new PDO("mysql:host=".$config['Host'].";",$config['User'],$config['Password']);
				$this->db = new PDO("mysql:host=".$config['Host'].";dbname=".$config['DBName'],$config['User'],$config['Password']);
				$this->db ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//var_dump($this->db);
		}catch(PDOException $e){

			throw $e;
		}
		}


public function changeMoney($type, $precio)
{
	if ($type==='rublo') {
		return $precio*166;
	}elseif ($type='dolar') {
		return $precio*1.66;
	}else {
		return $precio;
	}
}
		
		
function searchHome($moneda, $tipo, $zona, $dormitorios, $precio)
{

	$precio=intval($precio);
	$dormitorios=intval($dormitorios);
	$precioInferior=$precio-100000;

	try {
		$smtpQuery = $this->db->prepare("SELECT * FROM viviendas where localidad like ? and precio>=? and precio<=? and tipo like ? and dormitorios=?");	
		$query=$smtpQuery->execute([$zona, $precioInferior, $precio,$tipo,$dormitorios]);
		$resultado=$smtpQuery->fetchAll(PDO::FETCH_OBJ);

		echo "
		<table>
			<tr>
				Resultados de busqueda
			</tr>
			<th>localidad</th>
			<th>tipo</th>
			<th>precio</th>
			<th>dormitorios</th>
			<th>Imagen</th>
			
			";
			foreach($resultado as $item){
				echo"<tr>
				<td>$item->localidad</td>
				<td>$item->tipo</td>
				<td>$item->precio</td>
				<td>$item->dormitorios</td>
				<td><img src='$item->image'></td>
			
			</tr>";
		}

		echo "</table>";

	} catch (PDOException $e) {
		throw $e;
	}



}


























	}


 ?>