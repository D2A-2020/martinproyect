<!DOCTYPE html>
<html>
    <?php require_once $_SERVER['DOCUMENT_ROOT']."/connection.php" ?>
    <!-- Las clases de la carpeta "view" tienen como objetivo desplegar info de la base de datos 
         y tomar los datos mediante formularios  -->

    <title>MartinProyect</title>

    <h3>Personas:</h3>
    <?php $con = new Connection();?>


    <div id="simple_div" style="padding:10px;border:solid black 1px">
        <?php 
            require "controller/persons.php";
            
            $cp = new CPersons();
            //echo var_dump($p->getPersons()); //retornara una tabla con todas las personas (un string <table></table>)
            
            
            // foreach($p->getPersons() as $row){
            //     foreach($row as $value){
            //         echo $value;
            //     }
            // }

            $table = $cp->getPersons();
               
            ?>
            <table style="border:solid black 1px;border-collapse:collapse">
                <tr>
                    <th>ID</th>
                    <th>CI </th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Contrasenna</th>
                </tr>
                <?php 
                    foreach($table as $row){
                        echo "<tr style='border:solid 1px'>";
                         echo "<td>".$row[0]."</td>";
                         echo "<td>".$row[1]."</td>";
                         echo "<td>".$row[2]."</td>";
                         echo "<td>".$row[3]."</td>";
                         echo "<td>".$row[4]."</td>";
                        echo "</tr>";
                    }
                ?>
            </table>
    </div>

    <div>
    <p>Datos a editar:</p>
         <form action="controller/editPerson.php" method="post">
            <ul>
                <li><input type="text" name="id" id="" placeholder="id" style="border:solid red 1px"></li>
                <br>
                <li><input type="text" name="ci" id="" placeholder="ci"></li>
                <li><input type="text" name="name" id="" placeholder="name"></li>
                <li><input type="text" name="surname" id="" placeholder="surname"></li>
                <li><input type="text" name="password" id="" placeholder="password"></li>
                
            </ul>
            <input type="submit" value="Enviar">
         </form>
    </div>

</html>