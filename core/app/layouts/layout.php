<!DOCTYPE html>
<html lang="es">

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <!--title>Radio Fides Tarija</title-->
   <!--// Responsive //-->
   <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
   <meta name="apple-mobile-web-app-capable" content="yes">
   <meta name="HandheldFriendly" content="True">
   <meta name="apple-mobile-web-app-status-bar-style" content="black">
   <!--// Stylesheets //-->
   <link href="style/css/style.css" rel="stylesheet" media="screen" />
   <link href="style/css/bootstrap.css" rel="stylesheet" media="screen" />
   <link href="style/images/favicon.ico" rel="icon" type="image/x-icon" />
   <!---------------------------------------BUSCADOR------------------------------------->
   <script src="style/morris/jquery/jquery-2.1.4.min.js"></script>
   <script src="style/morris/raphael-min.js"></script>
   <script src="style/morris/morris.js"></script>
   <link rel="stylesheet" href="style/morris/morris.css">
   <link rel="stylesheet" href="style/morris/example.css">

   <!-------Reproducto de audio-------->

   <!--script src="style/js/jquery.min.js" type="text/javascript"></script>
   <script type="text/javascript">
      if (window.jstiming) window.jstiming.load.tick('headEnd');
   </script-->
</head>

<body>

   <!-- Wrapper Start -->
   <div class="wrapper">
      <!-- Header Start -->

      <!--header>
    
    
      <div class="logobar">
        	<div class="custom-container">
            	<div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="logo">
                        	<a href="index.php"><img src="style/images/fides.png" style="width: 13em;"></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="searchbox">
                            <form>
                                <ul>
                                    <li><input type="text" placeholder="Search Videos"></li>
                                    <li class="pull-right"><input type="submit" value="GO"></li>
                                </ul>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <a href="index.php"><img src="style/images/en_vivo.gif" style="width: 17em;margin-left: 4.5em;"></a>
                    </div>
            	</div>
            </div>
        </div>
       
    </header-->



      <header class="style2">

         <div class="logobar">
            <div class="custom-container">

            </div>
         </div>


         <!----------------------------------------------->

         <div class="navigationstrip stickynav bordercolor-top">
            <div class="custom-container">
               <div class="row">
                  <!-- Navigation Start -->
                  <div class="col-lg-10 col-md-9 col-sm-6 col-xs-4">
                     <div class="navigation">
                        <!-- navbar Start -->
                        <div class="navbar yamm navbar-default">
                           <div class="row">
                              <div class="navbar-header">
                                 <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle">
                                    <i class="fa fa-bars"></i> Menu
                                 </button>
                              </div>
                              <div id="navbar-collapse-1" class="navbar-collapse collapse loginsec pull">
                                 <ul class="nav navbar-nav" style="margin-top: -1em;">

                                    <?php $cat = Categoria::getAll(); ?>
                                    <?php if (count($cat) > 0) : ?>

                                       <li>
                                          <a href="index.php" style="padding: 0px 0px;margin-top: 12px;">
                                             <!--img src="style/images/fides.png" style="width: 6em;height: 28px;margin-top: 8px;"-->
                                             Portada
                                          </a>
                                       </li>


                                       <?php foreach ($cat as $a) : ?>

                                          <li class="menu-item">
                                             <a href="index.php?vista=publicar/inicio&cat=<?= $a->nombre_corto; ?>" style="padding: 10px 0px;">
                                                <label style="color: #e30000;"> | </label> <?= $a->nombre; ?></a>
                                          </li>
                                       <?php endforeach; ?>
                                    <?php endif; ?>



                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- navbar End -->
                     </div>
                  </div>
                  <!-- Navigation End -->
                  <!-- Login Start -->

                  <div class="col-lg-2 col-md-3 col-sm-6 col-xs-8">
                     <div class="loginsec pull-right">

                        <a href="servidor/index.php" class="colorhover"><i class="fa fa-sign-in"></i>Login</a>

                        <script>
                           var meses = new Array("01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12");
                           var diasSemana = new Array("Dom", "Lun", "Mar", "Mié", "Jue", "Vie", "Sáb");
                           var f = new Date();
                           document.write(diasSemana[f.getDay()] + " " + f.getDate() + "/" + meses[f.getMonth()] + "/" + f.getFullYear());
                        </script>
                        <!--a href="#" class="colorhover"><i class="fa fa-lock"></i>Login</a-->
                     </div>
                  </div>
                  <!-- Login End -->
               </div>
            </div>
         </div>

         <!----------------------------------------------->

      </header>
      <!-- Header End -->
      <!-- Contents Start -->
      <div class="contents">



         <?php Vista::load("home"); ?>


      </div>






      <footer class="style1">
         <div class="custom-container">
          
            <!-- Footer Videos End -->
            <hr />
            <div class="row footerwidgets">
               <div class="col-lg-3 col-md-6 col-sm-6 .col-xs-12">
                  <div class="widget">
                     <div class="text-widget">
                        <div class="textsec">

                           <p>
                              <?php
                              $a = Sector_6::get_Prefijo("titulo_1");
                              ?>
                              <?= $a->valor; ?>
                           </p>
                           <ul class="contactdetail">
                              <li><i class="fa fa-mobile"></i>
                                 <?php
                                 $a = Sector_6::get_Prefijo("titulo_2");
                                 ?>
                                 <?= $a->valor; ?>
                              </li>
                              <li><i class="fa fa-envelope"></i>
                                 <?php
                                 $a = Sector_6::get_Prefijo("titulo_3");
                                 ?>
                                 <?= $a->valor; ?>

                              </li>
                           </ul>
                           <div class="clearfix"></div>
                        </div>
                     </div>
                  </div>
                  <div class="clearfix"></div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 .col-xs-12">
                  <!-- Flickr Widget start -->
                  <div class="widget">
                     <h2 class="heading">Instagram</h2>
                     <div class="flickrgallery">
                        <ul>

                           <li><a href="https://instagram.com/radiofidestarija?utm_medium=copy_link" target="new_"><img src="style/images/img1.jpg" class="img-responsive hovereffect">Fides Tarija</a></li>
                           <li><a href="https://www.instagram.com/fidesbermejo/" target="new_"><img src="style/images/img2.jpg" class="img-responsive hovereffect"> Fides Bermejo</a></li>


                        </ul>
                     </div>
                  </div>
                  <div class="clearfix"></div>
                  <!-- Flickr Widget End -->
               </div>
               <div class="col-lg-6 col-md-12 col-sm-12 .col-xs-12">
                  <div class="widget">
                     <h2 class="heading">Ubicacion</h2>
                     <div class="contact-forms">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3680.0681867390317!2d-64.34484108524349!3d-22.725706837147527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94057fe3fdf15013%3A0x7d7167fd213c3f5f!2sRadio%20Fides%20Bermejo!5e0!3m2!1ses!2sbo!4v1620691367472!5m2!1ses!2sbo" width="550" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                     </div>
                  </div>
               </div>
            </div>
            <hr />
            <div class="row">
               <div class="col-lg-10 col-md-10 col-sm-9 .col-xs-9">
                  <p class="copyrights">© <?php echo date("Y"); ?>. Todos los Derechos Servados por <a href="#"><strong>Radio Fides Bermejo</strong></a></p>
               </div>
               <!--div class="col-lg-2 col-md-2 col-sm-3 .col-xs-3">
                  <div class="socialnetworks">
                     <ul class="pull-right">
                        <li><a href="#" data-toggle="tooltip" title="Facebook" class="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" title="Youtube" class="youtube"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" title="Twitter" class="twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" title="Vimeo" class="vimeo"><i class="fa fa-vimeo-square"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" title="Pinterest" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                     </ul>
                     <div class="clearfix"></div>
                  </div>
               </div-->
            </div>
         </div>
      </footer>
      <!-- Footer End -->
      <a href="#" class="pull-right gotop btn btn-primary backcolor"> <i class="fa fa-arrow-up"></i> </a>
   </div>
   <!-- Wrapper End -->
   <!--// Javascript //-->
   <script type="text/javascript" src="style/js/jquery-1.11.1.min.js"></script>
   <script type="text/javascript" src="style/js/jquery-ui.min.js"></script>
   <script type="text/javascript" src="style/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="style/js/functions.js"></script>
   <script type="text/javascript" src="style/js/responsiveCarousel.js"></script>
   <script type="text/javascript" src="style/js/slimbox2.js"></script>
   <script type="text/javascript" src="style/js/responsive-paginate.js"></script>
   <script>
      (function(i, s, o, g, r, a, m) {
         i['GoogleAnalyticsObject'] = r;
         i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
         }, i[r].l = 1 * new Date();
         a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
         a.async = 1;
         a.src = g;
         m.parentNode.insertBefore(a, m)
      })(window, document, 'script', 'style/js/analytics.js', 'ga');

      ga('create', 'UA-50738310-1', 'softcircles.net');
      ga('send', 'pageview');
   </script>
</body>

</html>