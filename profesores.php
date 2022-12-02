<?php

require 'database.php';

$message = '';

session_start();

if(!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['telephone']) && !empty($_POST['nif']) && !empty($_POST['email'])){
    $sql = "INSERT INTO teachers (name,surname,telephone,nif,email) VALUES (:name,:surname,:telephone,:nif,:email); ";
    $stmt = $connection->prepare($sql);
    $stmt->bindParam(':name',$_POST['name']);
    $stmt->bindParam(':surname',$_POST['surname']);
    $stmt->bindParam(':telephone',$_POST['telephone']);
    $stmt->bindParam(':nif',$_POST['nif']);
    $stmt->bindParam(':email',$_POST['email']);

    header("location:tablaprofesores.php");

    if ($stmt->execute()) {
        $message = "Profesor creado correctamente";
    } else {
        $message = "Profesor no creada";
    }

}

?>


<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <title> Alumnos </title>
        <meta charset=”utf-8″>
    </head>

    <body class="body">

        <div id="wrapper">
            <div id="contenedor">
                <div id="contenido">
                    <div id="">
                        <div class="menu">
                            <a href="index.php" ><button class="button">Inicio</button></a>
                            <a href="asignaturas.php" ><button class="button">Asignaturas</button></a>
                            <a href="clases.php" ><button class="button">Clases</button></a>
                            <a href="alumnos.php" ><button class="button">Alumnos</button></a>
                            <a href="matriculas.php" ><button class="button">Matrículas</button></a>
                            <a href="profesores.php" ><button id="active" class="button">Profesores</button></a>
                        </div>
                    </div>

                    <div class="" id="">
                        <div class="titulo">
                            <a href="profesores.php" ><button id="subactive" class="subbutton">Crear Profesor</button></a>
                            <a href="tablaprofesores.php" ><button class="subbutton">Administrar Profesores</button></a>
                        </div>
                    </div>

                    <div class="contenido2" id="seccion2">
                        <h1>Crear Profesor</h1>
                        <form class="form" action="profesores.php" method="post">
                            <label>Nombre:</label>
                            <input type="text" name="name" placeholder="Introduce el nombre del profesor">
                            <label>Apellido:</label>
                            <input type="text" name="surname" placeholder="Introduce el apellido">
                            </br> <label>Telefono:</label>
                            <input type="text" name="telephone" placeholder="Introduce el teléfono">
                            <label>NIF:</label>
                            <input type="text" name="nif" placeholder="Introduce el NIF">
                            </br><label>Email:</label>
                            <input type="text" name="email" placeholder="Introduce el email">
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

