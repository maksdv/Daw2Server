<?php

	class Triangulo extends Figura{

		public $lado;

		public function __construct ($lado) {
			$this->lado = $lado;
			
		}

		public function setColor($color) {
			parent::setColor($color);
		}

		public function area() {
			
		}

		public function perimetro() {
			return ($this->lado )*3;
		}

		public function texto() {
			parent::texto();
		}

		public function pintFigura($n,$col){
			echo " 
				<div style='
					width: 0;
					border-left: $n"."px"." solid transparent;
					border-right: $n"."px"." solid transparent;
					border-bottom: $n"."px"." solid $col;
				'>


				</div>
			 ";
		}



	}
?>