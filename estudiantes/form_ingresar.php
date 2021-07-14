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
    <label>Nombre Completo</label>
    <p></p>
    <input type="text" name="nombre_completo">
    <p></p>
    <label>Identidad</label>
    <p></p>
    <input type="text" name="identidad">
    <p></p>
    <label>Correo</label>
    <p></p>
    <input type="email" name="correo">
    <p></p>
    <label>Clase</label>
    <p></p>
    <select name="codigo_curso">
        <?php

        $sql="select * from cursos";
        $registro=mysqli_query($conexion,$sql);
        while($reg=mysqli_fetch_array($registro))
        {
            echo "<option value=\"$reg[codigo_curso]\">$reg[nombre_curso]</option>";
        }
        ?>
    </select>
    <p></p>
    <label>Genero</label>
    <p></p>
    <select name="sexo">
        <option value="M">Masculino</option>
        <option value="F">Femenino</option>
    </select>
    <p></p>
    <label>Edad</label>
    <p></p>
    <input type="number" name="edad">
    <p></p>
    <label>Ciudad</label>
    <p></p>
    <input type="text" name="ciudad">
    <p></p>
    <label>Fecha</label>
    <p></p>
    <input type="date" name="fecha">
    <p></p>
    <button type="submit" name="guardar">Guardar</button>
    <p></p>
    <button><a href="index.php">Regresar</a></button>
</form>
</body>
</html>

