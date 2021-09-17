<br>



  <!-- general form elements -->
  <div class="box box-primary" style="width: 72.7em;margin-left: 0.5em;">
    <div class="box-header with-border">
      <h3 class="box-title">Registrar - Brotcast</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form  action="index.php?accion=todo/brotcast&opt=agregar" method="POST" enctype="multipart/form-data">
      <div class="box-body">
        <!-------------------------------------------->
        <div class="form-group">
          <label for="exampleInputEmail1" style="color: black;">Titulo</label>
          <input type="text"  name="titulo" class="form-control" autocomplete="off">
        </div>



        <!-------------------------------------------->
        <div class="form-group">
          <label for="exampleInputFile">Cargar Audio</label>
          <input type="file"     name="audio" >

        </div>

        <!-------------------------------------------->
      </div>

      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </form>
  </div>



