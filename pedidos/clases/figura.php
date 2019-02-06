<?php 

	Abstract class Figura{
		public $name;
		public $color;

		public function __construct($nombre){
			$this->name=$nombre;
		}

		public function setColor($color){
			$this->color=$color;
		}

		public abstract function area();
		public abstract function perimetro();

		public function mensaje(){
			echo "El area es: ".$this->area()." . Y el perimetro es: ".$this->perimetro();
		}

		public abstract function pintFigura($n,$col);

	}







 ?>