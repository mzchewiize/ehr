<?php

class LoginController extends MainController{

	public function __construct($m){
		$this->init($m);

		$this->binding['incBody'] = "login.html.twig";
		$this->binding['js'] = "login.js";
	}
}

?>