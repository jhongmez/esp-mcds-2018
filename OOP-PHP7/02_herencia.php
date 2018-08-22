<?php

//Herencia
class Operacion {
	protected $num1;
	protected $num2;
	
	public function __construct($num1, $num2) {
		$this->num1 = $num1;
		$this->num2 = $num2;
	}
}

//Se hereda los parametros de padre con el extends

class Suma extends Operacion{
	public function getResult() {
		return $this->num1 + $this->num2;
	}	
}

class Resta extends Operacion{
	public function getResult() {
		return $this->num1 - $this->num2;
	}
}

class Mult extends Operacion{
	public function getResult() {
		return $this->num1 * $this->num2;
	}
}

class Divi extends Operacion{
	public function getResult() {
		return $this->num1 / $this->num2;
	}
}


//Creamos el obejto suma
$suma = new Suma(6, 13);
echo "La suma es: ".$suma->getResult()." - ";

$resta = new Resta(5, 2);
echo "La resta es: ".$resta->getResult()." - ";

$mult = new Mult(5, 2);
echo "La multiplicacion es: ".$mult->getResult()." - ";

$div = new Divi(5, 2);
echo "La división es: ".$div->getResult();