<?php
    include './backend/conexion.php';
    $conexion = conexion();
    $id = $_GET['id'];
    $sql = "SELECT * FROM t_inventario WHERE id = '$id'";
    $respuesta = mysqli_query($conexion,$sql);
    $item = mysqli_fetch_array($respuesta); 
    include"./header.php"; 
?>
    
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <h1>Actualizar producto</h1>
                <form action="./backend/actualizar.php" method="post" enctype="multipart/form-data" >
                <input type="text" hidden name="id" value="<?php echo $item['id'];?>">
                    <label for="nombre">Nombre del hardware</label>
                    <input type="text" name="nombre" id="nombre" class="form-control"
                    value="<?php echo $item['nombre'];?>">
                    <label for="categoria">Categoria</label>
                    <select name="categoria" id="categoria" class="form-select" aria-label="Default select example"
                    value="<?php echo $item['categoria'];?>">
                        <option selected>Selecciona una categoria</option>
                        <option value="1">Categoria 1</option>
                        <option value="2">Categoria 2</option>
                        <option value="3">Categoria 3</option>
                    </select>
                    <label for="descripcion">Descripcion</label>
                    <input type="text" name="descripcion" id="descripcion" class="form-control"
                    value="<?php echo $item['descripcion'];?>">
                    <label for="piezas">Numero de piezas</label>
                    <input type="text" name="piezas" id="piezas" class="form-control"
                    value="<?php echo $item['piezas'];?>">
                    <label for="encargado">Encargado</label>
                    <select name="encargado" id="encargado" class="form-select" aria-label="Default select example"
                    value="<?php echo $item['encargado'];?>">
                        <option selected>Selecciona un encargado</option>
                        <option value="1">Encargado 1</option>
                        <option value="2">Encargado 2</option>
                        <option value="3">Encargado 3</option>
                    </select>
                    <label for="fecha">Fecha de agregado</label>
                    <input type="date" name="fecha" id="fecha" class="form-control"
                    value="<?php echo $item['fecha'];?>">
                    <label for="imagen">Imagen</label>
                    <input type="file" name="imagen" id="imagen" class="form-control"
                    value="<?php echo $item['imagen'];?>">
                    <button class="btn btn-primary mt-3">
                        actualizar
                    </button>
                </form>
            </div>
        </div>
    </div>






<?php  include"./footer.php"; ?>