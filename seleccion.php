<?php

require 'database.php';

session_start();


?>

<html>
<head>
    <meta charset="utf-8">
    <title>SELECCIONA TU CLASE, CURSO Y ASIGNATURAS</title>
    <link href="https://fonts.googleapis.com/css?family=Numans">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<?php require 'partials/header.php'?>

<?php if (!empty($message)): ?>
    <p><?= $message ?></p>
<?php endif; ?>

<h1>CLASES</h1>

<button name="1">Clase 1</button>
<button name="2">Clase 2</button>
<button name="3">Clase 3</button>



<h2>CURSO</h2>
<h3>ASIGNATURAS</h3>

</form>
</body>

</html>
