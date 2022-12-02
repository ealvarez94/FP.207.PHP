<?php
include 'database.php';

$message = '';

session_start();

$consulta = "SELECT * FROM courses";
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
                        <a href="asignaturas.php" ><button id="active" class="button">Asignaturas</button></a>
                        <a href="clases.php" ><button class="button">Clases</button></a>
                        <a href="alumnos.php" ><button class="button">Alumnos</button></a>
                        <a href="matriculas.php" ><button class="button">Matrículas</button></a>
                        <a href="profesores.php" ><button class="button">Profesores</button></a>
                    </div>
                </div>
                <div class="" id="">
                    <div class="titulo">
                        <a href="asignaturas.php" ><button id="" class="subbutton">Crear Asignatura</button></a>
                        <a href="tablaasignaturas.php" ><button id="subactive" class="subbutton">Administrar Asignaturas</button></a>
                    </div>
                </div>
                <div class="contenido2" id="seccion2">
            <h1>Tabla de Asignaturas</h1>
            <div>
                <table  class="table" >
                    <thead>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Fecha de inicio</th>
                    <th>Fecha de fin</th>
                    <th>Activa</th>
                    <th>Opciones</th>
                    </thead>
                    <tbody>
                    <?php while($row = $guardar->fetch(PDO::FETCH_ASSOC)){?>
                        <tr>
                            <td><?php echo $row['id_course']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['description']; ?></td>
                            <td><?php echo $row['date_start']; ?></td>
                            <td><?php echo $row['date_end']; ?></td>
                            <td><?php echo $row['active']; ?></td>
                            <td><a href="editarasignaturas.php?id_course=<?php echo $row['id_course'];?>">Editar</a> - <a href="eliminarasignaturas.php?id_course=<?php echo $row['id_course'];?>">Borrar</a></td>

                        </tr>
                    <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </body>
</html>
