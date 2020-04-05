<?php

require_once("Model/ModelPago.php");

class HomeController{

    protected $modelo;

    public function __construct(){

        $this->modelo = new ModelPago();

    }

    public function Home(){

        require_once("View/Dashboard/examples/Dashboard.php");
        
    }


}


?>