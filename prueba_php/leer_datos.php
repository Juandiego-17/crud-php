<?php

$conexion = new mysqli('localhost','root','','prueba_datos');
if ($conexion->connect_errno){
    die ('lo siento hubo un problema en la conexion');
}else{
    $sql = "SELECT * FROM USUARIOS";
    $resultado = $conexion->query($sql);

    if($resultado->num_rows){
        while($fila =$resultado->fetch_assoc()){

            echo $fila ['id'].' '.$fila ['nombre']. '<br/>';
        }
    }else{
        echo 'no hay datos';
    }
    }

?>