<?php

require  'database.php';

session_start();
//echo $_SESSION['username'];

if(!empty($_POST['email']) && !empty($_POST['password'])){
    $cons = $connection->prepare('SELECT username,email,password FROM students WHERE email=:email');
    $cons->bindParam(':email', $_POST['email']);
    $cons->execute();
    $results = $cons->fetch(PDO::FETCH_ASSOC);
    $message='';


    if(count($results) > 0 && ($_POST['password'] == $results['password'])){
        $_SESSION['username'] = $results['username'];
        header('Location: /blog');
    } else {
        $message = 'Las credenciales no coinciden';
    }

    header("Location: http://localhost/blog/schedule.php");
    die();

}

?>




<html>
	<head>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <title> Alumnos </title>
        <meta charset=”utf-8″>
	</head>
    <body  class="body">

    <div id="wrapper">
        <div id="contenedor">
            <div id="contenido">
                <div id="">
                    <div class="menu">
                        <a href="index.php" ><button class="button">Inicio</button></a>
                        <a href="login.php" ><button id="active" class="button">Login</button></a>
                        <a href="signup.php" ><button class="button">Signup</button></a>
                    </div>
                </div>

                <div class="" id="">
                    <div class="titulo">
                        <a href="login.php" ><button id="subactive" class="subbutton">Login Alumnos</button></a>
                        <a href="loginadmin.php" ><button class="subbutton">Login Admin</button></a>
                    </div>
                </div>

                <div class="contenido2" id="seccion2">
                    <h1>Login Alumno</h1>
                    <?php if (!empty($message)): ?>
                        <p><?= $message ?></p>
                    <?php endif; ?>
                    <form class="form" action="login.php" method="post">
                        <label>Usuario:</label>
                        <input type="text" name="email" placeholder="Introduce tu Email">
                        <br><label>Contraseña:</label>
                        <input type="password" name="password" placeholder="Introduce tu contraseña">
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
