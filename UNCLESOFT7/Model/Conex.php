<?php
    class Conex{

        public static function Conexion(){

            try {

                $conexion=new PDO('mysql:host=localhost; dbname=unclesoft','root','');
                
                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
                $conexion->exec("SET CHARACTER SET utf8");
        
        
            } catch (PDOException $e) {
        
                die ('Error: '.$e->getMessage());
                
                echo "Linea del error: ".$e->getLine();
        
            }
            return $conexion;
        }
    }
?>
