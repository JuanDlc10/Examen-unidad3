<?php
    session_start();
    include "./conexion.php";
    $conexion = conexion();
    $nombre = $_POST['nombre'];
    $categoria = $_POST['categoria'];
    $descripcion = $_POST['descripcion'];
    $piezas = $_POST['piezas'];
    $encargado = $_POST['encargado'];
    $fecha = $_POST['fecha'];
    $nombreImagen = $_FILES['imagen']['name'];
    $ruta = $_FILES['imagen']['tmp_name'];
    $destino = "../imagen/" . $nombreImagen;
    if (move_uploaded_file($ruta,$destino)) {
        $sql = "INSERT INTO t_inventario(
            nombre,
            categoria,
            descripcion,
            piezas,
            encargado,
            fecha,
            imagen)
            VALUES(
            '$nombre',
            '$categoria',
            '$descripcion',
            '$piezas',
            '$encargado',
            '$fecha',
            '$nombreImagen')";
            $respuesta = mysqli_query($conexion,$sql);
            if ($respuesta) {
                $_SESSION['mensaje'] = 'insertar';
                header ("location:../index.php");
            }else{
                echo "No se puedo agregar :(";
            }
    }else{
        echo 'No se pudo subir';
    }



?>