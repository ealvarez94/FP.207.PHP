<?php
include 'database.php';

$message = '';

session_start();

$consulta = "SELECT * FROM students";
$guardar = $connection->query($consulta);
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
                <div class="contenido3" id="seccion2">
                <h1>Tabla de Alumnos</h1>
                    <table  class="table" >
                        <thead>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Email</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Teléfono</th>
                        <th>NIF</th>
                        <th>Fecha de registro</th>
                        <th>Opciones</th>
                        </thead>
                        <tbody>
                        <?php while($row = $guardar->fetch(PDO::FETCH_ASSOC)){?>
                            <tr class="2">
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['username']; ?></td>
                                <td><?php echo $row['password']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['surname']; ?></td>
                                <td><?php echo $row['telephone']; ?></td>
                                <td><?php echo $row['nif']; ?></td>
                                <td><?php echo $row['data']; ?></td>
                                <td><a href="editaralumnos.php?id=<?php echo $row['id'];?>">Editar</a> - <a href="eliminaralumnos.php?id=<?php echo $row['id'];?>">Borrar</a></td>

                            </tr>
                        <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
