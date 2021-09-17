<div class="modal-footer">
    Auspiciadores
    <button class="btn btn-primary"> <a href="index.php?vista=auspiciadores/registrar">Registrar</a></button>
</div>


<?php
$ver = Auspiciadores::getAll();
if (count($ver) > 0) {
?>
    <div class="box">

        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Fecha</th>
                        <th>Imagen</th>
                        <th>Nombre</th>

                        <th>Celular 1</th>
                        <th>Celular 2</th>
                        <th>Estado</th>
                        <th>Opciones</th>
                    </tr>
                </thead>

                <?php foreach ($ver as $c) : ?>
                    <tr>
                        <td><?= $c->id; ?></td>


						<td><?= date_format(date_create($c->fecha), 'd/m/Y _ H:m a'); ?></td>



                        <!--td>
                            <time id="countdown"></time>

                            <script>
                            
                                var end = new Date('<!-?= $c->fecha; ?>');

                                var _second = 1000;
                                var _minute = _second * 60;
                                var _hour = _minute * 60;
                                var _day = _hour * 24;
                                var timer;

                                function showRemaining() {
                                    var now = new Date();
                                    var distance = end - now;
                                    if (distance < 0) {

                                        clearInterval(timer);
                                        document.getElementById('countdown').innerHTML = 'EXPIRED!';

                                        return;
                                    }
                                    var days = Math.floor(distance / _day);
                                    var hours = Math.floor((distance % _day) / _hour);
                                    var minutes = Math.floor((distance % _hour) / _minute);
                                    var seconds = Math.floor((distance % _minute) / _second);

                                    document.getElementById('countdown').innerHTML = days + ' dias, ';
                                    document.getElementById('countdown').innerHTML += hours + ' horas, ';
                                    document.getElementById('countdown').innerHTML += minutes + ' minutos y ';
                                    document.getElementById('countdown').innerHTML += seconds + ' segundos';
                                }

                                timer = setInterval(showRemaining, 1000);
                            </script>
                        </td-->

                        <td>
                            <?php
                            if ($c->foto == null) {
                                echo "<i class='fa fa-times'></i>";
                            } else if ($c->foto == true) {
                                echo "<i class='fa fa-check'></i>";
                            }

                            ?>
                        </td>


                        <td><?= $c->nombre; ?></td>
                        <td><?= $c->celular_1; ?></td>

                        <td><?= $c->celular_2; ?></td>
                        <td>
                            <?php
                            if ($c->estado == 0) {
                                echo "<i class='fa fa-times'> Inactivo</i>";
                            } else if ($c->estado == 1) {
                                echo "<i class='fa fa-check'>Activo</i>";
                            }

                            ?>
                        </td>

                        <td><a href="index.php?vista=auspiciadores/editar&id=<?= $c->id; ?>" class="btn btn-success btn-flat" style="padding: 1px 27px;">Editar</a></td>
                    </tr>

                <?php endforeach; ?>

            </table>
        </div>
    </div>

<?php
} else {
    echo "<h5><br>Lo siento No Existe - Datos Registrado  <b>:(</b></h5>";
?>
<?php
}
?>