<?php
    $servername = "localhost";
    $database = "id15871147_datosexcel";
    $username = "id15871147_root";
    $password = "9mMq*&q_yom(zdlf";
    
    // Crear Conexion
    $con = mysqli_connect($servername, $username, $password, $database);
    // Checar Conexion
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    //echo "Se conecto a la base de datos";
    //mysqli_close($con);
?>

