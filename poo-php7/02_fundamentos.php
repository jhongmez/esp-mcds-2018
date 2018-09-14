<?php 

# Clase: Conjunto de Atributos y Métodos
class Animal {
	# Atributos: Propiedades del Objeto
	public $nombre;
	public $edad;
	public $peso;
	# Métodos: Funcionalidad del Objeto
	public function correr() {
		echo "\nEsta corriendo...";
	}
	public function comer() {
		echo "\nEsta comiendo...";
	}
	public function dormir() {
		echo "\nEsta durmiendo...";
	}
}
# Creación Objeto Animal
$an1 = new Animal;
$an1->correr();
$an1->comer();
$an1->dormir();

?>