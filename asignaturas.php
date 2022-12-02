<?php

require 'database.php';

$message = '';

session_start();

if(!empty($_POST['name']) && !empty($_POST['description']) && !empty($_POST['date_start']) && !empty($_POST['date_end'])){
    $sql = "INSERT INTO courses (name,description,date_start,date_end) VALUES (:name, :description, :date_start, :date_end); ";
    $stmt = $connection->prepare($sql);
    $stmt->bindParam(':name',$_POST['name']);
    $stmt->bindParam(':description',$_POST['description']);
    $stmt->bindParam(':date_start',$_POST['date_start']);
    $stmt->bindParam(':date_end',$_POST['date_end']);

    header("location:tablaasignaturas.php");

    if ($stmt->execute()) {
        $message = "Asignatura creada correctamente";
    } else {
        $message = "Asignatura no creada";
    }

}

?>


<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <title> Asignaturas </title>
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
                        <a href="asignaturas.php" ><button id="subactive" class="subbutton">Crear Asignatura</button></a>
                        <a href="tablaasignaturas.php" ><button class="subbutton">Administrar Asignaturas</button></a>
                    </div>
                </div>

                <div class="contenido2" id="seccion2">
                        <h1>Crear Asignatura</h1>
                        <form action="asignaturas.php" method="post">
                            <label>Nombre:</label>
                            <input type="text" name="name" placeholder="Introduce el nombre de la asignatura">
                            <label>Descripcion:</label>
                            <input type="text" name="description" placeholder="Introduce la descripción">
                            </br> <label>Fecha Inicio:</label>
                            <input type="date" name="date_start" placeholder="Introduce la fecha de inicio">
                            <label>Decha Fin:</label>
                            <input type="date" name="date_end" placeholder="Introduce la fecha de fin">
                                <div class="enviar">
                                    </br><input class="submit" type="submit" value="Enviar">
                                </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
