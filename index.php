<?php

require_once("reqFiles.php");
require_once("models/MainModel.class.php");
require_once("models/HomeModel.class.php");
require_once("controllers/MainController.class.php");
require_once("controllers/HomeController.class.php");

$model = new HomeModel($_CONF, $_T, $_POST);
$ctrl = new HomeController($model);

echo $ctrl->render();

?>