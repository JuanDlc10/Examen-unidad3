<?php  include"./header.php"; ?>



    <div class="container mt-4">
        <div class="row">
            <div class="col">
            <h1 class="display-1 text-center mt-4" > Agregar nuevo componente </h1>
                <form action="./backend/agregar.php" method="post" enctype="multipart/form-data" >
                    <label for="nombre">Nombre del hardware</label>
                    <input type="text" name="nombre" id="nombre" class="form-control">
                    <label for="categoria">Categoria</label>
                    <select name="categoria" id="categoria" class="form-select" aria-label="Default select example">
                        <option selected>Selecciona una categoria</option>
                        <option value="1">Categoria 1</option>
                        <option value="2">Categoria 2</option>
                        <option value="3">Categoria 3</option>
                    </select>
                    <label for="descripcion">Descripcion</label>
                    <input type="text" name="descripcion" id="descripcion" class="form-control">
                    <label for="piezas">Numero de piezas</label>
                    <input type="text" name="piezas" id="piezas" class="form-control">
                    <label for="encargado">Encargado</label>
                    <select name="encargado" id="encargado" class="form-select" aria-label="Default select example">
                        <option selected>Selecciona un encargado</option>
                        <option value="1">Encargado 1</option>
                        <option value="2">Encargado 2</option>
                        <option value="3">Encargado 3</option>
                    </select>
                    <label for="fecha">Fecha de agregado</label>
                    <input type="date" name="fecha" id="fecha" class="form-control">
                    <label for="imagen">Imagen</label>
                    <input type="file" name="imagen" id="imagen" class="form-control">
                    <button class="btn btn-primary mt-3">
                        Agregar
                    </button>
                </form>
            </div>
        </div>
    </div>






<?php  include"./footer.php"; ?>