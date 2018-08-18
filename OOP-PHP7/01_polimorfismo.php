<?php  
	
	interface Forma {
		public function getArea();
	}

	class Circulo implements Forma {
		private $radio;
		public function __construct($r) {
			$this->radio = $r;
		}

		public function getArea() {
			return ($this->radio * $this->radio) * pi();
		}
	}

	class Rectangulo implements Forma {
		private $altura;
		private $base;

		public function __construct($a, $b) {
			$this->altura = $a;
			$this->base = $b;
		}

		public function getArea2() {
			return $this->base * $this->altura;
		}
	}

	$cir = new Circulo(8);
	echo "Hola: ".round($cir->getArea());
	$rec = new rectangulo(2,5);
	echo "El área del rectangulo es: ".rec->getArea();

?>