<?php 
    $sql = "SELECT * FROM t_inventario ORDER BY nombre";
    $respuesta = mysqli_query($conexion,$sql);
?>
<table class="table table-danger table-striped table-hover table-bordered table-sm table-responsive-sm mt-4"
    id="tablaExamen">
    <thead class="text-center">
        <tr>
            <th scope="col">Nombre HW</th>
            <th scope="col">Categoria</th>
            <th scope="col">Descripción</th>
            <th scope="col">Numero de piezas</th>
            <th scope="col">Encargado</th>
            <th scope="col">Fecha de agregado</th>
            <th scope="col">imagen</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
        </tr>
    </thead>
    <tbody class="text-center">
        <?php while($ver = mysqli_fetch_array($respuesta)):  ?>
        <tr>
            <td> <?php echo $ver['nombre']; ?> </td>
            <td> <?php echo $ver['categoria']; ?> </td>
            <td> <?php echo $ver['descripcion']; ?> </td>
            <td> <?php echo $ver['piezas']; ?> </td>
            <td> <?php echo $ver['encargado']; ?> </td>
            <td> <?php echo $ver['fecha']; ?> </td>
            <td>
                <img src="<?php echo "./imagen/". $ver['imagen'];?>"
                width="80px"
                <br>
                <a  href="<?php echo "./imagen/" . $ver['imagen']; ?>"
                    class="btn btn-success" 
                    download="<?php echo $ver['imagen'];  ?>">
                    Descargar
                </a>
            </td>
            <td>
                <a href="./actualizar.php?id=<?php echo $ver['id'];?>&nombre=<?php echo $ver['imagen'] ?>"
                class="btn btn-warning">
                    Editar
                </a>
            </td>
            <td>
                <a href="./backend/eliminar.php?id=<?php echo $ver['id'];?>&nombre=<?php echo $ver['imagen'] ?>"
                class="btn btn-danger">
                    Eliminar
                </a>
            </td>
        </tr>
        <?php  endwhile; ?>
    </tbody>
</table>