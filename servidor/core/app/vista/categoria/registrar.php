
<br>



<!-- general form elements -->
<div class="box box-primary" style="width: 28em;margin-left: 0.5em;">
  <div class="box-header with-border">
    <h3 class="box-title">Registrar - Categoria</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form action="index.php?accion=todo/categoria&opt=agregar" method="post" role="form">
    <div class="box-body">
      <!-------------------------------------------->
      <div class="form-group">
        <label for="exampleInputEmail1" style="color: black;"> Nombre</label>
        <input type="text" name="nombre" class="form-control" autocomplete="off">
      </div>

       <!-------------------------------------------->
       <div class="form-group">
        <label for="exampleInputEmail1" style="color: black;"> Nombre Corto</label>
        <input type="text" name="nombre_corto" class="form-control" autocomplete="off">
      </div>


      <!-------------------------------------------->
    </div>

    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
  </form>
</div>



