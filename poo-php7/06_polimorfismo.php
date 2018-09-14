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
		$this->base   = $b;
	}
	public function getArea() {
		return $this->base * $this->altura;
	}
}
$cir = new Circulo(8);
echo "El área del Círculo es: ".round($cir->getArea());

$rec = new Rectangulo(5,4);
echo "\n\nEl área del Rectángulo es:".$rec->getArea();





?>