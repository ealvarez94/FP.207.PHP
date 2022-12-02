<?php

session_start();

$_SESSION["username"] = "username";


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
                    <a href="schedule.php" ><button id="active" class="button">Horario</button></a>
                    <a href="panel_usuario.php" ><button class="button">Editar Perfil</button></a>
                    <a href="index.php" ><button class="button">Logout</button></a>
                    </div>
            </div>

            <div class="" id="">
                <div class="titulo">
                    <a href="" ><button id="subactive" class="subbutton">Semana</button></a>
                    <a href="" ><button class="subbutton">Mes</button></a>
                    <a href="" ><button class="subbutton">Año</button></a>
                </div>
            </div>

            <div class="contenido2" id="seccion2">
                <h1>Horario</h1>
                <table style="width: 1060px;">
                    <caption id=”title”></caption>
                    <thead>
                    <tr>
                        <th scope=”col”></th>
                        <th scope=”col”>LUNES</th>
                        <th scope=”col”>MARTES</th>
                        <th scope=”col”>MIERCOLES</th>
                        <th scope=”col”>JUEVES</th>
                        <th scope=”col”>VIERNES</th>
                    </tr>
                    </thead>
                    <tfoot>
                    </tfoot>
                    <tbody>
                    <tr>
                        <th scope=”row”>Hora 1</th>
                        <td class=”” rowspan=”2″></td>
                        <td class=”” rowspan=”2″></td>
                        <td class=”” rowspan=”2″></td>
                        <td class=”” rowspan=”2″></td>
                        <td class=””></td>
                    </tr>
                    <tr>
                        <th scope=”row”>Hora 2</th>
                        <td class=”” rowspan=”2″></td>
                        <td class=”” rowspan=”2″></td>
                        <td class=”” rowspan=”2″></td>
                        <td class=”” rowspan=”2″></td>
                        <td class=””></td>
                    </tr>
                    <tr>
                        <th scope=”row”>Hora 3</th>
                        <td class=”” rowspan=”2″></td>
                        <td class=”” rowspan=”2″></td>
                        <td class=”” rowspan=”2″></td>
                        <td class=”” rowspan=”2″></td>
                        <td class=””></td>
                    </tr>
                    <tr>
                        <th scope=”row”>Hora 4</th>
                        <td class=”” rowspan=”2″></td>
                        <td class=”” rowspan=”2″></td>
                        <td class=”” rowspan=”2″></td>
                        <td class=”” rowspan=”2″></td>
                        <td class=””></td>
                    </tr>
                    <tr>
                        <th scope=”row”>Hora 5</th>
                        <td class=”” rowspan=”2″></td>
                        <td class=”” rowspan=”2″></td>
                        <td class=”” rowspan=”2″></td>
                        <td class=”” rowspan=”2″></td>
                        <td class=””></td>
                    </tr>
                    <tr>
                        <th scope=”row”>Hora 6</th>
                        <td class=”” rowspan=”2″></td>
                        <td class=”” rowspan=”2″></td>
                        <td class=”” rowspan=”2″></td>
                        <td class=”” rowspan=”2″></td>
                        <td class=””></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</body>
</html>