<?php
/**
 * Created by PhpStorm.
 * User: Jonatan Moncada
 * Date: 29/7/2019
 * Time: 20:43
 */
include '../conexion/conexion.php';

$codigo_curso=$_REQUEST['codigo_curso'];
$nombre_curso=$_REQUEST['nombre_curso'];

$sqlModificar="update cursos set nombre_curso='$nombre_curso' WHERE codigo_curso = '$codigo_curso'";
$resultado=mysqli_query($conexion,$sqlModificar);

if($resultado)
{
    echo"<h1>Registro Modificado</h1>";
}
else
{
    echo"<h1>Problemas al Modificar</h1>";
}

?>
<a href="index.php">Regresar</a>
