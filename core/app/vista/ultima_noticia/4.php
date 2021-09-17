<?php

$sec4  = Sector_4::getAll();
$img4_t = Sector_4::get_Prefijo("imagen_4");

?>


<head>
   <title>
      <?php
      $a = Sector_4::get_Prefijo("titulo_4");
      ?>
      <?= $a->valor; ?>

   </title>
</head>

<div class="contents">
   <div class="custom-container">
      <div class="row">
         <!-- Bread Crumb Start -->
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: -3.5em;">
            <ol class="breadcrumb">
               <li><a href="index.php">Lo Mas</a></li>
               <li class="active">
                  Leido
               </li>
            </ol>
         </div>
         <!-- Bread Crumb End -->
         <!-- Content Column Start -->
         <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 equalcol conentsection">
            <!-- Blog Detail Started -->
            <div class="blogdetail sections">




               <div class="row">
                  <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                     <div class="avatar">
                     <center>
                           <br><br>
                           <h5>Publicado por </h5>
                           <p>
                              Radio Fides 
                           </p>
                        </center>

                     </div>
                  </div>
                  <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
                     <div class="blogtext">
                        <h2 class="heading"> <?php
                                             $a = Sector_4::get_Prefijo("titulo_4");
                                             ?>
                           <?= $a->valor; ?></h2>
                        <div class="clearfix"></div>
                        <div class="blogmetas">
                           <ul>
                              <li><i class="fa fa-calendar"></i>

                                 <?php
                                 $a = Sector_4::get_Prefijo("fecha_4");
                                 ?>
                                 <?= date_format(date_create($a->valor), 'd/m/Y'); ?>

                              </li>
                              <li>
                                 <i class="fa fa-globe"></i>
                                 <a href="#">

                                    <?php
                                    $a = Sector_4::get_Prefijo("lugar_4");
                                    ?>
                                    <?= $a->valor; ?>

                                 </a>
                              </li>
                           </ul>
                           <div class="clearfix"></div>
                        </div>

                        <div class="item">
                           <center>
                              <img src="servidor/style/portada/<?= $img4_t->valor; ?>" style="width: 38.4em;">
                           </center>


                        </div>
                        <p></p>
                        <p>

                           <?php
                           $a = Sector_4::get_Prefijo("mensaje_4");
                           ?>
                           <?= $a->valor; ?>

                        </p>


                     </div>
                  </div>
               </div>
            </div>
            <!---------------------------------- Auspiciadores------------------------->





            <!---------------------------------- Auspiciadores------------------------->
            <div class="sections" style="width: 83.5em;">
               <h2 class="heading">Auspiciadores</h2>
               <div class="clearfix"></div>
               <div class="row">


                  <?php

                  $ver = Auspiciadores::getAll();
                  if (count($ver) > 0) {
                  ?>

                     <?php foreach ($ver as $c) :
                     ?>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                           <div class="blogposttwo">
                              <figure>
                                 <a href="">
                                    <?php if ($c->foto != "") : ?>
                                       <img src="servidor/style/auspiciadores/<?= $c->foto; ?>" class="img-responsive hovereffect" style="width: 9.5em;height: 9em;">
                                    <?php endif; ?>

                                 </a>
                              </figure>
                              <div class="text">
                                 <h4 style="margin-top: -0.4em;"><a href="#0">Contactos al : </a></h4>
                                 <a href="#0" class="btn btn-primary btn-xs backcolor" style="margin-top: -1.5em;"> <?= $c->celular_1 . " - " . $c->celular_2; ?></a>
                              </div>
                           </div>
                           <div class="clearfix"></div>
                        </div>
                     <?php endforeach; ?>

                  <?php
                  } else {
                     echo "<h5><br>Lo siento No Existe - Datos Registrado  <b>:(</b></h5>";
                  ?>
                  <?php
                  }
                  ?>

               </div>
            </div>






         </div>

      </div>
   </div>
</div>