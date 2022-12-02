<?php

session_start();
include 'database.php';

$username = 'root';
$password = '123456';
$database = 'producto2';
$connection = new PDO('mysql:host=localhost;dbname=producto2;',$username,$password);
$id_course = $_GET['id_course'];
$m = "SELECT * FROM courses WHERE id_course = '$id_course'";
$modificar = $connection->query($m);
$dato = $modificar->fetch();
if(isset($_POST['editar'])){
    $id_course = $_POST['id'];
    $name = $_POST['mName'];
    $description = $_POST['mDescription'];
    $date_start = $_POST['mDatestart'];
    $date_end = $_POST['mDateend'];

    $actualiza = "UPDATE courses SET name = '$name', description = '$description', date_start = '$date_start', date_end = '$date_end' WHERE id_course = '$id_course'";
    $actualizar = $connection->query($actualiza);
    header("location:tablaasignaturas.php");
}

?>


<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <title> Tabla Alumnos </title>
        <meta charset=”utf-8″>
    </head>
    <body class="body">
    <div id="wrapper">
        <div id="contenedor">
            <div id="contenido">
                <div id="">
                    <div class="menu">
                        <a href="index.php" ><button class="button">Inicio</button></a>
                        <a href="asignaturas.php" ><button id="active" class="button">Asignaturas</button></a>
                        <a href="clases.php" ><button class="button">Clases</button></a>
                        <a href="alumnos.php" ><button class="button">Alumnos</button></a>
                        <a href="matriculas.php" ><button class="button">Matrículas</button></a>
                        <a href="profesores.php" ><button class="button">Profesores</button></a>
                    </div>
                </div>
                <div class="" id="">
                    <div class="titulo">
                        <a href="profesores.php" ><button id="" class="subbutton">Crear Profesor</button></a>
                        <a href="tablaprofesores.php" ><button id="subactive" class="subbutton">Administrar Profesores</button></a>
                    </div>
                </div>
                <div class="contenido2" id="seccion2">
                <h1>Editar Alumno</h1>
                <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <input type="hidden" name="id" value="<?php echo $dato['id_course']; ?>">
                    <label>Nombre:</label>
                    <input type="text"  name="mName" value="<?php echo $dato['name']; ?>" placeholder="Username" required>
                    <label>Descripcion:</label>
                    <input type="text"  name="mDescription" value="<?php echo $dato['description']; ?>" placeholder="Password" required>
                    <br><label>Fecha Inicio:</label>
                    <input type="date"  name="mDatestart" value="<?php echo $dato['date_start']; ?>" placeholder="Email" required>
                    <label>Fecha Fin:</label>
                    <input type="date"  name="mDateend" value="<?php echo $dato['date_end']; ?>" placeholder="Nombre" required>
                    <div class="enviar">
                        <br><input class="submit" type="submit" name="editar" value="Modificar">
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    </body>

</html>
