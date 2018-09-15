<?php 

class Model extends DataBase {

	public function __construct() {
		parent::__construct('localhost', 'root', '', 'mcds-1747586');
		parent::connection();
		//parent::disconnection();
	}

	public function getAllUsers() {
		try {
			$sql = "SELECT * FROM users";
			$stm = $this->conx->prepare($sql);
			$stm->execute();
			return $stm->fetchAll();

		} catch (PDOException $e) {
			echo $e->getMessage();
		}

	}

	public function addUser($firstName, $lastName, $email, $phoneNumber, $address) {
		try {
			$sql = "INSERT INTO users (id, firstName, lastName, email, phoneNumber, address) 
			        VALUES (DEFAULT, :firstName, :lastName, :email, :phoneNumber, :address)";
			$stm = $this->conx->prepare($sql);
			$stm->bindparam(":firstName", $firstName);
			$stm->bindparam(":lastName", $lastName);
			$stm->bindparam(":email", $email);
			$stm->bindparam(":phoneNumber", $phoneNumber);
			$stm->bindparam(":address", $address);
			if($stm->execute()) {
				return true;
			} else {
				return false;
			}
		} catch (PDOException $e) {
			echo $e->getMessage();
		} 
	}

	//Declaramos la variable id para obtener uno a uno de los usuarios
	public function getUser($id) {
		try {
			$sql = "SELECT * FROM users WHERE id = :id";
			$stm = $this->conx->prepare($sql);
			//el bindparam nos evita codigo malicioso o sqlinjection
			$stm->bindparam(":id", $id);
			$stm->execute();
			return $stm->fetchAll();

		} catch (PDOException $e) {
			echo $e->getMessage();
		}

	}


} 


?>