<?php

require_once("reqFiles.php");
require_once("models/MainModel.class.php");
require_once("models/LoginModel.class.php");
require_once("controllers/MainController.class.php");
require_once("controllers/LoginController.class.php");

$model = new LoginModel($_CONF, $_POST);
$ctrl = new LoginController($model);

echo $ctrl->render();

?>