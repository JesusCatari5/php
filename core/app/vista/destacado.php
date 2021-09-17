


<?php
$pro = Publicar::getDestacados();
if (count($pro) > 0) {
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
                                        <h4 style="margin-top: -6px;">
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

<?php
} else {
    echo "<h5><br>Lo siento No Existe - Datos Registrado  <b>:(</b></h5>";
?>
<?php
}
?>
