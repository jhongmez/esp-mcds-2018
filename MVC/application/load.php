<?php 
    //creamos la clase Load
    class Load {
        public function view($view, $data = null){
            //Hacemos un condicional donde preguntamos que si es un Array extraiga los datos e incluimos la vista
            if( is_array($data)) {
                extract($data);
            }
            include 'views/'.$view;
        }
    }
?>