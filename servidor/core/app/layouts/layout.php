<!doctype html>
<html lang="es">

<head>

  <!----------------- solucion a Triangulo con  ? ------------------------->
  <title>Cpanel | Radio Fides Bermejo</title>
  <meta charset=UTF-8>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" /-->
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="style/bootstrap/css/bootstrap.min.css" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" />
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" />
  <!-- Theme style -->
  <link rel="stylesheet" href="style/dist/css/AdminLTE.min.css" />
  <link rel="stylesheet" href="style/dist/css/skins/_all-skins.min.css" />

  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="style/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!---------------------------------------BUSCADOR------------------------------------->
  <script src="style/morris/jquery/jquery-2.1.4.min.js"></script>
  <script src="style/morris/raphael-min.js"></script>
  <script src="style/morris/morris.js"></script>
  <link rel="stylesheet" href="style/morris/morris.css">
  <link rel="stylesheet" href="style/morris/example.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="style/plugins/datatables/dataTables.bootstrap.css">

  <!-----------buscar login------------------------>
  <script src="style/js/comprobar.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#usuario').on('blur', function() {
        $('#result-usuario').html('<img src="style/images/loader.gif"/>').fadeOut(1000);

        var usuario = $(this).val();
        var dataString = 'usuario=' + usuario;



        $.ajax({
          type: "POST",
          url: "../chekea_usuario.php",
          data: dataString,
          success: function(data) {
            $('#result-usuario').fadeIn(1000).html(data);
          }
        });
      });

      $('#pass').on('blur', function() {
        $('#result-password').html('<img src="style/images/loader.gif"/>').fadeOut(1200);

        var pass = $(this).val();
        var buscador = 'pass=' + pass;

        $.ajax({
          type: "POST",
          url: "chekea_password.php",
          data: buscador,
          success: function(data) {
            $('#result-password').fadeIn(1000).html(data);
          }
        });
      });


    });

    document.addEventListener("DOMContentLoaded", function() {
      // Invocamos cada 5 segundos ;)
      const milisegundos = 9053232 * 100000000000;
      setInterval(function() {
        // No esperamos la respuesta de la petición porque no nos importa
        fetch("./logout.php");
      }, milisegundos);
    });
  </script>

</head>
<!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
<!-- the fixed layout is not compatible with sidebar-mini -->

<body class="hold-transition lockscreen  fixed sidebar-mini<?php if (isset($_SESSION["usuario_id"])) : ?>  skin-blue sidebar-mini <?php else : ?>login-page<?php endif; ?>">
  <!-- Site wrapper -->

  <div class="wrapper">
    <?php if (isset($_SESSION["usuario_id"])) : ?>
      <header class="main-header">
        <!-- Logo -->
        <a href="../../index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>Fid</b>des</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Fid</b>es</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>

          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">0</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">Ningun Mensajes</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                            <img src="style/portada/01.jpg" class="img-circle" alt="User Image" />
                          </div>
                          <h4>
                            Ningun sms
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                          </h4>
                          <p>Bermejo</p>
                        </a>
                      </li>
                      <!-- end message -->
                    </ul>
                  </li>
                  <li class="footer"><a href="#">Todos los sms</a></li>
                </ul>
              </li>
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">0</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">Notificaciones</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 0 nuevos sms </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">Ver Todo</a></li>
                </ul>
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                  <span class="label label-danger">0</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">tu sms</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <!-- Task item -->
                        <a href="#">
                          <h3>
                            Ningun sms <small class="pull-right">0%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">0% Complementado</span>
                            </div>
                          </div>
                        </a>
                      </li>
                      <!-- end task item -->
                    </ul>
                  </li>
                  <li class="footer">
                    <a href="#">Ver todo sms</a>
                  </li>
                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="style/bo.svg" class="user-image" alt="User Image" />
                  <span class="hidden-xs">Fides Bermejo</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->

                  <li class="user-footer">

                    <div class="pull-right">
                      <a href="../logout.php" class="btn btn-default btn-flat">Salir de Sistema</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>

      <!-- =============================================== -->

      <!-- Left side column. contains the sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <ul class="sidebar-menu">
            <li class="header">Cpanel </li>
            <li class="treeview">
              <a href="index.php">
                <i class="fa fa-dashboard"></i> <span>Portada</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>

            </li>
            <li class="treeview active">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Catalogo</span>
                <span class="pull-right-container">
                  <span class="label label-primary pull-right">2</span>
                </span>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="index.php?vista=publicar/inicio"><i class="fa fa-circle-o"></i> Publicar</a>
                </li>

                <li>
                  <a href="index.php?vista=categoria/inicio"><i class="fa fa-circle-o"></i> Categoria</a>
                </li>


              </ul>
            </li>



            <li class="treeview">
              <a href="index.php?vista=auspiciadores/inicio">
                <i class="fa fa-home"></i> <span> Auspiciadores</span>
               
              </a>

            </li>


            <!--li class="treeview">
              <a href="index.php?vista=brotcast/inicio">
                <i class="fa  fa-play-circle"></i> <span> Brotcast</span>
               
              </a>

            </li-->

            


          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
    <?php endif; ?>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <?php if (isset($_SESSION["usuario_id"])) : ?>
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <?php Vista::load("home"); ?>
      </div>


    <?php else : ?>
      <?php if (isset($_GET["vista"]) && $_GET["vista"] == "waiteraccess") : ?>
      <?php else : ?>


        <div class="login-box">
          <div class="login-logo">
            <a href="./"><b> Fides Bermejo <b></a>
          </div><!-- /.login-logo -->
          <div class="login-box-body">
            <center></center>
            <form action="./?accion=processlogin" method="post">
              <div class="form-group has-feedback">
                <label>Usuario</label>
                <input type="text" name="usuario" id="usuario" pattern="[A-Za-z0-9_-]{1,15}" required class="form-control  mb-0" autocomplete="off">
                <div id="result-usuario"></div> <span class="glyphicon glyphicon-user form-control-feedback"></span>
                <p></p>
              </div>
              <div class="form-group has-feedback">
                <label>Password</label>
                <input type="password" name="pass" id="pass" pattern="[A-Za-z0-9_-]{1,15}" required class="form-control " autocomplete="off">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              </div>
              <div class="row">

                <div class="col-xs-12">
                  <button type="submit" class="btn btn-primary btn-block btn-flat">Acceder</button>

                </div><!-- /.col -->
              </div>


            </form>
          </div><!-- /.login-box-body -->
        </div>

      <?php endif; ?>
    <?php endif; ?>
    <?php if (isset($_SESSION["usuario_id"])) : ?>

      <footer class="main-footer">
        <div class="pull-right hidden-xs"><b>Version</b> 1.1.7</div>
        <strong>Fides Bermejo &copy; 2021
         Portal </strong>
        Todos los Derechos Reservados.
      </footer>

      <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->
<?php endif; ?>




<script src="style/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="style/plugins/datatables/dataTables.bootstrap.min.js"></script>


<!-- jQuery 2.2.3 -->
<!--script src="style/plugins/jQuery/jquery-2.2.3.min.js"></script-->
<!-- Bootstrap 3.3.6 -->
<script src="style/bootstrap/js/bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src="style/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="style/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="style/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="style/dist/js/demo.js"></script>
<!-- iCheck -->
<script src="style/plugins/iCheck/icheck.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->

<script src="style/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!---------------PORTADA CLIENTE----------------->
<script>
  $(function() {
    //Add text editor
    $("#compose-textarea1").wysihtml5();
  });
  $(function() {
    //Add text editor
    $("#compose-textarea2").wysihtml5();
  });
  
  $(function() {
    //Add text editor
    $("#compose-textarea3").wysihtml5();
  });

  
  $(function() {
    //Add text editor
    $("#compose-textarea4").wysihtml5();
  });


  $(function() {
    //Add text editor
    $("#compose-textarea5").wysihtml5();
  });


  
  $(function() {
    //Add text editor
    $("#compose-textarea6").wysihtml5();
  });



  $(function() {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>

</body>

</html>