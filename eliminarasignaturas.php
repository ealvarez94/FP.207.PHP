<?php
include 'database.php';
$id_course = $_GET['id_course'];
$eliminar = "DELETE FROM courses WHERE id_course = '$id_course' ";
$elimina = $connection->query($eliminar);
header("location:tablaasignaturas.php");
?>
