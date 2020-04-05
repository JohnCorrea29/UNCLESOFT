<?php

require_once("Model/ModelPago.php");

class PagoController{

    protected $modelo;

    public function __construct(){

        $this->modelo = new ModelPago();

    }

    public function Home(){

        require_once("View/Dashboard/examples/GestionPago.php");

    }

    public function Guardar(){

        $pago=new ModelPago();

        $pago->__setIDPago(intval($_REQUEST['IDPago']));

        $pago->__setCliente($_REQUEST['Cliente']);

        $pago->__setFecha($_REQUEST['Fecha']);

        $pago->__setPago($_REQUEST['Pago']);

        $pago->__setEstado($_REQUEST['Estado']);
        

        $pago->__getIDPago() > 0 ?

        $this->modelo->Actualizar($pago) :

        $this->modelo->Insertar($pago);

        header("location:?c=pago");
    }

    public function Editar(){

        if(isset($_REQUEST["id"])){

            $pago=$this->modelo->Obtener($_REQUEST["id"]);
            
        }

        require_once("View/Dashboard/examples/ModificarPago.php");
        
    }


}


?>