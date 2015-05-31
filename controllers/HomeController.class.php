<?php

class HomeController extends MainController{

	public function __construct($m){
		$this->init($m);
		
		$comName = $this->model->getCompanyByID("1");
		
		$this->binding['incBody'] = "home.html.twig";
		$this->binding['js'] = "home.js";
		$this->binding['comName'] = $comName['companyName'];
	}
}

?>