<?php

require_once("Model/Conex.php");

if (!isset($_REQUEST['c'])) {

    require_once("Controller/HomeController.php");

    $Controller= new HomeController();

    call_user_func(array($Controller,"Home"));

}else{

    $Controller = $_REQUEST['c'];

    require_once("Controller/$Controller"."Controller.php");

    $Controller = ucwords($Controller)."Controller";

    $Controller = new $Controller;

    $Accion  = isset($_REQUEST['a']) ? $_REQUEST['a'] : "Home";

    call_user_func(array($Controller,$Accion));
    
}

?>