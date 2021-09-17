<?php
$a = Auspiciadores::getById($_GET["id"]);
?>




<br>



  <!-- general form elements -->
  <div class="box box-primary" style="width: 72.7em;margin-left: 0.5em;">
    <div class="box-header with-border">
      <h3 class="box-title">Editar - Auspiciadores</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form action="index.php?accion=todo/auspiciadores&opt=actualizar" method="post" role="form" enctype="multipart/form-data">
      <div class="box-body">

      <input type="hidden" name="id" value="<?= $a->id; ?>">

        <!-------------------------------------------->
        <div class="form-group">
          <label for="exampleInputEmail1" style="color: black;">Nombre</label>
          <input type="text" name="nombre" value="<?= $a->nombre; ?>"  class="form-control" autocomplete="off">
        </div>

        <!-------------------------------------------->
        <div class="form-group">
          <label for="exampleInputEmail1" style="color: black;">Celular 1 </label>
          <input type="text" name="celular_1" value="<?= $a->celular_1; ?>"  class="form-control" autocomplete="off">
        </div>

            <!-------------------------------------------->
            <div class="form-group">
          <label for="exampleInputEmail1" style="color: black;">Celular 2 </label>
          <input type="text" name="celular_2" value="<?= $a->celular_2; ?>"  class="form-control" autocomplete="off">
        </div>
        

        <!-------------------------------------------->
        <div class="form-group">
          <label for="exampleInputFile">Cargar Foto</label>
          <input type="file" name="foto" class="form-control" autocomplete="off">
                            <?php if ($a->foto != "") : ?>
                                
                                <img src="style/auspiciadores/<?php echo $a->foto; ?>" class="img-responsive">
                            <?php endif; ?>

          <p class="help-block" style="color: black;"> Deseas que se Muestre la Publicacion ???..</p>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="estado"  <?php if($a->estado==1){ echo "checked";}?>  style="color: black;"> <label style="color: black;"> Activar </label>
          </label>
        </div>



        <!-------------------------------------------->
      </div>

      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </form>
  </div>








