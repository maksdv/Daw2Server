<?php

	class Circulo extends Figura{

		public $tam;

		public function __construct ($tam) {
			$this->tam = $tam;
			
		}

		public function setColor($color) {
			parent::setColor($color);
		}

		public function area() {
			return ($this->lado) * ($this->lado);
		}

		public function perimetro() {
			return ($this->lado )*4;
		}

		public function texto() {
			parent::texto();
		}

		public function pintFigura($n,$col){
			echo " 
				<div style='width: $n;
				     height: $n;
				     -moz-border-radius: 50%;
				     -webkit-border-radius: 50%;
				     border-radius: 50%;
				     background: $col;'>
				</div>
			 ";
		}



	}
?>