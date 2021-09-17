<?php
$pro = null;
if (isset($_GET["cat"])) {
    $ca = Categoria::getNombre_corto($_GET["cat"]);
    $pro = Publicar::getPublicado_Categoria_id($ca->id);
}
?>

<!--======================= Menu  =================================-->
<div class="contents">
    <div class="custom-container">

        <div class="logobar" style="margin-top: -3.5em;">
            <div class="custom-container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="searchbox">
                            <form>
                                <ul>
                                    <li><input type="text" name="buscar" placeholder="Escribir para Buscar" /></li>
                                    <li class="pull-right"><input type="submit" value="Buscar" /></li>
                                </ul>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <a href="#"><img src="style/anuncio.jpg" class="img-responsive" style="width: 25em;margin-left: 16em;"></a>
                    </div>
                </div>
            </div>
        </div>


        <script>
            $("[name='buscar']").on("keyup", function() {
                var valor = $(this).val().toLowerCase();
                $(".crsl-wrap").hide();
                /* $("#myDIV *").filter(function() {
                
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });*/
                $(".videobox2>h4").filter(
                    function() {
                        return $(this).html().toLowerCase().includes(valor);
                    }).parent().parent().parent().parent().show(); //.css( "background", "white" );

            });
        </script>



        <?php if (count($pro) > 0) : ?>
            <div class="row">
                <div class="sections" style="margin-top: 5px;">
                    <?php foreach ($pro as $p) : ?>
                        <div class="crsl-wrap">
                            <div class="crsl-item">


                                <a href="index.php?vista=publicar/detalle&id=<?= $p->id; ;?>">
                                <div class="videobox2" style="width: 15em;padding: 5px;">

                                        <figure>
                                            <img src="servidor/style/portada/<?= $p->imagen; ?>" class="img-responsive hovereffect" style="height: 9em;">
                                            <div class="vidopts">
                                                <ul>
                                                    <li style="margin-top: -2em;">
                                                        <label style="background-color: #ca0000;padding: 0px 1em;margin-left: -1em;">
                                                            <?= $p->lugar; ?>
                                                        </label>
                                                    </li>
                                                    <li><i class="fa fa-clock-o"></i>
                                                        <?= date_format(date_create($p->fecha), 'd-m-Y'); ?>
                                                    </li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                        </figure>
                                        <h4 style="padding-top: 10px;width: 100%;float: left;height: 6em;font-size: 14px;line-height: 18px;margin-top: -8px;">
                                            <?= $p->titulo; ?>
                                        </h4>
                              
                                    </div>
                                </a>

                            </div>
                        </div>
                    <?php endforeach; ?>


                    <!----------------------------------------->
                </div>
            </div>

        <?php else : ?>
            <p class="alert alert-warning">No se Encuentra Datos Registrados !</p>
        <?php endif; ?>

        <div class="clearfix"></div>



    </div>

</div>


<!--div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 equalcol blacksidebar">
                <div class="widget">
                    <h2 class="heading">Search</h2>
                    <div class="search">
                        <form action="https://www.softcircles.net/demos/html/videomagazine/search.php">
                            <input type="text" placeholder="Search Keyword" />
                            <button class="btn btn-primary btn-xs backcolor"><i class="fa fa-arrow-right"></i></button>
                        </form>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="widget">
                    <h2 class="heading">Recent From Blog</h2>
                    <div class="carousals">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <ul class="bloglist">
                                        <li>
                                            <figure>
                                                <a href="blogdetail-double-sidebar.html">
                                                    <img src="images/img12.jpg" class="img-responsive hovereffect" alt="" />
                                                </a>
                                            </figure>
                                            <div class="text">
                                                <h4><a href="blogdetail-double-sidebar.html">Divide days</a></h4>
                                                <ul>
                                                    <li><i class="fa fa-calendar"></i>25-03-2014</li>
                                                    <li> <i class="fa fa-align-justify"></i> <a href="#">Videos, </a> <a href="#">Music</a> </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <figure>
                                                <a href="blogdetail-double-sidebar.html">
                                                    <img src="images/img13.jpg" class="img-responsive hovereffect" alt="" />
                                                </a>
                                            </figure>
                                            <div class="text">
                                                <h4><a href="blogdetail-double-sidebar.html">Gathering Kind</a></h4>
                                                <ul>
                                                    <li><i class="fa fa-calendar"></i>25-03-2014</li>
                                                    <li> <i class="fa fa-align-justify"></i> <a href="#">Videos, </a> <a href="#">Music</a> </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <figure>
                                                <a href="blogdetail-double-sidebar.html">
                                                    <img src="images/img14.jpg" class="img-responsive hovereffect" alt="" />
                                                </a>
                                            </figure>
                                            <div class="text">
                                                <h4><a href="blogdetail-double-sidebar.html">Multiply Moves</a></h4>
                                                <ul>
                                                    <li><i class="fa fa-calendar"></i>25-03-2014</li>
                                                    <li> <i class="fa fa-align-justify"></i> <a href="#">Videos, </a> <a href="#">Music</a> </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="item">
                                    <ul class="bloglist">
                                        <li>
                                            <figure>
                                                <a href="blogdetail-double-sidebar.html">
                                                    <img src="images/img15.jpg" class="img-responsive hovereffect" alt="" />
                                                </a>
                                            </figure>
                                            <div class="text">
                                                <h4><a href="blogdetail-double-sidebar.html">Second Seed</a></h4>
                                                <ul>
                                                    <li><i class="fa fa-calendar"></i>25-03-2014</li>
                                                    <li> <i class="fa fa-align-justify"></i> <a href="#">Videos, </a> <a href="#">Music</a> </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <figure>
                                                <a href="blogdetail-double-sidebar.html">
                                                    <img src="images/img16.jpg" class="img-responsive hovereffect" alt="" />
                                                </a>
                                            </figure>
                                            <div class="text">
                                                <h4><a href="blogdetail-double-sidebar.html">Fruit Replenish</a></h4>
                                                <ul>
                                                    <li><i class="fa fa-calendar"></i>25-03-2014</li>
                                                    <li> <i class="fa fa-align-justify"></i> <a href="#">Videos, </a> <a href="#">Music</a> </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <figure>
                                                <a href="#">
                                                    <img src="images/img17.jpg" class="img-responsive hovereffect" alt="" />
                                                </a>
                                            </figure>
                                            <div class="text">
                                                <h4><a href="blogdetail-double-sidebar.html">Falling Down</a></h4>
                                                <ul>
                                                    <li><i class="fa fa-calendar"></i>25-03-2014</li>
                                                    <li> <i class="fa fa-align-justify"></i> <a href="#">Videos, </a> <a href="#">Music</a> </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="item">
                                    <ul class="bloglist">
                                        <li>
                                            <figure>
                                                <a href="blogdetail-double-sidebar.html">
                                                    <img src="images/img18.jpg" class="img-responsive hovereffect" alt="" />
                                                </a>
                                            </figure>
                                            <div class="text">
                                                <h4><a href="blogdetail-double-sidebar.html">Creepeth Replenish</a></h4>
                                                <ul>
                                                    <li><i class="fa fa-calendar"></i>25-03-2014</li>
                                                    <li> <i class="fa fa-align-justify"></i> <a href="#">Videos, </a> <a href="#">Music</a> </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <figure>
                                                <a href="blogdetail-double-sidebar.html">
                                                    <img src="images/img19.jpg" class="img-responsive hovereffect" alt="" />
                                                </a>
                                            </figure>
                                            <div class="text">
                                                <h4><a href="blogdetail-double-sidebar.html">Falling Focus Down</a></h4>
                                                <ul>
                                                    <li><i class="fa fa-calendar"></i>25-03-2014</li>
                                                    <li> <i class="fa fa-align-justify"></i> <a href="#">Videos, </a> <a href="#">Music</a> </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <figure>
                                                <a href="blogdetail-double-sidebar.html">
                                                    <img src="images/img20.jpg" class="img-responsive hovereffect" alt="" />
                                                </a>
                                            </figure>
                                            <div class="text">
                                                <h4><a href="blogdetail-double-sidebar.html">Darkness Spirit</a></h4>
                                                <ul>
                                                    <li><i class="fa fa-calendar"></i>25-03-2014</li>
                                                    <li> <i class="fa fa-align-justify"></i> <a href="#">Videos, </a> <a href="#">Music</a> </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="carouselpagination">
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="widget">
                    <h2 class="heading">Tags</h2>
                    <div class="tagswidget">
                        <a href="#" class="btn btn-primary btn-xs backcolor">Music</a>
                        <a href="#" class="btn btn-primary btn-xs backcolor">Funny</a>
                        <a href="#" class="btn btn-primary btn-xs backcolor">Movies</a>
                        <a href="#" class="btn btn-primary btn-xs backcolor">Sport</a>
                        <a href="#" class="btn btn-primary btn-xs backcolor">News</a>
                        <a href="#" class="btn btn-primary btn-xs backcolor">Arts</a>
                        <a href="#" class="btn btn-primary btn-xs backcolor">Gaming</a>
                        <a href="#" class="btn btn-primary btn-xs backcolor">Tech</a>
                        <a href="#" class="btn btn-primary btn-xs backcolor">Animals</a>
                        <a href="#" class="btn btn-primary btn-xs backcolor">Auto</a>
                        <a href="#" class="btn btn-primary btn-xs backcolor">Moto</a>
                        <a href="#" class="btn btn-primary btn-xs backcolor">Celeb</a>
                        <a href="#" class="btn btn-primary btn-xs backcolor">College</a>
                        <a href="#" class="btn btn-primary btn-xs backcolor">Lifestyle</a>
                        <a href="#" class="btn btn-primary btn-xs backcolor">Sexy</a>
                        <a href="#" class="btn btn-primary btn-xs backcolor">Sport</a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

        </div>
    </div>
</div-->