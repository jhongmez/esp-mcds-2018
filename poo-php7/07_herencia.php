<?php 

class Operacion {
	protected $num1;
	protected $num2;

	public function __construct($num1, $num2) {
		$this->num1 = $num1;
		$this->num2 = $num2;
	}
}

class Suma extends Operacion {
	public function getResultado() {
		return $this->num1 + $this->num2;
	}
}

class Resta extends Operacion {
	public function getResultado() {
		return $this->num1 - $this->num2;
	}
}

class Producto extends Operacion {
	public function getResultado() {
		return $this->num1 * $this->num2;
	}
}

class Division extends Operacion {
	public function getResultado() {
		return $this->num1 / $this->num2;
	}
}

$oper1 = new Suma(6, 13);
echo "\nLa Suma es: ".$oper1->getResultado();

$oper2 = new Resta(6, 13);
echo "\nLa Resta es: ".$oper2->getResultado();

$oper3 = new Producto(6, 13);
echo "\nEl Producto es: ".$oper3->getResultado();

$oper4 = new Division(6, 13);
echo "\nLa División es: ".$oper4->getResultado();


?>