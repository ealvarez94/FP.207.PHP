<?php

session_start();
include 'database.php';

$username = 'root';
$password = '123456';
$database = 'producto2';
$connection = new PDO('mysql:host=localhost;dbname=producto2;',$username,$password);
$id = $_GET['id'];
$m = "SELECT * FROM students WHERE id = '$id'";
$modificar = $connection->query($m);
$dato = $modificar->fetch();
if(isset($_POST['editar'])){
    $id = $_POST['id'];
    $username = $_POST['mUsername'];
    $password = $_POST['mPassword'];
    $email = $_POST['mEmail'];
    $name = $_POST['mName'];
    $surname = $_POST['mSurname'];
    $telephone = $_POST['mTelephone'];
    $nif = $_POST['mNif'];
    $data = $_POST['mFecharegistro'];

    $actualiza = "UPDATE students SET username = '$username', password = '$password', email = '$email', name = '$name', surname = '$surname', telephone = '$telephone', nif = '$nif', data = '$data' WHERE id = '$id'";
    $actualizar = $connection->query($actualiza);
    header("location:tablaalumnos.php");
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
                        <a href="alumnos.php" ><button id="active" class="button">Alumnos</button></a>
                        <a href="matriculas.php" ><button class="button">Matrículas</button></a>
                        <a href="profesores.php" ><button class="button">Profesores</button></a>
                    </div>
                </div>
                <div class="" id="">
                    <div class="titulo">
                        <a href="alumnos.php" ><button id="" class="subbutton">Crear Alumno</button></a>
                        <a href="tablaalumnos.php" ><button id="subactive" class="subbutton">Administrar Alumnos</button></a>
                    </div>
                </div>
                <div class="contenido2" id="seccion2">
                <h1>Editar Alumno</h1>
                <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div>
                    <input type="hidden" name="id" value="<?php echo $dato['id']; ?>">
                    <label>Usuario:</label>
                    <input type="text"  name="mUsername" value="<?php echo $dato['username']; ?>" placeholder="Username" required>
                    <label>Password:</label>
                    <input type="text"  name="mPassword" value="<?php echo $dato['password']; ?>" placeholder="Password" required>
                    <br><label>Email:</label>
                    <input type="text"  name="mEmail" value="<?php echo $dato['email']; ?>" placeholder="Email" required>
                    <label>Nombre:</label>
                    <input type="text"  name="mName" value="<?php echo $dato['name']; ?>" placeholder="Nombre" required>
                    <br><label>Apellido:</label>
                    <input type="text"  name="mSurname" value="<?php echo $dato['surname']; ?>" placeholder="Apellido" required>
                    <label>Telefono:</label>
                    <input type="text"  name="mTelephone" value="<?php echo $dato['telephone']; ?>" placeholder="Telefono" required>
                    <br><label>NIF:</label>
                    <input type="text"  name="mNif" value="<?php echo $dato['nif']; ?>" placeholder="NIF" required>
                    <input type="hidden"  name="mFecharegistro" value="<?php echo $dato['data']; ?>">
                    <div class="enviar">
                        <br><input class="submit" type="submit" name="editar" value="Modificar">
                    </div>
                </div>
                </form>
            </div>
        </div>
    </body>

</html>
