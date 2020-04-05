<?php
 
class ModelHorario{

 	protected $pdo;

 	protected $IDHorario;
 	protected $Descripcion;
 	protected $Hora_Inicio;
    protected $Hora_Finalizacion;
    protected $EstadoAct;

    public function __construct(){
        $this->pdo = Conex::Conexion();
    }

 	public function __getIDHorario () : ? int {
 		return $this->IDHorario;
 	}

 	public function __setIDHorario (int $id){
 		$this->IDHorario=$id;
 	}

 	public function __getDescripcion () : ? string {
 		return $this->Descripcion;
 	}

 	public function __setDescripcion(string $Descrip){
 		$this->Descripcion=$Descrip;
 	}

 	public function __getHora_Inicio () {
 		return $this->Hora_Inicio;
 	}

 	public function __setHora_Inicio($Hora_I){
 		$this->Hora_Inicio=$Hora_I;
 	}

 	public function __getHora_Finalizacion () {
 		return $this->Hora_Finalizacion;
 	}

 	public function __setHora_Finalizacion($Hora_Fin){
 		$this->Hora_Finalizacion=$Hora_Fin;
    }
    
    public function __getEstadoAct () : ? int {
        return $this->EstadoAct;
    }

    public function __setEstadoAct (int $Est){
        $this->EstadoAct=$Est;
    } 


 	public function Listar(){
 		try{

             $consulta=$this->pdo->prepare("SELECT * FROM horario;");
             
             $consulta->execute();
             
             return $consulta->fetchAll(PDO::FETCH_OBJ);
             
 		}catch(Exception $e){

            die ('Error: '.$e->getMessage());
             
 		}
     }
     
 	public function Insertar(ModelHorario $hor){
        try{

            $consulta="INSERT INTO horario(Descripcion,Hora_Inicio,Hora_Finalizacion,EstadoAct) VALUES (?,?,?,?);";

            $this->pdo->prepare($consulta)

                ->execute(array(

                $hor->__getDescripcion(),

                $hor->__getHora_Inicio(),

                $hor->__getHora_Finalizacion(),
                
                $hor->__getEstadoAct()

                ));

        }catch(Exception $e){

            die ('Error: '.$e->getMessage());

        }
    }

    public function Actualizar(ModelHorario $hor){
        try{

            $consulta="UPDATE horario SET Descripcion=?,Hora_Inicio=?,Hora_Finalizacion=?,EstadoAct=? WHERE IDHorario=?;";

            $this->pdo->prepare($consulta)

                ->execute(array(

                $hor->__getDescripcion(),

                $hor->__getHora_Inicio(),

                $hor->__getHora_Finalizacion(),

                $hor->__getEstadoAct(),

                $hor->__getIDHorario()

                ));

        }catch(Exception $e){

            die ('Error: '.$e->getMessage());

        }
    }

 	public function Obtener($id){
 		try{

             $consulta=$this->pdo->prepare("SELECT * FROM horario WHERE IDHorario=?;");
             
             $consulta->execute(array($id));
             
             $result=$consulta->fetch(PDO::FETCH_OBJ);
             
             $hor=new ModelHorario();

             $hor->__setIDHorario($result->IDHorario);
             
             $hor->__setDescripcion($result->Descripcion);
             
             $hor->__setHora_Inicio($result->Hora_Inicio);
             
             $hor->__setHora_Finalizacion($result->Hora_Finalizacion);

             $hor->__setEstadoAct($result->EstadoAct);

             return $hor;
             
 		}catch(Exception $e){

            die ('Error: '.$e->getMessage());
             
 		}
 	}




 }





?>