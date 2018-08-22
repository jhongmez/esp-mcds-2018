<?php

abstract class Fruta {
	protected $nombre;
	protected $color;
	protected $precio;
	
	public function __construct($n, $c, $p) {
		$this->nombre = $n;
		$this->color = $c;
		$this->precio = $p;
	}
	
	abstract public function getInfo();
}

//hereda parametros de la abstracta
class Pera extends Fruta {
	public function getInfo() {
		return " - Nombre: ".$this->nombre." - Color: ".$this->color." - 
				Precio: ".$this->precio;
	}	
}

class Banano extends Fruta {
	public function getInfo() {
		return " - Nombre: ".$this->nombre." - Color: ".$this->color." - 
				Precio: ".$this->precio;
	}	
}

//Se puede instanciar la clase hija pero NO la abstracta
//$fruta = new Fruta;
$fruta = new Pera('Pera Royal','Roja', 1000);
echo $fruta->getInfo();

$fruta = new Banano('Banano Acido','Amarillo', 100);
echo $fruta->getInfo();