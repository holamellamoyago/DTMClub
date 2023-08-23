<?php

// Pasos para conectar una base de datos a una rama de PHP. 

// Debemos seguir estos pasos: 

//     1.Importar la base de datos
//     2.Realizar la consulta a SQL
//     3.Acceder a los resultados
//     4.Cerrar la conexion

function obtener_bd(){

    try {
    //1.
    require 'database.php';

    //2.
    $sql = "SELECT * FROM circuitos";

    //3.
    echo "<pre>";
    $consulta = mysqli_query($db, $sql);
    echo "</pre>";

    //4.
    $resultado = mysqli_close($db);
    return $consulta;

    } catch (\Throwable $th) {
    var_dump($th);    
    }

}



obtener_bd()

?>