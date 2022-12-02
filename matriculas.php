<?php

require 'database.php';

$username = 'root';
$password = '123456';
$database = 'producto2';
$connection = null;

$connection = new PDO('mysql:host=localhost;dbname=producto2;',$username,$password);

session_start();

if(!empty($_POST['id_teacher']) && !empty($_POST['id_course']) && !empty($_POST['id_schedule']) && !empty($_POST['name']) && !empty($_POST['color'])){
    $sql = "INSERT INTO class (id_class,id_teacher,id_course,id_schedule,name,color) VALUES (:id_class,:id_teacher,:id_course,:id_schedule,:name,:color); ";
    $stmt = $connection->prepare($sql);
    $stmt->bindParam(':id_class',$_POST['id_class']);
    $stmt->bindParam(':id_teacher',$_POST['id_teacher']);
    $stmt->bindParam(':id_course',$_POST['id_course']);
    $stmt->bindParam(':id_schedule',$_POST['id_schedule']);
    $stmt->bindParam(':name',$_POST['name']);
    $stmt->bindParam(':color',$_POST['color']);


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
                    <a href="asignaturas.php" ><button class="button">Asignaturas</button></a>
                    <a href="clases.php" ><button class="button">Clases</button></a>
                    <a href="alumnos.php" ><button class="button">Alumnos</button></a>
                    <a href="matriculas.php" ><button id="active" class="button">Matrículas</button></a>
                    <a href="profesores.php" ><button class="button">Profesores</button></a>
                </div>
            </div>

            <div class="" id="">
                <div class="titulo">
                    <a href="asignaturas.php" ><button id="subactive" class="subbutton">Crear Matrícula</button></a>
                    <a href="" ><button class="subbutton">Administrar Matrículas</button></a>
                </div>
            </div>

            <div class="contenido2" id="seccion2">
                <h1>Crear Matrícula</h1>
                <form action="asignaturas.php" method="post">
                    <label>ID Alumno:</label>
                    <select style="width: 250px;
                            font-size: 14px;
                            padding: 10px;
                            margin: 5px 50px 10px 5px;
                            background-color: #e5e5e5;
                            border-radius: 2px;
                            border: 0px;"><option value="0">Elige un Profesor</option>
                    </select>
                    <label>ID Asignatura:</label>
                    <select style="width: 250px;
                            font-size: 14px;
                            padding: 10px;
                            margin: 5px 50px 10px 5px;
                            background-color: #e5e5e5;
                            border-radius: 2px;
                            border: 0px;"><option value="0">Elige una Asignatura</option>
                    </select>
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