<?php

$name = $POST['name'];


// las clases pertenecientes a la carpeta controladores 
// se encargan de ser intermediarias entre la vista y el mododelo
// es decir, se encargar de verificar que el usuario que pide la informacion 
// tenga los debidos permisos para realizar alguna accion,
// como listar, editar, eliminar o insertar filas. (GET, PUT, DELETE, metodos standar)

// Tambien se utilizan estas clases para introducir la informacion en un array
// que se retorna a la vista.


// El uso de  controladores tomara un valor fundamental
// al utilizar sistemas de multiples usuarios con distinitos privilegios 

//require $_SERVER['DOCUMENT_ROOT']."/connection.php";
require $_SERVER['DOCUMENT_ROOT']."/model/persons.php";

class CPersons extends Connection{
   

    function __construct(){
        $this->con = new Connection();
    }

    function getPersons(){
        //devulve una tabla con todas las celdas de la tabla personas en db

        $mp = new MPersons();
        $rows = $mp->getPersons();

        $table = array(); //todas las filas

        foreach($rows as $row){ //rows todas las filas de persona
           
           $tr = array();
           array_push($tr, $row['id'], $row['ci'],$row['name'],$row['surname'],$row['password']); 
           array_push($table, $tr); //fila actual se agrega a tabla
        }

        return $table; //juan y de sofia que soon filas
    }

   


}
