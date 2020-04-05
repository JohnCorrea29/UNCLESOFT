<?php

require_once("Model/ModelHorario.php");

class HorarioController{

    protected $modelo;

    public function __construct(){

        $this->modelo = new ModelHorario();

    }

    public function Home(){

        require_once("View/Dashboard/examples/Horario.php");

    }

    public function Guardar(){

        $hor=new ModelHorario();

        $hor->__setIDHorario(intval($_REQUEST['IDHorario']));

        $hor->__setDescripcion($_REQUEST['Descripcion']);

        $hor->__setHora_Inicio($_REQUEST['Hora_Inicio']);

        $hor->__setHora_Finalizacion($_REQUEST['Hora_Finalizacion']);
        
        $hor->__setEstadoAct($_REQUEST['EstadoAct']);
        
        
        $hor->__getIDHorario() > 0 ?

        $this->modelo->Actualizar($hor) :

        $this->modelo->Insertar($hor);

        header("location:?c=Horario");
    }

    public function Editar(){

        if(isset($_REQUEST["id"])){

            $hor=$this->modelo->Obtener($_REQUEST["id"]);
            
        }

        require_once("View/Dashboard/examples/Modificarhor.php");
        
    }


}


?>