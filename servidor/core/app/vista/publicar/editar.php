<?php
$a = Publicar::getById($_GET["id"]);

?>




<br>



<!-- general form elements -->
<div class="box box-primary" style="width: 72.7em;margin-left: 0.5em;">
  <div class="box-header with-border">
    <h3 class="box-title">Editar - Publicar</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form action="index.php?accion=todo/publicar&opt=actualizar" method="post" role="form" enctype="multipart/form-data">
    <div class="box-body">

      <input type="hidden" name="id" value="<?= $a->id; ?>">

      <!-------------------------------------------->
      <div class="form-group">
        <label for="exampleInputEmail1" style="color: black;">Lugar</label>
        <input type="text" name="lugar" value="<?= $a->lugar; ?>" class="form-control" autocomplete="off">
      </div>

      <!-------------------------------------------->
      <div class="form-group">
        <label for="exampleInputEmail1" style="color: black;">Titulo</label>
        <input type="text" name="titulo" value="<?= $a->titulo; ?>" class="form-control" autocomplete="off">
      </div>
      <!-------------------------------------------->
      <div class="form-group">
        <label for="exampleInputEmail1" style="color: black;">Comentario</label>

        <textarea id="compose-textarea1" class="form-control"  rows="20" name="comentario" autocomplete="off" placeholder="Escriba contenido"> <?= $a->comentario; ?></textarea>
      </div>
      <!-------------------------------------------->
      <div class="form-group">
        <label for="exampleInputEmail1" style="color: black;">Youtube</label>
        <input type="text" name="youtube" value="<?= $a->youtube; ?>" class="form-control" autocomplete="off">
      </div>

      <!-------------------------------------------->
      <div class="form-group">
        <label for="exampleInputEmail1" style="color: black;">Categoria</label>

        <select name="categoria_id" class="form-control select2" value="">
          <option required value="">-- Seleccionar --</option>
          <?php foreach (Categoria::getAll() as $p) : ?>
            <option value="<?= $p->id;  ?>" <?php if ($a->categoria_id == $p->id) {
                                              echo "selected";
                                            } ?>><?= $p->nombre; ?></option>
          <?php endforeach; ?>
        </select>

      </div>


      <!-------------------------------------------->
      <div class="form-group">
        <label for="exampleInputFile">Cargar Foto</label>
        <input type="file" name="imagen" class="form-control" autocomplete="off">
        <?php if ($a->imagen != "") : ?>

          <img src="style/portada/<?php echo $a->imagen; ?>" class="img-responsive">
        <?php endif; ?>

        <p class="help-block" style="color: black;"> Deseas que se Muestre la Noticia ???..</p>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox" name="estado" <?php if ($a->estado == 1) {
                                                  echo "checked";
                                                } ?> style="color: black;"> <label style="color: black;"> Activar </label>
        </label>
      </div>


      <p class="help-block" style="color: black;"> Deseas publicar la noticia como Destacado ???..</p>
    </div>
    <div class="checkbox">
      <label>
        <input type="checkbox" name="destacado" <?php if ($a->destacado == 1) {
                                                  echo "checked";
                                                } ?> style="color: black;"> <label style="color: black;"> Noticia Destacada</label>
      </label>
    </div>


    <!-------------------------------------------->
</div>

<div class="box-footer">
  <button type="submit" class="btn btn-primary">Guardar</button>
</div>
</form>
</div>