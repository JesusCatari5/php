<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "u661817413_bermejo";
$sql = "SELECT nombre FROM usuario WHERE nombre LIKE '%".$_GET['query']."%' LIMIT 20";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
$json = array();
while( $rows = mysqli_fetch_assoc($resultset) ) {
$json[] = $rows["nombre"];
}
echo json_encode($json);
?>