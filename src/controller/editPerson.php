<?php

require $_SERVER['DOCUMENT_ROOT']."/model/persons.php";

$id = $_POST['id'];
$ci = $_POST['ci'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$password = $_POST['password'];

$mp = new MPersons();
    
$result = $mp->editPerson($id, $ci, $name, $surname, $password);


if($result=! 0){
     echo $result;
}

