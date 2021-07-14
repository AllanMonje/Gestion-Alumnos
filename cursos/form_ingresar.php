<?php
/**
 * Created by PhpStorm.
 * User: Jonatan Moncada
 * Date: 24/7/2019
 * Time: 20:29
 */
include'../conexion/conexion.php'
?>
<html>
<head>
    <title></title>
</head>
<body>
<form action="guardar.php" method="post">
    <label>Nombre del curso</label>
    <p></p>
    <input type="text" name="nombre_curso">
    <p></p>
    <button type="submit" name="guardar">Guardar</button>
    <p></p>
    <button><a href="index.php">Regresar</a></button>
</form>
</body>
</html>

