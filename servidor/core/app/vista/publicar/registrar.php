<br>



  <!-- general form elements -->
  <div class="box box-primary" style="width: 72.7em;margin-left: 0.5em;">
    <div class="box-header with-border">
      <h3 class="box-title">Registrar - Publicar</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form action="index.php?accion=todo/publicar&opt=agregar" enctype="multipart/form-data" method="post" role="form">
      <div class="box-body">
        <!-------------------------------------------->
        <div class="form-group">
          <label for="exampleInputEmail1" style="color: black;">Lugar</label>
          <input type="text" name="lugar" class="form-control" autocomplete="off">
        </div>

        <!-------------------------------------------->
        <div class="form-group">
          <label for="exampleInputEmail1" style="color: black;">Titulo</label>
          <input type="text" name="titulo" class="form-control" autocomplete="off">
        </div>
        <!-------------------------------------------->
        <div class="form-group">
          <label for="exampleInputEmail1" style="color: black;">Comentario</label>
          <textarea  id="compose-textarea1"  class="form-control"  rows="20" name="comentario" autocomplete="off" placeholder="Escriba contenido"> </textarea>

        </div>
        <!-------------------------------------------->
        <div class="form-group">
          <label for="exampleInputEmail1" style="color: black;">Youtube</label>
          <input type="text" name="youtube" class="form-control" autocomplete="off">
        </div>

        <!-------------------------------------------->
        <div class="form-group">
          <label for="exampleInputEmail1" style="color: black;">Categoria</label>

          <select name="categoria_id" class="form-control select2" value="">
            <option value="">-- Seleccionar --</option>
            <?php foreach (Categoria::getAll() as $p) : ?>
              <option value="<?= $p->id; ?>"><?= $p->nombre; ?>
              </option>
            <?php endforeach; ?>
          </select>

        </div>


        <!-------------------------------------------->
        <div class="form-group">
          <label for="exampleInputFile">Cargar Foto</label>
          <input type="file" name="imagen" id="exampleInputFile">

          <p class="help-block" style="color: black;"> Deseas mostrar  como Noticia Destacada ???..</p>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="destacado" style="color: black;"> <label style="color: black;"> Activar</label>
          </label>
        </div>

        <!-------------------------------------------->
      </div>

      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </form>
  </div>



