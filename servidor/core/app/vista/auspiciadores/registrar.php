<br>



  <!-- general form elements -->
  <div class="box box-primary" style="width: 72.7em;margin-left: 0.5em;">
    <div class="box-header with-border">
      <h3 class="box-title">Registrar - Auspiciador</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form action="index.php?accion=todo/auspiciadores&opt=agregar" enctype="multipart/form-data" method="post" role="form">
      <div class="box-body">
        <!-------------------------------------------->
        <div class="form-group">
          <label for="exampleInputEmail1" style="color: black;">Nombre</label>
          <input type="text" name="nombre" class="form-control" autocomplete="off">
        </div>

        <!-------------------------------------------->
        <div class="form-group">
          <label for="exampleInputEmail1" style="color: black;">Celular_1</label>
          <input type="text" name="celular_1" class="form-control" autocomplete="off">
        </div>

        <!-------------------------------------------->
        <div class="form-group">
          <label for="exampleInputEmail1" style="color: black;">Celular_2</label>
          <input type="text" name="celular_2" class="form-control" autocomplete="off">
        </div>



        <!-------------------------------------------->
        <div class="form-group">
          <label for="exampleInputFile">Cargar Foto</label>
          <input type="file" name="foto" id="exampleInputFile">

        </div>
       
        <!-------------------------------------------->
      </div>

      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </form>
  </div>



