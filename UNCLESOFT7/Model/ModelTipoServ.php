<?php

class ModelTipoServ{

    protected $pdo;

    protected $ID_TipoServ; 
    protected $Descripcion;
    protected $Precio;
    protected $EstadoAct;

    public function __construct(){
        $this->pdo = Conex::Conexion();
    }

    public function __getID_TipoServ () : ? int {
        return $this->ID_TipoServ;
    }

    public function __setID_TipoServ (int $id){
        $this->ID_TipoServ=$id;
    }

    public function __getDescripcion () : ? string {
        return $this->Descripcion;
    }

    public function __setDescripcion (string $Descrip){
        $this->Descripcion=$Descrip;
    }

    public function __getPrecio () : ? int {
        return $this->Precio;
    }

    public function __setPrecio (int $Pre){
        $this->Precio=$Pre;
    }

    public function __getEstadoAct () : ? int {
        return $this->EstadoAct;
    }

    public function __setEstadoAct (int $Est){
        $this->EstadoAct=$Est;
    }

    public function Listar(){
        try {

            $consulta=$this->pdo->prepare("SELECT ID_TipoServ,Descripcion,Precio,EstadoAct FROM tipo_servicio");

            $consulta->execute();

            return $consulta->fetchAll(PDO::FETCH_OBJ);

        } catch (Exception $e) {

            die ('Error: '.$e->getMessage());
            
        }
    }

    public function Insertar(ModelTipoServ $serv){
        try {

            $consulta="INSERT INTO tipo_servicio(Descripcion,Precio,EstadoAct) VALUES(?,?,?);";

            $this->pdo->prepare($consulta)

                ->execute(array(

                $serv->__getDescripcion(),

                $serv->__getPrecio(),

                $serv->__getEstadoAct(),

            ));

        } catch (Exception $e) {

            die ('Error: '.$e->getMessage());
            
        }
    }

    public function Actualizar(ModelTipoServ $serv){
        try {

            $consulta="UPDATE  tipo_servicio SET Descripcion=?,Precio=?,EstadoAct=? WHERE ID_TipoServ=?;";

            $this->pdo->prepare($consulta)

                ->execute(array(

                $serv->__getDescripcion(),

                $serv->__getPrecio(),

                $serv->__getEstadoAct(),

                $serv->__getID_TipoServ()

            ));

        } catch (Exception $e) {

            die ('Error: '.$e->getMessage());
            
        }
    }

    public function Obtener($id){
        try {

            $consulta=$this->pdo->prepare("SELECT * FROM tipo_servicio  WHERE ID_TipoServ=?;");

            $consulta->execute(array($id));

            $result=$consulta->fetch(PDO::FETCH_OBJ);

            $serv = new ModelTipoServ();
            
            $serv->__setID_TipoServ($result->ID_TipoServ);

            $serv->__setDescripcion($result->Descripcion);

            $serv->__setPrecio($result->Precio);

            $serv->__setEstadoAct($result->EstadoAct);


            return $serv;

        } catch (Exception $e) {

            die ('Error: '.$e->getMessage());
            
        }
    }
}



?>