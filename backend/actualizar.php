<?php 
    session_start();
    include "./conexion.php";
    $conexion = conexion();
    $id = $_POST['id'];
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
        $sql = "UPDATE t_inventario SET nombre = '$nombre',
                                        categoria = '$categoria',
                                        descripcion = '$descripcion',
                                        piezas = '$piezas',
                                        encargado = '$encargado',
                                        fecha = '$fecha',
                                        imagen = '$nombreImagen'
                                        WHERE id = '$id'";
        $respuesta = mysqli_query($conexion,$sql);
        if ($respuesta) {
            header ("location:../index.php");
        }else{
            echo "No se puedo actualizar";
        }
    }else {
        $sql = "UPDATE t_inventario SET nombre = '$nombre',
                                        categoria = '$categoria',
                                        descripcion = '$descripcion',
                                        piezas = '$piezas',
                                        encargado = '$encargado',
                                        fecha = '$fecha',
                                        imagen = '$nombreImagen'
                                        WHERE id = '$id'";
        $respuesta = mysqli_query($conexion,$sql);
        if ($respuesta) {
            $_SESSION['mensaje'] = 'actualizar';
            header ("location:../index.php");
        }else{
            echo "No se puedo actualizar";
        }
    }

?>