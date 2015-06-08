<?php

class MainController{

    protected $model;
    protected $twig;
    protected $binding;
    protected $template;
	protected $t;

    protected function init($m){

        $envConf = array(
            "cache" => "cache"
        );

        $this->model = $m;
		$this->t = $this->model->getLang();
		
        $loader = new Twig_Loader_Filesystem("views/templates");
        $this->twig = new Twig_Environment($loader);

        $this->template = "mainLayout.html.twig";
        $this->binding = array(
            "incHeader" => "header.html.twig",
            "incBody" => "home.html.twig",
            "incFooter" => "footer.html.twig",
            "title" => $this->t->main->title,
            "js" => "home"
        );
    }

    public function __construct($m){
        $this->init($m);
    }

    public function render(){
        return $this->twig->render($this->template, $this->binding);
    }
}	
?>