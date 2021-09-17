<?php
$a = Categoria::getById($_GET["id"]);
?>


<!-- general form elements -->
<div class="box box-primary" style="width: 72.7em;margin-left: 0.5em;">
    <div class="box-header with-border">
        <h3 class="box-title">Editar - Publicar</h3>
    </div>
    <form action="index.php?accion=todo/categoria&opt=actualizar" method="post" role="form">
        <div class="box-body">

            <legend class="m-b-15">Editar Categoria</legend>


            <input type="hidden" name="id" value="<?= $a->id; ?>">

            <!--------------------------------------->
            <div class="form-group">
                <label for="exampleInputPassword1"> Nombre </label>
                <input type="text" name="nombre" value="<?= $a->nombre; ?>" required class="form-control" autocomplete="off">
            </div>

            <!--------------------------------------->
            <div class="form-group">
                <label for="exampleInputPassword1"> Nombre Corto </label>
                <input type="text" name="nombre_corto" value="<?= $a->nombre_corto; ?>" required class="form-control" autocomplete="off">
            </div>

            <div class="checkbox">
                <label for="exampleInputPassword1"> Deseas Mostrar esta Categoria en la Portada ??? </label>
               <br><br>
                <label>

                    <input type="checkbox" name="destacado" <?php if ($a->estado == 1) {
                                                                echo "checked";
                                                            } ?> style="color: black;"> <label style="color: black;">Activado</label>
                </label>
            </div>


            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </form>

</div>