<?php
include 'database.php';
$id = $_GET['id'];
$eliminar = "DELETE FROM students WHERE id = '$id' ";
$elimina = $connection->query($eliminar);
header("location:tablaalumnos.php");
?>
