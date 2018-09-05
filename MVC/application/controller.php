<?php 
    class Controller{
        //Creamos dos variables para invocarlas dentro de las funciones
        public $load;
        public $model;

        //Aqui hacemos el llamado de las clases con los new
        public function __construct(){
            $this->load = new Load;
            $this->model = new Model;
            $this->home();
        }

        public function home() {
            //llamamos la funcion del modelo la cual es getInfo
            $data = $this->model->getInfo();
            $this->load->view('home.php',$data);
        }
    }
?>