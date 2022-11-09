<?php 
    function conexion(){
        return mysqli_connect(
            'localhost',
            'juan',
            '12345',
            'inventario'
        );
    }
?>