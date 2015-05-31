<?php

class MainModel{

	protected $conf;
    protected $db;
    protected $post;

    protected function init($conf, $post){
        require_once(__DIR__."/../services/DatabaseServices.class.php");

		$this->conf = $conf;
		$this->post = $post;
        $this->db = new DatabaseServices($this->conf->dbStg);
        
    }

    public function __construct($conf, $post){
        $this->init($conf, $post);
    }

    public function getPost(){
        return $this->post;
    }
}

?>
