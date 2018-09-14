<?php 

class Load {
	public function view($view, $data = null) {
		if (is_array($data)) {
			extract($data);
		}
		include 'views/'.$view;
	}
}

 ?>