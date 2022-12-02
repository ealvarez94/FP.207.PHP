<?php

require 'database.php';

$message = '';
$data = date('Y-m-d');
session_start();




if(!empty($_POST['username']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['data'])){
    $sql = "INSERT INTO students (username,name,email,password,data) VALUES (:username, :name, :email, :password, :data) ";
    $stmt = $connection->prepare($sql);
    $stmt->bindParam(':username',$_POST['username']);
    $stmt->bindParam(':name',$_POST['name']);
    $stmt->bindParam(':email',$_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password',$_POST['password']);
    $stmt->bindParam(':data',$_POST['data']);


    header("location:tablaalumnos.php");

    if ($stmt->execute()) {
        $message = "Alumno creado correctamente";
    } else {
        $message = "Alumno no cread0";
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
                        <a href="alumnos.php" ><button id="active" class="button">Alumnos</button></a>
                        <a href="matriculas.php" ><button class="button">Matrículas</button></a>
                        <a href="profesores.php" ><button class="button">Profesores</button></a>
                    </div>
                </div>

                <div class="" id="">
                    <div class="titulo">
                        <a href="alumnos.php" ><button id="subactive" class="subbutton">Crear Alumno</button></a>
                        <a href="tablaalumnos.php" ><button class="subbutton">Administrar Alumnos</button></a>
                    </div>
                </div>

                <div class="contenido2" id="seccion2">
                    <h1>Crear Alumno</h1>
                        <form class="form" action="alumnos.php" method="post">
                            <label>Usuario:</label>
                            <input type="text" name="username" placeholder="Introduce tu nombre de usuario">
                            <label>Nombre:</label>
                            <input type="text" name="name" placeholder="Introduce tu nombre">
                            </br><label>Email:</label>
                            <input type="text" name="email" placeholder="Introduce tu Email">
                            <label>Password:</label>
                            <input type="password" name="password" placeholder="Introduce tu contraseña">
                            <input type="hidden" name="data" value="<?php echo $data ?>">
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
