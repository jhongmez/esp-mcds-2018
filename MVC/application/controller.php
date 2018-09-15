<?php 

class Controller {
	public $load;
	public $model;

	public function __construct() {
		$this->load  = new Load;
		$this->model = new Model;

		if (isset($_GET['page'])) {
			if($_GET['page'] == 'add') {
				$this->add();
			}
			//Obtenemos el id de cada uno de los usuarios
			if ($_GET['page'] == 'show') {
				$this->show($_GET['id']);
			}
		} else {
			$this->home();
		}
		
	}

	public function home() {
		//$data = $this->model->getInfo();
		$data = $this->model->getAllUsers();
		$this->load->view('home.php', $data);
	}

	//Nuestro adicionar
	public function add() {

		if($_POST) {
			$firstName   = $_POST['firstName'];
			$lastName    = $_POST['lastName'];
			$email       = $_POST['email'];
			$phoneNumber = $_POST['phoneNumber'];
			$address     = $_POST['address'];
			if ($this->model->addUser($firstName, $lastName, $email, $phoneNumber, $address)) {
				//Creamos la variable status donde nos va a mostrar el mensaje de alerta
				$_SESSION['status'] = "success";
				$_SESSION['message'] = "User was added successfully";
				header('Location: ./');
				// echo "<script> alert('User was added successfully!'); window.location.replace('./'); </script>";
			} else {
				$_SESSION['status'] = "error";
				$_SESSION['message'] = "User wasn't added successfully";
				header('Location: ./');
			}
			
		}

		$this->load->view('users/add.php');
	}

	//Aqui hacemos nuestro consultar
	public function show($id) {
		$data = $this->model->getUser($id);
		$this->load->view('users/show.php', $data);
	}

}

?>