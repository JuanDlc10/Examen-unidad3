<?php
    session_start();
    include "./conexion.php";
    $conexion = conexion();
    $id = $_GET['id'];
    $nombre = $_GET['nombre'];
    if (unlink("../imagen/" . $nombre)) {
        $sql = "DELETE FROM t_inventario WHERE id = '$id'";
        $respuesta = mysqli_query($conexion,$sql);
        if ($respuesta) {
            $_SESSION['mensaje'] = 'eliminar';
            header("location:../index.php");
        }else {
            echo 'No se pudo borrar el registro';
        }
    }else{
        
    }
?>