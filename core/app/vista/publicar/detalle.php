<?php
$p  = Publicar::getById($_GET["id"]);



/*---------------ultima noticia---------------- */

$sec4  = Sector_4::getAll();
$img1_t = Sector_4::get_Prefijo("imagen_1");
$img2_t = Sector_4::get_Prefijo("imagen_2");
$img3_t = Sector_4::get_Prefijo("imagen_3");
$img4_t = Sector_4::get_Prefijo("imagen_4");
$img5_t = Sector_4::get_Prefijo("imagen_5");


?>
<head>
   <title>
   <?= $p->titulo; ?>

   </title>
</head>



<div class="contents">
   <div class="custom-container">
      <div class="row">
         <!-- Bread Crumb Start -->
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: -3.5em;">
            <ol class="breadcrumb">
               <li><a href="index.html">Categoria </a></li>
               <li class="active"><?= Categoria::getById($p->categoria_id)->nombre; ?></li>
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
                        <h2 class="heading"><?= $p->titulo; ?></h2>
                        <div class="clearfix"></div>
                        <div class="blogmetas">
                           <ul>
                              <li><i class="fa fa-calendar"></i><?= date_format(date_create($p->fecha), 'd/m/Y_ H:m a'); ?></li>
                              <li>
                                 <i class="fa fa-globe"></i>
                                 <a href="#"><?= $p->lugar; ?></a>
                              </li>
                           </ul>
                           <div class="clearfix"></div>
                        </div>

                        <div class="item">
                           <center>
                              <?php if ($p->imagen != "") : ?>
                                 <img src="servidor/style/portada/<?= $p->imagen; ?>" style="width: 38.4em;">
                              <?php endif; ?>
                           </center>
                     


                        </div>
                        <p></p>
                        <p>
                           <?= $p->comentario; ?>
                        </p>

                        <center>
                           <iframe width="500" height="310" src="<?= $p->youtube; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                        </center>
                     </div>
                  </div>
               </div>
            </div>




         </div>


         <!-- Content Column End -->
         <!-- Dark Sidebar Start -->
         <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 equalcol blacksidebar">
            <!-- Search Widget start -->
            <div class="widget">
               <h2 class="heading">Ultimas Noticias</h2>

            </div>
            <div class="clearfix"></div>
            <!-- Search Widget End -->
            <!-- Hot Videos Widget start -->
            <div class="widget">


               <div class="crsl-wrap">
                  <div class="crsl-item">

                     <div class="videobox2" style="width: 18.6em;margin-left: 7.5px;">
                        <a href="index.php?vista=ultima_noticia/1">
                           <figure>
                              <img src="servidor/style/portada/<?= $img1_t->valor; ?>" class="img-responsive hovereffect" alt="" />
                              <div class="vidopts">
                                 <ul>
                                    <li style="margin-top: -3.8em;">
                                       <label style="background-color: #ca0000;padding: 0px 1em;margin-left: -1em;">
                                          <?php
                                          $a = Sector_4::get_Prefijo("lugar_1");
                                          ?>
                                          <?= $a->valor; ?>
                                       </label>
                                    </li>
                                    <li><i class="fa fa-clock-o"></i>
                                       <?php
                                       $a = Sector_4::get_Prefijo("fecha_1");
                                       ?>
                                       <?= date_format(date_create($a->valor), 'd/m/Y'); ?>
                                    </li>
                                 </ul>
                                 <div class="clearfix"></div>
                              </div>
                           </figure>
                           <h4><a href="#0"><?php
                                             $a = Sector_4::get_Prefijo("titulo_1");
                                             ?>
                                 <?= $a->valor; ?>
                              </a></h4>
                        </a>

                     </div>
                  </div>
                  <!----------------------------------------->

                  <div class="crsl-item">

                     <div class="videobox2" style="width: 18.6em;margin-left: 7.5px;">
                        <a href="index.php?vista=ultima_noticia/2">

                           <figure>
                              <img src="servidor/style/portada/<?= $img2_t->valor; ?>" class="img-responsive hovereffect" alt="" />
                              <div class="vidopts">
                                 <ul>
                                    <li style="margin-top: -3.8em;">
                                       <label style="background-color: #ca0000;padding: 0px 1em;margin-left: -1em;">
                                          <?php
                                          $a = Sector_4::get_Prefijo("lugar_2");
                                          ?>
                                          <?= $a->valor; ?>
                                       </label>
                                    </li>
                                    <li><i class="fa fa-clock-o"></i>
                                       <?php
                                       $a = Sector_4::get_Prefijo("fecha_2");
                                       ?>
                                       <?= date_format(date_create($a->valor), 'd/m/Y'); ?>
                                    </li>
                                 </ul>
                                 <div class="clearfix"></div>
                              </div>
                           </figure>
                           <h4><a href="#0"><?php
                                             $a = Sector_4::get_Prefijo("titulo_2");
                                             ?>
                                 <?= $a->valor; ?>
                              </a></h4>
                        </a>
                     </div>
                  </div>
                  <!----------------------------------------->
                  <div class="crsl-item">

                     <div class="videobox2" style="width: 18.6em;margin-left: 7.5px;">
                        <a href="index.php?vista=ultima_noticia/3">

                           <figure>
                              <img src="servidor/style/portada/<?= $img3_t->valor; ?>" class="img-responsive hovereffect" alt="" />
                              <div class="vidopts">
                                 <ul>
                                    <li style="margin-top: -3.8em;">
                                       <label style="background-color: #ca0000;padding: 0px 1em;margin-left: -1em;">
                                          <?php
                                          $a = Sector_4::get_Prefijo("lugar_3");
                                          ?>
                                          <?= $a->valor; ?>
                                       </label>
                                    </li>
                                    <li><i class="fa fa-clock-o"></i>
                                       <?php
                                       $a = Sector_4::get_Prefijo("fecha_3");
                                       ?>
                                       <?= date_format(date_create($a->valor), 'd/m/Y'); ?>
                                    </li>
                                 </ul>
                                 <div class="clearfix"></div>
                              </div>
                           </figure>
                           <h4><a href="#0"><?php
                                             $a = Sector_4::get_Prefijo("titulo_3");
                                             ?>
                                 <?= $a->valor; ?>
                              </a></h4>
                        </a>
                     </div>
                  </div>


                  <!----------------------------------------->
                  <div class="crsl-item">

                     <div class="videobox2" style="width: 18.6em;margin-left: 7.5px;">
                        <a href="index.php?vista=ultima_noticia/4">

                           <figure>
                              <img src="servidor/style/portada/<?= $img4_t->valor; ?>" class="img-responsive hovereffect" alt="" />
                              <div class="vidopts">
                                 <ul>
                                    <li style="margin-top: -3.8em;">
                                       <label style="background-color: #ca0000;padding: 0px 1em;margin-left: -1em;">
                                          <?php
                                          $a = Sector_4::get_Prefijo("lugar_4");
                                          ?>
                                          <?= $a->valor; ?>
                                       </label>
                                    </li>
                                    <li><i class="fa fa-clock-o"></i>
                                       <?php
                                       $a = Sector_4::get_Prefijo("fecha_4");
                                       ?>
                                       <?= date_format(date_create($a->valor), 'd/m/Y'); ?>
                                    </li>
                                 </ul>
                                 <div class="clearfix"></div>
                              </div>
                           </figure>
                           <h4><a href="#0"><?php
                                             $a = Sector_4::get_Prefijo("titulo_4");
                                             ?>
                                 <?= $a->valor; ?>
                              </a></h4>
                        </a>
                     </div>
                  </div>



                  <!----------------------------------------->
                  <div class="crsl-item">

                     <div class="videobox2" style="width: 18.6em;margin-left: 7.5px;">
                        <a href="index.php?vista=ultima_noticia/5">

                           <figure>
                              <img src="servidor/style/portada/<?= $img5_t->valor; ?>" class="img-responsive hovereffect" alt="" />
                              <div class="vidopts">
                                 <ul>
                                    <li style="margin-top: -3.8em;">
                                       <label style="background-color: #ca0000;padding: 0px 1em;margin-left: -1em;">
                                          <?php
                                          $a = Sector_4::get_Prefijo("lugar_5");
                                          ?>
                                          <?= $a->valor; ?>
                                       </label>
                                    </li>
                                    <li><i class="fa fa-clock-o"></i>
                                       <?php
                                       $a = Sector_4::get_Prefijo("fecha_5");
                                       ?>
                                       <?= date_format(date_create($a->valor), 'd/m/Y'); ?>
                                    </li>
                                 </ul>
                                 <div class="clearfix"></div>
                              </div>
                           </figure>
                           <h4><a href="#0"><?php
                                             $a = Sector_4::get_Prefijo("titulo_5");
                                             ?>
                                 <?= $a->valor; ?>
                              </a></h4>
                        </a>
                     </div>
                  </div>





               </div>

            </div>
            <div class="clearfix"></div>

         </div>



         <!---------------------------------- Auspiciadores------------------------->
         <div class="sections">
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
                              <a href="blogdetail-double-sidebar.html">
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