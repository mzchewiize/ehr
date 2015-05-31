<?php

$_CONF['db']['host'] = "http://localhost";
$_CONF['db']['username'] = "root";
$_CONF['db']['password'] = "";
$_CONF['db']['dbName'] = "EHR";

$_CONF = (object)array(
	"dbStg" => (object)array(
		"host" => "localhost",
		"username" => "root",
		"password" => "",
		"dbName" => "ehr"
	),
	"dbPrd" => (object)array(
		"host" => "http://prd",
		"usrename" => "root",
		"password" => "pass",
		"dbName" => "EHR"
	)
);

?>