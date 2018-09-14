<?php 

class Pokemon {
	private $nombre;
	private $tipo;
	private $salud;

	# Métodos SET - - - - - - - - - - - - 
	public function setNombre($nombre) {
		$this->nombre = $nombre;
	}
	public function setTipo($tipo) {
		$this->tipo = $tipo;
	}
	public function setSalud($salud) {
		$this->salud = $salud;
	}
	# Métodos GET - - - - - - - - - - - - 
	public function getNombre() {
		return $this->nombre;
	}
	public function getTipo() {
		return $this->tipo;
	}
	public function getSalud() {
		return $this->salud;
	}
	# Métodos - - - - - - - - - - - - - -
	public function atacar() {
		return "\nEl Pokemon: ".$this->getNombre()." - Tipo: ".$this->getTipo()." - Salud: ".$this->getSalud()." esta atacando...";
	}
	public function esquivar() {
		return "\nEl Pokemon: ".$this->getNombre()." - Tipo: ".$this->getTipo()." - Salud: ".$this->getSalud()." esta esquivando...";
	}
	public function evolucionar() {
		return "\nEl Pokemon: ".$this->getNombre()." - Tipo: ".$this->getTipo()." - Salud: ".$this->getSalud()." esta evolucionando...";
	}
}

$pk1 = new Pokemon;
$pk1->setNombre("Pikachu");
$pk1->setTipo("Electrico");
$pk1->setSalud(80);
echo $pk1->atacar();
# - - - - - - - - - - - - - - - - -
$pk2 = new Pokemon;
$pk2->setNombre("Squirtle");
$pk2->setTipo("Agua");
$pk2->setSalud(85);
echo $pk2->esquivar();
# - - - - - - - - - - - - - - - - -
$pk2 = new Pokemon;
$pk2->setNombre("Charmander");
$pk2->setTipo("Fuego");
$pk2->setSalud(90);
echo $pk2->evolucionar();

?>