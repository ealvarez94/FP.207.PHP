<?php
include 'database.php';
$id_teacher = $_GET['id_teacher'];
$eliminar = "DELETE FROM teachers WHERE id_teacher = '$id_teacher' ";
$elimina = $connection->query($eliminar);
header("location:tablaprofesores.php");
?>
