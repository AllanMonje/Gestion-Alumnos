<?php
/**
 * Created by PhpStorm.
 * User: Jonatan Moncada
 * Date: 24/7/2019
 * Time: 20:40
 */
include "../conexion/conexion.php";

$nombre_curso=$_REQUEST['nombre_curso'];

$sql="insert into cursos(nombre_curso) VALUES('$nombre_curso')";

$resultado=mysqli_query($conexion,$sql)or die("Problemas en el select".mysqli_error($conexion));

if($resultado)
{
    echo'<h2>Registro guardado exitosamente</h2>';
}
else
{
    echo'<h2>Problemas al guardar</h2>';
}

?>
<button><a href="form_ingresar.php">Regresar</a></button>


