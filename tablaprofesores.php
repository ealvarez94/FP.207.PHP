<?php
include 'database.php';

$message = '';

session_start();

$consulta = "SELECT * FROM teachers";
$guardar = $connection->query($consulta);

?>


<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <title> Tabla Asignaturas </title>
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
                    <h1>Tabla de Profesores</h1>
                    <table  class="table">
                        <thead>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Telefono</th>
                            <th>NIF</th>
                            <th>Email</th>
                            <th>Opciones</th>
                        </thead>
                        <tbody>
                            <?php while($row = $guardar->fetch(PDO::FETCH_ASSOC)){?>
                                <tr>
                                    <td><?php echo $row['id_teacher']; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['surname']; ?></td>
                                    <td><?php echo $row['telephone']; ?></td>
                                    <td><?php echo $row['nif']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><a href="editarprofesores.php?id_teacher=<?php echo $row['id_teacher'];?>">Editar</a> - <a href="eliminarprofesores.php?id_teacher=<?php echo $row['id_teacher'];?>">Borrar</a></td>
                                </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
