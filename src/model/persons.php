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

    function editPerson($id, $ci, $name, $surname, $password){

        $con = $this->con;

        $query = "UPDATE Person SET ci=:ci, `name`=:name, surname= :surname, `password`=:password WHERE id=:id;";                    

        $stmt = $con->prepare($query);
        
        $stmt->bindParam(':id',$id);
        $stmt->bindParam(':ci',$ci);
        $stmt->bindParam(':name',$name);
        $stmt->bindParam(':surname',$surname);
        $stmt->bindParam(':password',$password);
        
        try{
            return $stmt->execute();
            
        }catch(Exception $e){
            return "Hubo un error al realizar la edicion\n". $e->getMessage();
            
        }
        
    }
}
?>