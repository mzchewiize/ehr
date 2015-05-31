<?php

class DatabaseServices{

    private $conn;

    protected function init($databaseConf){
	
        $this->conn = new mysqli($databaseConf->host, $databaseConf->username, $databaseConf->password, $databaseConf->dbName);

        if($this->conn->connect_errno){
            error_log("Connect failed : ". $mysqli->connect_error);
        }
    }

    public function __construct($databaseConf){
        $this->init($databaseConf);
    }

    public function sqlQuery($sql){

        $query = $this->conn->query($sql);

        return $query;

    }

    public function getLastInsertId(){

        return $this->conn->insert_id;

    }

    public function fetchArray($query){

        return $query->fetch_array();
    }

    public function numRows($query){

        return $query->num_rows;
    }
}

?>
