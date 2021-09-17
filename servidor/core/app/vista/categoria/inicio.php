<div class="modal-footer">
    Categoria
    <button class="btn btn-primary"> <a href="index.php?vista=categoria/registrar">Registrar</a></button>
</div>


<?php
$ver = Categoria::getAll();
if (count($ver) > 0) {
?>
    <div class="box">

        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Nombre_corto</th>
                        <th>Estado</th>

                        <th style="width: 3em;"></th>
                        <th style="width: 3em;"></th>

                    </tr>
                </thead>

                <?php foreach ($ver as $c) : ?>
                    <tr>
                        <td><?= $c->id; ?></td>
                        <td><?= $c->nombre; ?></td>
                        <td><?= $c->nombre_corto; ?></td>
                        <td>
                            <?php
                            if ($c->estado == 0) {
                                echo "<i class='fa fa-times'> Inactivo</i>";
                            } else if ($c->estado == 1) {
                                echo "<i class='fa fa-check'>Activo</i>";
                            }

                            ?>
                        </td>
                        <td><a href="index.php?vista=categoria/editar&id=<?= $c->id; ?>" class="btn btn-success btn-flat" style="padding: 1px 27px;">Editar</a></td>

                        <td>
                            <a href="" id="opert-<?= $c->id; ?>"  class="btn btn-xs btn-danger"><i class="fa fa-remove"></i>
                            <script>
                                    $("#opert-" + <?= $c->id; ?>).click(function() {
                                        x = confirm("Estas seguro que deseas !!!.. ' Eliminar - <?= $c->nombre; ?> '  :( ??");
                                        if (x == true) {
                                            window.location = "./?accion=todo/categoria&opt=eliminar&id=<?= $c->id; ?>";
                                        }
                                    });
                                </script>              
                        </td>

                    </tr>
                <?php endforeach; ?>

            </table>
        </div>
    </div>

<?php
} else {
    echo "<h5><br>Lo siento No Existe - Datos Registrado  <b>:(</b></h5>";
?>
<?php
}
?>