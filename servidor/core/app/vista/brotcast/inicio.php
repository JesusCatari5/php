<?php
// Archivo de conexion con la base de datos
require_once 'core/controlador/Database_img.php';
// Condicional para validar el borrado de la audio
if (isset($_GET['id'])) {
	// Selecciona audio a borrar
	$stmt_select = $DB_con->prepare('SELECT audio FROM brotcash WHERE id =:uid');
	$stmt_select->execute(array(':uid' => $_GET['id']));
	$imgRow = $stmt_select->fetch(PDO::FETCH_ASSOC);
	// Ruta de la audio
	unlink("style/brotcast/" . $imgRow['audio']);

	// Consulta para eliminar el registro de la base de datos
	$stmt_delete = $DB_con->prepare('DELETE FROM brotcast WHERE id =:uid');
	$stmt_delete->bindParam(':uid', $_GET['id']);
	$stmt_delete->execute();
	// Redireccioa al inicio
	header("Location: index.php?vista=brotcast/inicio");
}

?>


<div class="modal-footer">
	brotcast
	<button class="btn btn-primary"> <a href="index.php?vista=brotcast/registrar">Registrar</a></button>
</div>

<?php
$ver = brotcast::getAll();
if (count($ver) > 0) {
?>
	<div class="box">

		<!-- /.box-header -->
		<div class="box-body">
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th style="width: 10em;">Fecha</th>
						<th>Titulo</th>
						<th>audio</th>
						<th></th>

					</tr>
				</thead>

				<?php foreach ($ver as $c) : ?>
					<tr>
						<td><?= $c->id; ?></td>
						<td style="width: 7em;"><?= date_format(date_create($c->fecha), 'd-m-Y'); ?></td>
						<td><?= $c->titulo; ?> </td>

						<td>
							<?php
							if ($c->audio == null) {
								echo "<i class='fa fa-times'></i>";
							} else if ($c->audio == true) {
								echo "<i class='fa fa-check'></i>";
							}

							?>
						</td>


						<td>
							<a href="index.php?vista=brotcast/editar&id=<?= $c->id; ?>" class="btn btn-success btn-flat" style="padding: 1px 27px;">
								Editar
							</a>
						</td>

						<td>
							<a href="index.php?vista=brotcast/inicio&id=<?= $c->id; ?>" onclick="return confirm('Esta seguro de eliminar el archivo?')" class="text-grey" data-id="widget-elm" data-light-class="text-grey" data-dark-class="text-white" class="btn btn-xs btn-danger">
								<i class="fa fa-remove"></i></a>
						</td>



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