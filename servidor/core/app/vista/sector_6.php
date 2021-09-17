<?php
$sec  = Sector_6::getAll();
/*----------------------------------- */
$img = Sector_6::get_Prefijo("imagen_1");
$img2 = Sector_6::get_Prefijo("imagen_2");
$img3 = Sector_6::get_Prefijo("imagen_3");

?>
<section class="content-header">
  <h1>
    Portada
    <small>Pagina Web</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li><a href="#">Portada</a></li>
    <li class="active">Registro</li>
  </ol>
</section>




<?php
if (count($sec) > 0) : ?>
  <form method="post" action="index.php?accion=todo/sector_6" enctype="multipart/form-data" style="margin-top: -1em;">

    <div class="box-body">
      <table id="data-table-combine" class="table table-striped table-bordered table-td-valign-middle table-bordered table-hover">
        <thead>
          <tr>
            <th>
              <ul class="nav nav-tabs">
                <li class=""><a href="index.php?vista=home" style="color: black;">Banner</a></li>
                <li class=""><a href="index.php?vista=sector_2" style="color: black;">Lo + Visto</a></li>
                <li class=""><a href="index.php?vista=sector_3" style="color: black;">Videos</a></li>
                <li class=""><a href="index.php?vista=sector_4" style="color: black;">Ultima Noticia</a></li>
                <!--li class=""><a href="index.php?vista=sector_5" style="color: black;">Nuevo Reporte</a></li-->

                <li class="active" style="background-color: #605ca8;color: white;"><a href="index.php?vista=sector_6" style="color: black;">Adicional</a></li>

              </ul>
            </th>
            <th><button> <a href="../index.php" target="new_" class="btn btn-danger pull-right btn-block btn-sm">Vista Previa</a> </button></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($sec as $s) : ?>

            <tr>

              <td>
                <?= $s->nombre; ?>
                <p></p>
                <?php if ($s->tipo == 1) : ?>
                  <input type="text" name="<?= $s->prefijo; ?>" class="form-control" value="<?= $s->valor; ?>" autocomplete="off">
                  <br>
                <?php elseif ($s->tipo == 2) : ?>
                  <input type="text" name="<?= $s->prefijo; ?>" class="form-control" value="<?= $s->valor; ?>" autocomplete="off">
                  <br>
                <?php elseif ($s->tipo == 3) : ?>
                  <input type="text" name="<?= $s->prefijo; ?>" class="form-control" value="<?= $s->valor; ?>" autocomplete="off">
                  <br>
                <?php elseif ($s->tipo == 4) : ?>
                  <?php if ($s->valor != "") : ?>
                    <img src="style/portada/<?= $s->valor; ?>" style="width:150px;"><br><br>
                  <?php endif; ?>
                  <input type="file" name="<?= $s->prefijo; ?>">


                <?php elseif ($s->tipo == 5) : ?>
                  <?php if ($s->valor != "") : ?>
                    <img src="style/portada/<?= $s->valor; ?>" style="width:150px;"><br><br>
                  <?php endif; ?>
                  <input type="file" name="<?= $s->prefijo; ?>">


                <?php elseif ($s->tipo == 6) : ?>
                  <?php if ($s->valor != "") : ?>
                    <img src="style/portada/<?= $s->valor; ?>" style="width:150px;"><br><br>
                  <?php endif; ?>
                  <input type="file" name="<?= $s->prefijo; ?>">
                  <p></p>
                  <button type="submit" class="btn btn-primary">Guardar</button>



                <?php endif; ?>


              </td>


            </tr>

          <?php endforeach; ?>
      </table>
    </div>
  </form>
<?php endif; ?>