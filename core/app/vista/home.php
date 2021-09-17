











<head>
   <title>
      Radio Fides Tarija
   </title>
</head>


<?php
$sec  = Sector_1::getAll();
$img1 = Sector_1::get_Prefijo("imagen_1");
$img2 = Sector_1::get_Prefijo("imagen_2");
$img3 = Sector_1::get_Prefijo("imagen_3");
$img4 = Sector_1::get_Prefijo("imagen_4");

/*--------------- Lo + Visto -------------------- */
$sec2  = Sector_2::getAll();
$img1_a = Sector_2::get_Prefijo("imagen_1");
$img2_b = Sector_2::get_Prefijo("imagen_2");
$img3_c = Sector_2::get_Prefijo("imagen_3");
$img4_d = Sector_2::get_Prefijo("imagen_4");
$img5_e = Sector_2::get_Prefijo("imagen_5");
/*----------- videos------------------------ */


$sec3  = Sector_3::getAll();
$img1_s = Sector_3::get_Prefijo("video_1");
$img2_s = Sector_3::get_Prefijo("video_2");
$img3_s = Sector_3::get_Prefijo("video_3");
$img4_s = Sector_3::get_Prefijo("video_4");

/*---------------ultima noticia---------------- */

$sec4  = Sector_4::getAll();
$img1_t = Sector_4::get_Prefijo("imagen_1");
$img2_t = Sector_4::get_Prefijo("imagen_2");
$img3_t = Sector_4::get_Prefijo("imagen_3");
$img4_t = Sector_4::get_Prefijo("imagen_4");
$img5_t = Sector_4::get_Prefijo("imagen_5");

/*--------------------------------- */

$sec6  = Sector_6::getAll();
$img1_y = Sector_6::get_Prefijo("imagen_1");
$img2_y = Sector_6::get_Prefijo("imagen_2");
$img3_y = Sector_6::get_Prefijo("imagen_3");

?>



<div class="custom-container">
   <div class="row">



      <!------------------------------------->

      <!--div class="panels-flexible-row panels-flexible-row-home_page_2019_especiales-main-row clearfix ads-block-panel-tipo-2">
         <div class="inside panels-flexible-row-inside panels-flexible-row-home_page_2019_especiales-main-row-inside clearfix">
            <div class="panels-flexible-region panels-flexible-region-home_page_2019_especiales-especiales_top_ panels-flexible-region-first panels-flexible-region-last ">
               <div class="inside panels-flexible-region-inside panels-flexible-region-home_page_2019_especiales-especiales_top_-inside panels-flexible-region-inside-first panels-flexible-region-inside-last">
                  <div class="panel-pane pane-block pane-servicios-lt-agenda-mam-home no-title block">
                     <div class="block-inner clearfix">



                        <div class="block-content">
                           <div id="agenda-mam"><iframe src="https://lostiempos.datafactory.la/v3/htmlCenter/data/deportes/futbol/bolivia/pages/es/agenda.html" width="100%" height="180" scrolling="auto" style="width: 1px; min-width: 100%; *width: 100%;" class=""></iframe></div>
                        </div>



                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div-->

      <!----------------------------------------------------------->
      <div class="col-lg-3 col-md-3 col-sm-6 .col-xs-6">
         <div class="videobox">
            <figure>
               <img src="servidor/style/portada/<?= $img1->valor; ?>" alt="" class="img-responsive hovereffect" />
               <figcaption>
                  <label style="background-color: #DF2126;padding: 2px 1em;">
                     <?php
                     $a = Sector_1::get_Prefijo("lugar_1");
                     ?>
                     <?= $a->valor; ?>
                  </label>

                  <h2>
                     <a href="index.php?vista=banner/1">

                        <?php
                        $a = Sector_1::get_Prefijo("titulo_1");
                        ?>
                        <?= $a->valor; ?>
                     </a>
                  </h2>
                  <ul>
                     <li><i class="fa fa-clock-o"></i>
                        <?php
                        $a = Sector_1::get_Prefijo("fecha_1");
                        ?>
                        <?= date_format(date_create($a->valor), 'd/m/Y'); ?>
                     </li>
                  </ul>
                  <div class="clearfix"></div>
               </figcaption>
            </figure>
         </div>

      </div>


      <!------------------------------------------------->
      <div class="col-lg-3 col-md-3 col-sm-6 .col-xs-6">
         <div class="videobox">
            <figure>
               <a href="">
                  <img src="servidor/style/portada/<?= $img2->valor; ?>" alt="" class="img-responsive hovereffect" />
               </a>
               <figcaption>
                  <label style="background-color: #DF2126;padding: 2px 1em;">
                     <?php
                     $a = Sector_1::get_Prefijo("lugar_2");
                     ?>
                     <?= $a->valor; ?>
                  </label>

                  <h2>
                     <a href="index.php?vista=banner/2">

                        <?php
                        $a = Sector_1::get_Prefijo("titulo_2");
                        ?>
                        <?= $a->valor; ?>
                     </a>
                  </h2>
                  <ul>
                     <li><i class="fa fa-clock-o"></i>
                        <?php
                        $a = Sector_1::get_Prefijo("fecha_1");
                        ?>
                        <?= date_format(date_create($a->valor), 'd/m/Y'); ?>
                     </li>
                  </ul>
                  <div class="clearfix"></div>
               </figcaption>
            </figure>
         </div>
      </div>
      <!------------------------------------------------->

      <!------------------------------------------------->
      <div class="col-lg-3 col-md-3 col-sm-6 .col-xs-6">
         <div class="videobox">
            <figure>
               <a href="">
                  <img src="servidor/style/portada/<?= $img3->valor; ?>" alt="" class="img-responsive hovereffect" />
               </a>
               <figcaption>
                  <label style="background-color: #DF2126;padding: 2px 1em;">
                     <?php
                     $a = Sector_1::get_Prefijo("lugar_3");
                     ?>
                     <?= $a->valor; ?>
                  </label>

                  <h2>
                     <a href="index.php?vista=banner/3">

                        <?php
                        $a = Sector_1::get_Prefijo("titulo_3");
                        ?>
                        <?= $a->valor; ?>
                     </a>
                  </h2>
                  <ul>
                     <li><i class="fa fa-clock-o"></i>
                        <?php
                        $a = Sector_1::get_Prefijo("fecha_3");
                        ?>
                        <?= date_format(date_create($a->valor), 'd/m/Y'); ?>
                     </li>
                  </ul>
                  <div class="clearfix"></div>
               </figcaption>
            </figure>
         </div>
      </div>
      <!------------------------------------------------->

      <!------------------------------------------------->
      <div class="col-lg-3 col-md-3 col-sm-6 .col-xs-6">
         <div class="videobox">
            <figure>
               <a href="">
                  <img src="servidor/style/portada/<?= $img4->valor; ?>" alt="" class="img-responsive hovereffect" />
               </a>
               <figcaption>
                  <label style="background-color: #DF2126;padding: 2px 1em;">
                     <?php
                     $a = Sector_1::get_Prefijo("lugar_4");
                     ?>
                     <?= $a->valor; ?>
                  </label>

                  <h2>
                     <a href="index.php?vista=banner/4">

                        <?php
                        $a = Sector_1::get_Prefijo("titulo_4");
                        ?>
                        <?= $a->valor; ?>
                     </a>
                  </h2>
                  <ul>
                     <li><i class="fa fa-clock-o"></i>
                        <?php
                        $a = Sector_1::get_Prefijo("fecha_4");
                        ?>
                        <?= date_format(date_create($a->valor), 'd/m/Y'); ?>
                     </li>
                  </ul>
                  <div class="clearfix"></div>
               </figcaption>
            </figure>
         </div>
      </div>
      <!------------------------------------------------->
   </div>
   <div class="row">
      <!-- Gray Sidebar Start -->
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalcol graysidebar">
         <!-- Interactive Tabs Widget start -->
         <div class="widget">
            <div class="interactivetabs">
               <!-- Nav tabs -->
               <ul class="nav nav-tabs" id="intertabs">
                  <li class="active"><a href="#twittertab" data-toggle="tab"> LO MÁS VISTO</a></li>
               </ul>
               <!-- Tab panes -->
               <div class="tab-content">
                  <!-- Twitter Tab Start -->
                  <div class="tab-pane fade in active" id="twittertab">
                     <ul class="bloglist">




                        <li>
                           <div class="media">
                              <a href="#0" class="pull-left">
                                 <img class="media-object img-responsive hovereffect" src="servidor/style/portada/<?= $img1_a->valor; ?>" alt="" />
                              </a>
                              <div class="media-body">
                                 <h5><a href="index.php?vista=lo_mas_visto/1">
                                       <?php
                                       $a = Sector_2::get_Prefijo("titulo_1");
                                       ?>
                                       <?= $a->valor; ?>
                                    </a></h5>
                                 <ul>
                                    <li><i class="fa fa-clock-o"></i>
                                       <?php
                                       $a = Sector_2::get_Prefijo("fecha_1");
                                       ?>
                                       <?= date_format(date_create($a->valor), 'd/m/Y'); ?>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </li>


                        <li>
                           <div class="media">
                              <a href="#0" class="pull-left">
                                 <img class="media-object img-responsive hovereffect" src="servidor/style/portada/<?= $img2_b->valor; ?>" alt="" />
                              </a>
                              <div class="media-body">
                                 <h5><a href="index.php?vista=lo_mas_visto/2">
                                       <?php
                                       $a = Sector_2::get_Prefijo("titulo_2");
                                       ?>
                                       <?= $a->valor; ?>
                                    </a></h5>
                                 <ul>
                                    <li><i class="fa fa-clock-o"></i>
                                       <?php
                                       $a = Sector_2::get_Prefijo("fecha_2");
                                       ?>
                                       <?= date_format(date_create($a->valor), 'd/m/Y'); ?>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </li>




                        <li>
                           <div class="media">
                              <a href="#0" class="pull-left">
                                 <img class="media-object img-responsive hovereffect" src="servidor/style/portada/<?= $img3_c->valor; ?>" alt="" />
                              </a>
                              <div class="media-body">
                                 <h5><a href="index.php?vista=lo_mas_visto/3">
                                       <?php
                                       $a = Sector_2::get_Prefijo("titulo_3");
                                       ?>
                                       <?= $a->valor; ?>
                                    </a></h5>
                                 <ul>
                                    <li><i class="fa fa-clock-o"></i>
                                       <?php
                                       $a = Sector_2::get_Prefijo("fecha_3");
                                       ?>
                                       <?= date_format(date_create($a->valor), 'd/m/Y'); ?>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </li>




                        <li>
                           <div class="media">
                              <a href="#0" class="pull-left">
                                 <img class="media-object img-responsive hovereffect" src="servidor/style/portada/<?= $img4_d->valor; ?>" alt="" />
                              </a>
                              <div class="media-body">
                                 <h5><a href="index.php?vista=lo_mas_visto/4">
                                       <?php
                                       $a = Sector_2::get_Prefijo("titulo_4");
                                       ?>
                                       <?= $a->valor; ?>
                                    </a></h5>
                                 <ul>
                                    <li><i class="fa fa-clock-o"></i>
                                       <?php
                                       $a = Sector_2::get_Prefijo("fecha_4");
                                       ?>
                                       <?= date_format(date_create($a->valor), 'd/m/Y'); ?>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </li>




                        <li>
                           <div class="media">
                              <a href="#0" class="pull-left">
                                 <img class="media-object img-responsive hovereffect" src="servidor/style/portada/<?= $img5_e->valor; ?>" alt="" />
                              </a>
                              <div class="media-body">
                                 <h5><a href="index.php?vista=lo_mas_visto/5">
                                       <?php
                                       $a = Sector_2::get_Prefijo("titulo_5");
                                       ?>
                                       <?= $a->valor; ?>
                                    </a></h5>
                                 <ul>
                                    <li><i class="fa fa-clock-o"></i>
                                       <?php
                                       $a = Sector_2::get_Prefijo("fecha_5");
                                       ?>
                                       <?= date_format(date_create($a->valor), 'd/m/Y'); ?>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </li>

                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="clearfix"></div>


         <div class="widget">
            <img src="style/images/adv2.gif" class="img-responsive" alt="">
         </div>
         <div class="clearfix"></div>
         <!-- Advertisement End -->
         <!-- Recent Post Widget start -->
        
      </div>









      <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 equalcol conentsection">
         <!-- Video Slider Start -->
         <div class="videoslider backcolor">
            <div class='tabbed_content'>
               <div class='tabs'>
                  <div class='moving_bg'>
                     <span class="pointer"></span>
                  </div>
                  <div class='tab_item'>
                     <h5>
                        <?php
                        $a = Sector_3::get_Prefijo("lugar_1");
                        ?>
                        <?= $a->valor; ?>
                     </h5>
                     <span class="hidden-xs">
                        <?php
                        $a = Sector_3::get_Prefijo("fecha_1");
                        ?>
                        <?= date_format(date_create($a->valor), 'd/m/Y'); ?>

                     </span>
                  </div>
                  <div class='tab_item'>
                     <h5> <?php
                           $a = Sector_3::get_Prefijo("lugar_2");
                           ?>
                        <?= $a->valor; ?></h5>
                     <span class="hidden-xs">
                        <?php
                        $a = Sector_3::get_Prefijo("fecha_2");
                        ?>
                        <?= date_format(date_create($a->valor), 'd/m/Y'); ?>
                     </span>
                  </div>
                  <div class='tab_item'>
                     <h5> <?php
                           $a = Sector_3::get_Prefijo("lugar_3");
                           ?>
                        <?= $a->valor; ?></h5>
                     <span class="hidden-xs"><?php
                                             $a = Sector_3::get_Prefijo("fecha_3");
                                             ?>
                        <?= date_format(date_create($a->valor), 'd/m/Y'); ?>
                     </span>
                  </div>

                  <div class='tab_item'>
                     <h5> <?php
                           $a = Sector_3::get_Prefijo("lugar_4");
                           ?>
                        <?= $a->valor; ?></h5>
                     <span class="hidden-xs"><?php
                                             $a = Sector_3::get_Prefijo("fecha_4");
                                             ?>
                        <?= date_format(date_create($a->valor), 'd/m/Y'); ?>
                     </span>
                  </div>

               </div>
               <div class='slide_content'>
                  <div class='tabslider'>
                     <div class="video">
                        <!-- Video Box Start -->
                        <div class="videobox">

                           <center>
                              <iframe width="520" height="315" src="<?= $img1_s->valor; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                           </center>
                        </div>
                        <!-- Video Box End -->
                     </div>
                     <div class="video">
                        <!-- Video Box Start -->
                        <div class="videobox">

                           <center>
                              <iframe width="520" height="315" src="<?= $img2_s->valor; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                           </center>

                        </div>
                        <!-- Video Box End -->
                     </div>
                     <div class="video">
                        <!-- Video Box Start -->
                        <div class="videobox">

                           <center>
                              <iframe width="520" height="315" src="<?= $img3_s->valor; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                           </center>

                        </div>
                        <!-- Video Box End -->
                     </div>

                     <div class="video">
                        <!-- Video Box Start -->
                        <div class="videobox">

                           <center>
                              <iframe width="520" height="315" src="<?= $img4_s->valor; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                           </center>
                        </div>
                        <!-- Video Box End -->
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!----------------------------------------------------->


         <div class="sections">
            <h2 class="heading">Ultima Noticia</h2>
            <div class="clearfix"></div>
            <div class="media-carousal">
               <div id="nav-00" class="crsl-nav">
                  <a href="#" class="previous"><i class="fa fa-arrow-circle-o-left"></i></a>
                  <a href="#" class="next"><i class="fa fa-arrow-circle-o-right"></i></a>
               </div>
               <div class="crsl-items" data-navigation="nav-00">
                  <div class="crsl-wrap">
                     <div class="crsl-item">

                        <div class="videobox2">
                           <a href="index.php?vista=ultima_noticia/1">

                              <figure>

                                 <img src="servidor/style/portada/<?= $img1_t->valor; ?>" class="img-responsive hovereffect" alt="" />
                                 <div class="vidopts">
                                    <ul>
                                       <li style="margin-top: -3.8em;">
                                          <label style="background-color: #DF2126;padding: 0px 1em;margin-left: -1em;">
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

                        <div class="videobox2">
                           <a href="index.php?vista=ultima_noticia/2">

                              <figure>
                                 <img src="servidor/style/portada/<?= $img2_t->valor; ?>" class="img-responsive hovereffect" alt="" />
                                 <div class="vidopts">
                                    <ul>
                                       <li style="margin-top: -3.8em;">
                                          <label style="background-color: #DF2126;padding: 0px 1em;margin-left: -1em;">
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

                        <div class="videobox2">
                           <a href="index.php?vista=ultima_noticia/3">

                              <figure>
                                 <img src="servidor/style/portada/<?= $img3_t->valor; ?>" class="img-responsive hovereffect" alt="" />
                                 <div class="vidopts">
                                    <ul>
                                       <li style="margin-top: -3.8em;">
                                          <label style="background-color: #DF2126;padding: 0px 1em;margin-left: -1em;">
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

                        <div class="videobox2">
                           <a href="index.php?vista=ultima_noticia/4">

                              <figure>
                                 <img src="servidor/style/portada/<?= $img4_t->valor; ?>" class="img-responsive hovereffect" alt="" />
                                 <div class="vidopts">
                                    <ul>
                                       <li style="margin-top: -3.8em;">
                                          <label style="background-color: #DF2126;padding: 0px 1em;margin-left: -1em;">
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

                        <div class="videobox2">
                           <a href="index.php?vista=ultima_noticia/5">

                              <figure>
                                 <img src="servidor/style/portada/<?= $img5_t->valor; ?>" class="img-responsive hovereffect" alt="" />
                                 <div class="vidopts">
                                    <ul>
                                       <li style="margin-top: -3.8em;">
                                          <label style="background-color: #DF2126;padding: 0px 1em;margin-left: -1em;">
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
            </div>
         </div>
         <!-- Contents Section End -->
         <div class="clearfix"></div>

         <div class="sections">
            <h2 class="heading">Recomendados</h2>
            <div class="clearfix"></div>
            <div class="row">
               <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                  <div class="blogpost">
                     <figure>
                        <a href="#0">
                           <img src="servidor/style/portada/<?= $img2_y->valor; ?>" class="img-responsive hovereffect">
                        </a>
                        <figcaption>
                           <ul>
                              <li><i class="fa fa-calendar"></i>24/7</li>
                              <li>
                                 <i class="fa fa-align-justify"></i>
                                 <a href="#">Online</a>
                              </li>
                           </ul>
                        </figcaption>
                     </figure>
                     <div class="text">
                        <h4 class="heading"><a href="#0">Futbol en Vivo</a></h4>
                        <p>
                           Puedes ver todos los partido Nacionales e Internaciones en Vivo
                        </p>
                        <a href="https://www.rojadirectaenvivo.club" target="new_" class="btn btn-primary btn-xs backcolor">Acceder</a>
                     </div>
                     <div class="clearfix"></div>
                  </div>
               </div>
               <!--------------------->


               <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                  <div class="blogpost">
                     <figure>
                        <a href="">

                        <img src="servidor/style/portada/<?= $img3_y->valor; ?>" class="img-responsive hovereffect">                        </a>

                        <figcaption>
                           <ul>
                              <li><i class="fa fa-calendar"></i>24/7</li>
                              <li>
                                 <i class="fa fa-align-justify"></i>
                                 <a href="#">Online</a>
                              </li>
                           </ul>
                        </figcaption>
                     </figure>
                     <div class="text">
                        <h4 class="heading"><a href="#0">Cursos Gratis</a></h4>
                        <p>
                           Capacitate para tu primer empleo totalmente gratis
                        </p>
                        <a href="https://formaciononline.eu/cursos-gratis-online/" target="new_" class="btn btn-primary btn-xs backcolor">Acceder</a>
                     </div>
                     <div class="clearfix"></div>
                  </div>
               </div>





            </div>
         </div>
         <!----------------------------------------------------->


         <div class="clearfix"></div>
      </div>
      <!-- Content Column End -->
      <!-- Dark Sidebar Start -->
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 equalcol blacksidebar">
         <!-- Search Widget start -->
         <div class="widget">
            <h2 class="heading">Buscar</h2>
            <div class="search">
               <form action="#0">
                  <a href="index.php?vista=destacado">
                     <input type="text" placeholder=" Noticias Destacadas">
                     <button class="btn btn-primary btn-xs backcolor"><i class="fa fa-arrow-right"></i></button>
                  </a>
               </form>
            </div>
         </div>
         <div class="clearfix"></div>
         <!-- Search Widget End -->
         <!-- Hot Videos Widget start -->
         <div class="widget">
            <!-------------------------->
            <h3 class="heading"> Radio Fides</h3>
            <center>
                        <a href="index.php?vista=en_vivo">
                  <img src="servidor/style/portada/<?= $img1_y->valor; ?>" style="border-radius: 7px;width: 17em;margin-top: -10px;">

               </a>
            </center>

            <!---------------------------->


            <h3 class="heading">Pronostico del Tiempo</h3>
            <center>
               <div class="carousals">
                  <!-- weather widget start -->
                  <div id="m-booked-bl-simple-97851">
                     <div class="booked-wzs-160-110 weather-customize" style="background-color:#137AE9;width:225px;" id="width3">
                        <div class="booked-wzs-160-110_in">
                           <div class="booked-wzs-160-data">
                              <div class="booked-wzs-160-left-img wrz-03"></div>
                              <div class="booked-wzs-160-right">
                                 <div class="booked-wzs-day-deck">
                                    <div class="booked-wzs-day-val">
                                       <div class="booked-wzs-day-number"><span class="plus">+</span>21</div>
                                       <div class="booked-wzs-day-dergee">
                                          <div class="booked-wzs-day-dergee-val">&deg;</div>
                                          <div class="booked-wzs-day-dergee-name">C</div>
                                       </div>
                                    </div>
                                    <div class="booked-wzs-day">
                                       <div class="booked-wzs-day-d"><span class="plus">+</span>22&deg;</div>
                                       <div class="booked-wzs-day-n"><span class="plus">+</span>8&deg;</div>
                                    </div>
                                 </div>
                                 <div class="booked-wzs-160-info">
                                    <div class="booked-wzs-160-city smolest">Bermejo (Tarija)</div>
                                    <div class="booked-wzs-160-date">Sábado, 08</div>
                                 </div>
                              </div>
                           </div>
                           <div class="booked-wzs-center"><span class="booked-wzs-bottom-l"> Previsión para 7 días</span></div> </a>
                        </div>
                     </div>
                  </div>
                  <script type="text/javascript">
                     var css_file = document.createElement("link");
                     var widgetUrl = location.href;
                     css_file.setAttribute("rel", "stylesheet");
                     css_file.setAttribute("type", "text/css");
                     css_file.setAttribute("href", 'https://s.bookcdn.com/css/w/booked-wzs-widget-160.css?v=0.0.1');
                     document.getElementsByTagName("head")[0].appendChild(css_file);

                     function setWidgetData_97851(data) {
                        if (typeof(data) != 'undefined' && data.results.length > 0) {
                           for (var i = 0; i < data.results.length; ++i) {
                              var objMainBlock = document.getElementById('m-booked-bl-simple-97851');
                              if (objMainBlock !== null) {
                                 var copyBlock = document.getElementById('m-bookew-weather-copy-' + data.results[i].widget_type);
                                 objMainBlock.innerHTML = data.results[i].html_code;
                                 if (copyBlock !== null) objMainBlock.appendChild(copyBlock);
                              }
                           }
                        } else {
                           alert('data=undefined||data.results is empty');
                        }
                     }
                     var widgetSrc = "https://widgets.booked.net/weather/info?action=get_weather_info;ver=7;cityID=57590;type=1;scode=124;ltid=3458;domid=582;anc_id=7623;countday=undefined;cmetric=1;wlangID=4;color=137AE9;wwidth=225;header_color=ffffff;text_color=333333;link_color=08488D;border_form=1;footer_color=ffffff;footer_text_color=333333;transparent=0;v=0.0.1";
                     widgetSrc += ';ref=' + widgetUrl;
                     widgetSrc += ';rand_id=97851';
                     widgetSrc += ';wstrackId=348727805';
                     var weatherBookedScript = document.createElement("script");
                     weatherBookedScript.setAttribute("type", "text/javascript");
                     weatherBookedScript.src = widgetSrc;
                     document.body.appendChild(weatherBookedScript)
                  </script><!-- weather widget end -->
               </div>

            </center>



         </div>
         <div class="clearfix"></div>
         <a href="https://www.jaibav.com" target="new_">
            <center>
               <h3 class="heading">Sistema Web Gratis</h3>
               <img src="style/images/sistema_web.jpg" style="width: 19em;">
            </center>
         </a>
         <div class="clearfix"></div>

         <div class="widget">
         <h2 class="heading">Facebook</h2>
            <div class="flickrgallery">
               <ul>
                  <li><a href="https://www.facebook.com/FidesTJ.88.9" target="new_"><img src="style/images/img1.jpg" class="img-responsive hovereffect"> Fides Tarija </a></li>
                  <li><a href="https://www.facebook.com/fidesbermejo" target="new_"><img src="style/images/img2.jpg" class="img-responsive hovereffect" >Fides Bermejo</a></li>
                  <li><a href="https://www.facebook.com/FidesYacuiba89.1/" target="new_"><img src="style/images/img3.jpg" class="img-responsive hovereffect" > Fides Yacuiba</a></li>
                  <li><a href="https://www.facebook.com/Radio-Fides-Villa-Montes-110108334184646/" target="new_"><img src="style/images/img4.jpg" class="img-responsive hovereffect" >Fides Villa montes</a></li>
                </ul>
            </div>
         </div>
         <div class="clearfix"></div>
      
      
         <div class="widget">
            <h2 class="heading">Categorias</h2>
            <div class="tagswidget">

               <?php $cat = Categoria::getAll(); ?>
               <?php if (count($cat) > 0) : ?>
                  <?php foreach ($cat as $a) : ?>
                     <a href="index.php?vista=publicar/inicio&cat=<?= $a->nombre_corto; ?>" class="btn btn-primary btn-xs backcolor">


                        <?= $a->nombre; ?></a>

                  <?php endforeach; ?>
               <?php endif; ?>

            </div>
         </div>
         <div class="clearfix"></div>



      </div>
      <!-- Dark Sidebar End -->
   </div>
</div>

