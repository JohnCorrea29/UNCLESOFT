<?php

require_once("Model/ModelTipoServ.php");

class TipoServController{

    protected $modelo;

    public function __construct(){

        $this->modelo = new ModelTipoServ();

    }

    public function Home(){

        require_once("View/Dashboard/examples/AdministrarServ.php");

    }

    public function Guardar(){

        $serv=new ModelTipoServ();

        $serv->__setID_TipoServ(intval($_REQUEST['ID_TipoServ']));

        $serv->__setDescripcion($_REQUEST['Descripcion']);

        $serv->__setPrecio($_REQUEST['Precio']);
        
        $serv->__setEstadoAct($_REQUEST['EstadoAct']);
        

        $serv->__getID_TipoServ() > 0 ?

        $this->modelo->Actualizar($serv) :

        $this->modelo->Insertar($serv);

        header("location:?c=TipoServ");
    }

    public function Editar(){

        if(isset($_REQUEST["id"])){

            $serv=$this->modelo->Obtener($_REQUEST["id"]);
            
        }

        require_once("View/Dashboard/examples/ModificarServ.php");
        
    }


}


?>