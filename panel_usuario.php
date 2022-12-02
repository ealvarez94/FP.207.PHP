
<?php

session_start();

$_SESSION["username"] = "username";

$message = '';


if(!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['name']) && !empty($_POST['username'])){
    $sql = "INSERT INTO students (username,name,email,password) VALUES (:username, :name, :email, :password); ";
    $stmt = $connection->prepare($sql);
    $stmt->bindParam(':username',$_POST['username']);
    $stmt->bindParam(':name',$_POST['name']);
    $stmt->bindParam(':email',$_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password',$_POST['password']);

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
                    <div class="menu">
                        <a href="index.php" ><button class="button">Inicio</button></a>
                        <a href="schedule.php" ><button class="button">Horario</button></a>
                        <a href="panel_usuario.php.php" ><button id="active" class="button">Editar Perfil</button></a>
                        <a href="index.php" ><button class="button">Logout</button></a>
                    </div>
                </div>
            </div>

            <div class="" id="">
                <div class="titulo">

                </div>
            </div>

            <div class="contenido2" id="seccion2">
                <h1>Editar usuario</h1>
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