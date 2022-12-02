<?php

session_start();
include 'database.php';

$username = 'root';
$password = '123456';
$database = 'producto2';
$connection = new PDO('mysql:host=localhost;dbname=producto2;',$username,$password);
$id_teacher = $_GET['id_teacher'];
$m = "SELECT * FROM teachers WHERE id_teacher = '$id_teacher'";
$modificar = $connection->query($m);
$dato = $modificar->fetch();
if(isset($_POST['editar'])){
    $id_teacher = $_POST['id'];
    $name = $_POST['mName'];
    $surname = $_POST['mSurname'];
    $telephone = $_POST['mTelephone'];
    $nif = $_POST['mNif'];
    $email = $_POST['mEmail'];

    $actualiza = "UPDATE teachers SET name = '$name', surname = '$surname', telephone = '$telephone', nif = '$nif', email = '$email' WHERE id_teacher = '$id_teacher'";
    $actualizar = $connection->query($actualiza);
    header("location:tablaprofesores.php");
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
                            <a href="asignaturas.php" ><button class="button">Asignaturas</button></a>
                            <a href="clases.php" ><button class="button">Clases</button></a>
                            <a href="alumnos.php" ><button class="button">Alumnos</button></a>
                            <a href="matriculas.php" ><button class="button">Matrículas</button></a>
                            <a href="profesores.php" ><button id="active" class="button">Profesores</button></a>
                        </div>
                    </div>
                    <div class="" id="">
                        <div class="titulo">
                            <a href="profesores.php" ><button id="" class="subbutton">Crear Profesor</button></a>
                            <a href="tablaprofesores.php" ><button id="subactive" class="subbutton">Administrar Profesores</button></a>
                        </div>
                    </div>
                    <div class="contenido2" id="seccion2">
                    <h1>Editar Profesor</h1>
                        <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                            <input type="hidden" name="id" value="<?php echo $dato['id_teacher']; ?>" >
                            <label>Nombre:</label>
                            <input type="text"  name="mName" value="<?php echo $dato['name']; ?>" placeholder="Nombre" required>
                            <label>Apellido:</label>
                            <input type="text"  name="mSurname" value="<?php echo $dato['surname']; ?>" placeholder="Apellido" required>
                            <br><label>Telefono:</label>
                            <input type="text"  name="mTelephone" value="<?php echo $dato['telephone']; ?>" placeholder="Telefono" required>
                            <label>NIF:</label>
                            <input type="text"  name="mNif" value="<?php echo $dato['nif']; ?>" placeholder="NIF" required>
                            <br><label>Email:</label>
                            <input type="text"  name="mEmail" value="<?php echo $dato['email']; ?>" placeholder="Email" required>
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
