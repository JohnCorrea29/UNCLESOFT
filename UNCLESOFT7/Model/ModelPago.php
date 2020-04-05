<?php

class ModelPago{

    protected $pdo;

    protected $IDPago; 
    protected $Cliente;
    protected $Fecha;
    protected $Pago;
    protected $Estado;

    public function __construct(){

        $this->pdo = Conex::Conexion();

    }
 
    public function __getIDPago () : ? int {
        return $this->IDPago;
    }

    public function __setIDPago (int $id){
        $this->IDPago=$id;
    }

    public function __getCliente () : ? int {
        return $this->Cliente;
    }

    public function __setCliente (int $Cli){
        $this->Cliente=$Cli;
    }

    public function __getFecha () : ? string {
        return $this->Fecha;
    }

    public function __setFecha (string $Fec){
        $this->Fecha=$Fec;
    }

    public function __getPago () : ? int {
        return $this->Pago;
    }

    public function __setPago (int $Pag){
        $this->Pago=$Pag;
    }
    public function __getEstado () : ? int {
        return $this->Estado;
    }

    public function __setEstado (int $Est){
        $this->Estado=$Est;
    }

    public function SumPagos(){
        try {

            $consulta=$this->pdo->prepare("SELECT SUM(Pago) as PagosTotales FROM pago;");

            $consulta->execute();

            return $consulta->fetch(PDO::FETCH_OBJ);

        } catch (Exception $e) {

            die ('Error: '.$e->getMessage());

        }
    }

    public function Listar(){
        try {

            $consulta=$this->pdo->prepare("SELECT p.IDPago,u.Nombre, u.Apellido,u.Documento, p.Fecha,p.Pago, e.Descripcion FROM pago p  JOIN usuario u ON (u.IDUsuario=p.Cliente)  JOIN estado_pago e ON (e.IDEst_Pago=P.Estado);");

            $consulta->execute();

            return $consulta->fetchAll(PDO::FETCH_OBJ);

        } catch (Exception $e) {

            die ('Error: '.$e->getMessage());
            
        }
    }

    public function ListarClie(){
        try {

            $consulta=$this->pdo->prepare("SELECT Documento FROM usuario WHERE tipo_usuario=1;");

            $consulta->execute();

            return $consulta->fetchAll(PDO::FETCH_OBJ);

        } catch (Exception $e) {

            die ('Error: '.$e->getMessage());
            
        }
    }

    public function Insertar(ModelPago $pago){
        try {

            $consulta=("INSERT INTO pago(Cliente,Fecha,Pago,Estado) VALUES(?,?,?,?);");

            $this->pdo->prepare($consulta)

                ->execute(array(

                $pago->__getCliente(),

                $pago->__getFecha(),

                $pago->__getPago(),

                $pago->__getEstado()

            ));

        } catch (Exception $e) {

            die ('Error: '.$e->getMessage());
            
        }
    }


    public function Actualizar(ModelPago $pago){
        try {

            $consulta="UPDATE pago SET Cliente=?,Fecha=?,Pago=?,Estado=? WHERE IDPago=?;";

            $this->pdo->prepare($consulta)

                ->execute(array(

                $pago->__getCliente(),

                $pago->__getFecha(),

                $pago->__getPago(),

                $pago->__getEstado(),

                $pago->__getIDPago()
                

            ));

        } catch (Exception $e) {

            die ('Error: '.$e->getMessage());
            
        }
    }

    public function Obtener($id){
        try {

            $consulta=$this->pdo->prepare("SELECT * FROM pago WHERE IDPago=?;");

            $consulta->execute(array($id));

            $result=$consulta->fetch(PDO::FETCH_OBJ);

            $pago = new ModelPago();
            
            $pago->__setIDPago($result->IDPago);

            $pago->__setCliente($result->Cliente);

            $pago->__setFecha($result->Fecha);

            $pago->__setPago($result->Pago);

            $pago->__setEstado($result->Estado);

            return $pago;

        } catch (Exception $e) {

            die ('Error: '.$e->getMessage());
            
        }
    }
}




?>