<?php

require_once("Model/ModelUsuario.php");

class EmpleadoController{

    protected $modelo;

    public function __construct(){

        $this->modelo = new ModelUsuario();

    }

    public function Home(){

        require_once("View/Dashboard/examples/AdministrarEmp.php");

    }

    public function Guardar(){

        $usu=new ModelUsuario();

        $usu->__setNombre($_REQUEST['Nombre']);

        $usu->__setApellido($_REQUEST['Apellido']);

        $usu->__setDocumento($_REQUEST['Documento']);

        $usu->__setTipoDocumento($_REQUEST['Tipo_Documento']);

        $usu->__setFecha_Nacimiento($_REQUEST['Fecha_Nacimiento']);

        $usu->__setDireccion($_REQUEST['Direccion']);

        $usu->__setTipo_Usuario($_REQUEST['Tipo_Usuario']);

        $usu->__setCorreo($_REQUEST['Correo']);

        $usu->__setPassword($_REQUEST['Password']);

        $usu->__setHorario($_REQUEST['Horario']);

        $usu->__SetEstadoAct(intval($_REQUEST['EstadoAct']));

        $this->modelo->Insertar($usu);

        header("location:?c=empleado");
    }

    public function Obtener(){

        if(isset($_REQUEST["id"])){

            $usu=$this->modelo->Obtener($_REQUEST["id"]);
            
        }

        require_once("View/Dashboard/examples/ModificarEmp.php");
        
    }

    public function Editar(){

        $usu=new ModelUsuario();

        $usu->__setIDUsuario(intval($_REQUEST['IDUsuario']));

        $usu->__setNombre($_REQUEST['Nombre']);

        $usu->__setApellido($_REQUEST['Apellido']);

        $usu->__setDocumento($_REQUEST['Documento']);

        $usu->__setTipoDocumento($_REQUEST['Tipo_Documento']);

        $usu->__setFecha_Nacimiento($_REQUEST['Fecha_Nacimiento']);

        $usu->__setDireccion($_REQUEST['Direccion']);

        $usu->__setCorreo($_REQUEST['Correo']);

        $usu->__setPassword($_REQUEST['Password']);

        $usu->__setHorario($_REQUEST['Horario']);
        
        $this->modelo->Actualizar($usu);


        header("location:?c=Empleado");
    }


}


?>