<?php

class ModelUsuario{

    protected $pdo;

    protected $IDUsuario;
    protected $Nombre;
    protected $Apellido;
    protected $Documento;
    protected $Tipo_Documento;
    protected $Fecha_Nacimiento;
    protected $Direccion;
    protected $Tipo_Usuario;
    protected $Correo;
    protected $Password;
    protected $Horario;
    protected $EstadoAct;

    public function __construct(){
        $this->pdo = Conex::Conexion();
    }

    public function __getIDUsuario () : ? int{
        return $this->IDUsuario;
    }

    public function __setIDUsuario(int $id){
        $this->IDUsuario=$id;
    }

    public function __getNombre () : ? string {
        return $this->Nombre;
    }

    public function __setNombre(string $Nom){
        $this->Nombre=$Nom;
    }

    public function __getApellido () : ? string {
        return $this->Apellido;
    }

    public function __setApellido(string $Ape){
        $this->Apellido=$Ape;
    }

    public function __getDocumento () : ? string {
        return $this->Documento;
    }

    public function __setDocumento(string $Doc){
        $this->Documento=$Doc;
    }

    public function __getTipoDocumento () : ? int {
        return $this->Tipo_Documento;
    }

    public function __setTipoDocumento(int $Tipo_Doc){
        $this->Tipo_Documento=$Tipo_Doc;
    }

    public function __getFecha_Nacimiento (){
        return $this->Fecha_Nacimiento;
    }

    public function __setFecha_Nacimiento($Fecha){
        $this->Fecha_Nacimiento=$Fecha;
    }

    public function __getDireccion () : ? string {
        return $this->Direccion;
    }

    public function __setDireccion(string $Direc){
        $this->Direccion=$Direc;
    }

    public function __getTipo_Usuario () : ? int {
        return $this->Tipo_Usuario;
    }

    public function __setTipo_Usuario(int $Tipo_Usu){
        $this->Tipo_Usuario=$Tipo_Usu;
    }

    public function __getCorreo () : ? string {
        return $this->Correo;
    }

    public function __setCorreo(string $Correo){
        $this->Correo=$Correo;
    }

    public function __getPassword () : ? string{
        return $this->Password;
    }

    public function __setPassword(string $Pass){
        $this->Password=$Pass;
    }

    public function __getHorario () : ? int   {
        return $this->Horario;
    }

    public function __setHorario($Hor){
        $this->Horario=$Hor;
    }

    public function __getEstadoAct(){
        return $this->EstadoAct;
    }

    public function __setEstadoAct(int $Est){
        $this->EstadoAct=$Est;
    }

    public function Listar(){
        try {

            $consulta=$this->pdo->prepare("SELECT u.IDUsuario, u.Nombre,u.Apellido,u.Documento,tc.Descripcion as TipoDoc,u.Fecha_Nacimiento,u.Direccion,tu.Descripcion as TipoUsu,u.Correo,h.Descripcion as Horario,u.EstadoAct
            FROM usuario u 
            LEFT JOIN tipo_documento tc
            ON(tc.IDTipoDoc=u.Tipo_Documento)
            LEFT JOIN tipo_usuario tu
            ON(tu.IDTipoUsua=u.Tipo_Usuario)
            LEFT JOIN horario h 
            ON(h.IDHorario=u.Horario)
            WHERE tipo_usuario IN(1,2);");

            $consulta->execute();

            return $consulta->fetchAll(PDO::FETCH_OBJ);

        } catch (Exception $e) {

            die ('Error: '.$e->__getMessage());
            
        }
    }


    public function Insertar(ModelUsuario $usu)
    {
       try{
           $consulta = "INSERT INTO usuario(Nombre,Apellido,Documento,Tipo_Documento,Fecha_Nacimiento,Direccion,Tipo_Usuario,Correo,Password,Horario,EstadoAct) VALUES (?,?,?,?,?,?,?,?,?,?,?);";

           $this->pdo->prepare($consulta)

                        ->execute(array( 

                            $usu->__getNombre(),

                            $usu->__getApellido(),

                            $usu->__getDocumento(),

                            $usu->__getTipoDocumento(),

                            $usu->__getFecha_Nacimiento(),

                            $usu->__getDireccion(),

                            $usu->__getTipo_Usuario(),

                            $usu->__getCorreo(),

                            $usu->__getPassword(),

                            $usu->__getHorario(),

                            $usu->__getEstadoAct()
                        ));
       }catch(Exception $e){

            die ('Error: '.$e->__getMessage());

       }       
    }

    public function Actualizar(ModelUsuario $usu){
        try {

            $consulta = "UPDATE usuario SET
            Nombre=?,
            Apellido=?,
            Documento=?,
            Tipo_Documento=?,
            Fecha_Nacimiento=?,
            Direccion=?,
            Correo=?,
            Password=?,
            Horario=?
            WHERE IDUsuario=?;";

            $this->pdo->prepare($consulta)

                ->execute(array( 

                    $usu->__getNombre(),

                    $usu->__getApellido(),

                    $usu->__getDocumento(),

                    $usu->__getTipoDocumento(),

                    $usu->__getFecha_Nacimiento(),

                    $usu->__getDireccion(),

                    $usu->__getCorreo(),

                    $usu->__getPassword(),

                    $usu->__getHorario(),

                    $usu->__getIDUsuario()
                 ));
    

        } catch (Exception $e) {

            die ('Error: '.$e->getMessage());
            
        }
    }

    public function Obtener($id)
    {
        try{
            $consulta=$this->pdo->prepare("SELECT * FROM usuario WHERE IDUsuario=?;");

            $consulta->execute(array($id));

            $result = $consulta->Fetch(PDO::FETCH_OBJ);

            $usu = new ModelUsuario();

            $usu->__setIDUsuario($result->IDUsuario);

            $usu->__setNombre($result->Nombre);

            $usu->__setApellido($result->Apellido);

            $usu->__setDocumento($result->Documento);

            $usu->__setTipoDocumento($result->Tipo_Documento);

            $usu->__setFecha_Nacimiento($result->Fecha_Nacimiento);

            $usu->__setDireccion($result->Direccion);

            $usu->__setTipo_Usuario($result->Tipo_Usuario);

            $usu->__setCorreo($result->Correo);

            $usu->__setPassword($result->Password);

            $usu->__setHorario($result->Horario);

            $usu->__setEstadoAct($result->EstadoAct);

            return $usu;

        }catch(exception $e){

            die ('Error: '.$e->__getMessage());

        }
    }
}




?>