<?php

class MainModel{

	protected $conf;
    protected $db;
    protected $post;
	protected $t;

    protected function init($conf, $lang, $post){

        require_once(__DIR__."/../services/DatabaseServices.class.php");

		$this->conf = $conf;
		$this->t = $lang;
		$this->post = $post;
        $this->db = new DatabaseServices($this->conf['dbStg']);
        
    }

    public function __construct($conf, $lang, $post){
        $this->init($conf, $lang, $post);
    }

    public function getPost(){
        return $this->post;
    }
	
	public function getLang(){
        return $this->t;
    }
}

?>
