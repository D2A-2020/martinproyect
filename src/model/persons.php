<?php
//las clases del modelo se encargan de acceder a la base de datos
// y asi insertar, modificar, eliminar, extraer filas.



require_once $_SERVER['DOCUMENT_ROOT']."/connection.php";

class MPersons extends Connection{

    function getPersons(){
        $con = $this->con;

        $query = "select * from Person;";
        
        try{
            return $array= $con->query($query);
        }catch(Exception $e){
            echo $e;
        }
        
    }
}
?>