<?php 
    session_start();
    $mensaje = '';
    if (isset($_SESSION['mensaje'])) { 
        $mensaje = $_SESSION['mensaje'];
        unset($_SESSION['mensaje']); 
    }
    include "./backend/conexion.php"; 
    include "./header.php";
    $conexion = conexion();
?>


<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="display-1 text-center mt-4" > Examen Unidad 3 </h1>
            <a href="./agregar.php" class="btn btn-outline-primary">
                Agregar nuevo Hardware
            </a>
            <?php include "./tabla.php" ?>
        </div>
    </div>
</div>

<?php include "./footer.php"; ?>
    <script>
        let mensaje = '<?php echo $mensaje ?>';
        switch (mensaje) {
            case 'insertar':
                swal('Hardware agregado.!','Se agrego un nuevo componente satisfactoriamente','success');
                break;
            case 'actualizar':
                swal('Hardware actualizado.!','Se actualizo el componente satisfactoriamente','warning');
                break;
            case 'eliminar':
                swal('Hardware eliminado.!','Se elimino un componente satisfactoriamente','info');
        }
    </script>