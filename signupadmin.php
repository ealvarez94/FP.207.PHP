<?php

require 'database.php';

$message = '';

session_start();

    if(!empty($_POST['username']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])){
	$sql = "INSERT INTO users_admin (username,name,email,password) VALUES (:username, :name, :email, :password); ";
	$stmt = $connection->prepare($sql);
	$stmt->bindParam(':username',$_POST['username']);
	$stmt->bindParam(':name',$_POST['name']);
	$stmt->bindParam(':email',$_POST['email']);
	$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
	$stmt->bindParam(':password',$_POST['password']);

    header("location:loginadmin.php");

	if ($stmt->execute()) {
		$message = "Usuario creado correctamente";
	} else {
		$message = "Usuario no creado";
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
                        <a href="login.php" ><button class="button">Login</button></a>
                        <a href="signup.php" ><button id="active" class="button">Signup</button></a>
                    </div>
                </div>

                <div class="" id="">
                    <div class="titulo">
                        <a href="signup.php" ><button class="subbutton">Signup Alumno</button></a>
                        <a href="signupadmin.php" ><button id="subactive" class="subbutton">Signup Admin</button></a>
                    </div>
                </div>

                <div class="contenido2" id="seccion2">
                    <h1>Signup Admin</h1>
                    <form class="form" action="signupadmin.php" method="post">
                        <label>Usuario:</label>
                        <input type="text" name="username" placeholder="Introduce tu nombre de usuario">
                        <label>Nombre:</label>
                        <input type="text" name="name" placeholder="Introduce tu nombre">
                        </br><label>Email:</label>
                        <input type="text" name="email" placeholder="Introduce tu Email">
                        <label>Password:</label>
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
