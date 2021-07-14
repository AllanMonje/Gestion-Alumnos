<?php
/**
 * Created by PhpStorm.
 * User: Jonatan Moncada
 * Date: 29/7/2019
 * Time: 19:13
 */

include'../conexion/conexion.php';

$codigo_curso=$_REQUEST['codigo_curso'];

$sql="select * from cursos where codigo_curso='$codigo_curso'";
$registro=mysqli_query($conexion,$sql);
$row=mysqli_fetch_array($registro);
?>
<html>
<head>
    <title>Modificar Curso</title>
</head>
<body>
<form action="modificar.php" method="post">
    <label>Nombre del curso</label>
    <p></p>
    <input type="text" name="nombre_curso" value="<?php echo $row['nombre_curso'] ?>">
    <p></p>
    <input type="hidden" name="codigo_curso" value="<?php echo $row['codigo_curso'] ?>">
    <p></p>
    <button type="submit" name="guardar">Modificar</button>
    <p></p>
    <button><a href="index.php">Regresar</a></button>
</form>
</body>
</html>
