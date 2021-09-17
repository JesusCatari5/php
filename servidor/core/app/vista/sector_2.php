<?php
$sec  = Sector_2::getAll();
/*----------------------------------- */
$img = Sector_2::get_Prefijo("imagen_1");
$img2 = Sector_2::get_Prefijo("imagen_2");
$img3 = Sector_2::get_Prefijo("imagen_3");
$img4 = Sector_2::get_Prefijo("imagen_4");
$img5 = Sector_2::get_Prefijo("imagen_5");

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
  <form method="post" action="index.php?accion=todo/sector_2" enctype="multipart/form-data" style="margin-top: -1em;">

    <div class="box-body">
      <table id="data-table-combine" class="table table-striped table-bordered table-td-valign-middle table-bordered table-hover">
        <thead>
          <tr>
            <th>
              <ul class="nav nav-tabs">
                <li class=""><a href="index.php?vista=home" style="color: black;">Banner</a></li>
                <li class="active" style="background-color: #605ca8;color: white;"><a href="index.php?vista=sector_2" style="color: black;">Lo + Visto</a></li>
                <li class=""><a href="index.php?vista=sector_3" style="color: black;">Videos</a></li>
                <li class=""><a href="index.php?vista=sector_4" style="color: black;">Ultima Noticia</a></li>
                <!--li class=""><a href="index.php?vista=sector_5" style="color: black;">Nuevo Reporte</a></li!-->
                <li class=""><a href="index.php?vista=sector_6" style="color: black;">Adicional</a></li>

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

                <?php if ($s->tipo == 1) : ?>


                  <input type="date" name="<?= $s->prefijo; ?>" class="form-control" value="<?= $s->valor; ?>" autocomplete="off" style="width: 17em;">

                <?php elseif ($s->tipo == 2) : ?>
                  <input type="text" name="<?= $s->prefijo; ?>" class="form-control" value="<?= $s->valor; ?>" autocomplete="off">
                <?php elseif ($s->tipo == 3) : ?>
                  <input type="text" name="<?= $s->prefijo; ?>" class="form-control" value="<?= $s->valor; ?>" autocomplete="off">
                <?php elseif ($s->tipo == 4) : ?>

                  <textarea id="compose-textarea1" class="form-control" rows="20" name="<?= $s->prefijo; ?>" placeholder="Escriba contenido"><?= $s->valor; ?></textarea>

                <?php elseif ($s->tipo == 5) : ?>
                  <?php if ($s->valor != "") : ?>
                    <img src="style/portada/<?= $s->valor; ?>" style="width:150px;"><br><br>
                  <?php endif; ?>
                  <input type="file" name="<?= $s->prefijo; ?>">
                  <p></p>
                  <button type="submit" class="btn btn-primary">Guardar</button>

                  <hr style="border-top: 2px solid #290070;">
                  <p></p>
                  <!--------------------------->
                <?php elseif ($s->tipo == 6) : ?>

                  <input type="date" name="<?= $s->prefijo; ?>" class="form-control" value="<?= $s->valor; ?>" autocomplete="off" style="width: 17em;">


                <?php elseif ($s->tipo == 7) : ?>
                  <input type="text" name="<?= $s->prefijo; ?>" class="form-control" value="<?= $s->valor; ?>" autocomplete="off">
                <?php elseif ($s->tipo == 8) : ?>
                  <input type="text" name="<?= $s->prefijo; ?>" class="form-control" value="<?= $s->valor; ?>" autocomplete="off">
                <?php elseif ($s->tipo == 9) : ?>

                  <textarea id="compose-textarea2" class="form-control" rows="20" name="<?= $s->prefijo; ?>" placeholder="Escriba contenido"><?= $s->valor; ?></textarea>

                <?php elseif ($s->tipo == 10) : ?>
                  <?php if ($s->valor != "") : ?>
                    <img src="style/portada/<?= $s->valor; ?>" style="width:150px;"><br><br>
                  <?php endif; ?>
                  <input type="file" name="<?= $s->prefijo; ?>">
                  <p></p>
                  <button type="submit" class="btn btn-primary">Guardar</button>

                  <hr style="border-top: 2px solid #290070;">
                  <p></p>
                  <!-------------------------------->




                <?php elseif ($s->tipo == 11) : ?>

                  <input type="date" name="<?= $s->prefijo; ?>" class="form-control" value="<?= $s->valor; ?>" autocomplete="off" style="width: 17em;">


                <?php elseif ($s->tipo == 12) : ?>
                  <input type="text" name="<?= $s->prefijo; ?>" class="form-control" value="<?= $s->valor; ?>" autocomplete="off">
                <?php elseif ($s->tipo == 13) : ?>
                  <input type="text" name="<?= $s->prefijo; ?>" class="form-control" value="<?= $s->valor; ?>" autocomplete="off">
                <?php elseif ($s->tipo == 14) : ?>

                  <textarea id="compose-textarea3" class="form-control" rows="20" name="<?= $s->prefijo; ?>" placeholder="Escriba contenido"><?= $s->valor; ?></textarea>

                <?php elseif ($s->tipo == 15) : ?>
                  <?php if ($s->valor != "") : ?>
                    <img src="style/portada/<?= $s->valor; ?>" style="width:150px;"><br><br>
                  <?php endif; ?>
                  <input type="file" name="<?= $s->prefijo; ?>">
                  <p></p>
                  <button type="submit" class="btn btn-primary">Guardar</button>

                  <hr style="border-top: 2px solid #290070;">
                  <p></p>
                  <!-------------------------------->


                <?php elseif ($s->tipo == 16) : ?>

                  <input type="date" name="<?= $s->prefijo; ?>" class="form-control" value="<?= $s->valor; ?>" autocomplete="off" style="width: 17em;">


                <?php elseif ($s->tipo == 17) : ?>
                  <input type="text" name="<?= $s->prefijo; ?>" class="form-control" value="<?= $s->valor; ?>" autocomplete="off">
                <?php elseif ($s->tipo == 18) : ?>
                  <input type="text" name="<?= $s->prefijo; ?>" class="form-control" value="<?= $s->valor; ?>" autocomplete="off">
                <?php elseif ($s->tipo == 19) : ?>

                  <textarea id="compose-textarea4" class="form-control" rows="20" name="<?= $s->prefijo; ?>" placeholder="Escriba contenido"><?= $s->valor; ?></textarea>

                <?php elseif ($s->tipo == 20) : ?>
                  <?php if ($s->valor != "") : ?>
                    <img src="style/portada/<?= $s->valor; ?>" style="width:150px;"><br><br>
                  <?php endif; ?>
                  <input type="file" name="<?= $s->prefijo; ?>">
                  <p></p>
                  <button type="submit" class="btn btn-primary">Guardar</button>

                  <hr style="border-top: 2px solid #290070;">
                  <p></p>
                  <!-------------------------------->


                  <!-------------------------------->


                <?php elseif ($s->tipo == 21) : ?>

                  <input type="date" name="<?= $s->prefijo; ?>" class="form-control" value="<?= $s->valor; ?>" autocomplete="off" style="width: 17em;">


                <?php elseif ($s->tipo == 22) : ?>
                  <input type="text" name="<?= $s->prefijo; ?>" class="form-control" value="<?= $s->valor; ?>" autocomplete="off">
                <?php elseif ($s->tipo == 23) : ?>
                  <input type="text" name="<?= $s->prefijo; ?>" class="form-control" value="<?= $s->valor; ?>" autocomplete="off">
                <?php elseif ($s->tipo == 24) : ?>

                  <textarea id="compose-textarea5" class="form-control" rows="20" name="<?= $s->prefijo; ?>" placeholder="Escriba contenido"><?= $s->valor; ?></textarea>

                <?php elseif ($s->tipo == 25) : ?>
                  <?php if ($s->valor != "") : ?>
                    <img src="style/portada/<?= $s->valor; ?>" style="width:150px;"><br><br>
                  <?php endif; ?>
                  <input type="file" name="<?= $s->prefijo; ?>">
                  <p></p>
                  <button type="submit" class="btn btn-primary">Guardar</button>

                  <hr style="border-top: 2px solid #290070;">
                  <p></p>






                <?php endif; ?>
              </td>


            </tr>

          <?php endforeach; ?>
      </table>
    </div>
  </form>
<?php endif; ?>