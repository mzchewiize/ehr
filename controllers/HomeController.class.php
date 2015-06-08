<?php

class HomeController extends MainController{

	public function __construct($m){
		$this->init($m);
		
		$this->binding['incBody'] = "home.html.twig";
		$this->binding['js'] = "home.js";
	}
}

?>