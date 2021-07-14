<?php
/**
 * Created by PhpStorm.
 * User: Jonatan Moncada
 * Date: 29/7/2019
 * Time: 20:43
 */
include '../conexion/conexion.php';

$nombre_completo=$_REQUEST['nombre_completo'];
$identidad=$_REQUEST['identidad'];
$sexo=$_REQUEST['sexo'];
$ciudad=$_REQUEST['ciudad'];
$edad=$_REQUEST['edad'];
$correo=$_REQUEST['correo'];
$codigo_curso=$_REQUEST['codigo_curso'];
$fecha_registro=$_REQUEST['fecha'];
$id_alumno=$_REQUEST['id_alumno'];

$sqlModificar="update alumno set fecha_registro='$fecha_registro',edad='$edad',ciudad='$ciudad',sexo='$sexo',identidad='$nombre_completo',nombre_completo='$nombre_completo', correo='$correo',codigo_curso='$codigo_curso' WHERE id_alumno='$id_alumno'";
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
