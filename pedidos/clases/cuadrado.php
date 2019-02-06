<?php

	class Cuadrado extends Figura{

		public $lado;

		public function __construct ($lado) {
			$this->lado = $lado;
			
		}

		public function setColor($color) {
			parent::setColor($color);
		}

		public function area() {
			return (($this->lado)/10) * (($this->lado)/10);
		}

		public function perimetro() {
			return ($this->lado )*4;
		}

		public function texto() {
			parent::texto();
		}

		public function pintFigura($n,$col){
			echo " 
				<div style='width:$n;height:$n;background:$col;'>


				</div>
			 ";
		}



	}
?>