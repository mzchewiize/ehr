<?php 

class HomeModel extends MainModel {

	public function __construct($conf, $post){
        $this->init($conf, $post);
    }
	
	public function getCompanyByID($a){
		$sql = "SELECT * 
				FROM companies";
		$query = $this->db->sqlQuery($sql);
		$res = $this->db->fetchArray($query);
		
		return $res;
	}

}

?>