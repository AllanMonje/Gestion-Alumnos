<?php
/**
 * Created by PhpStorm.
 * User: Jonatan Moncada
 * Date: 3/8/2019
 * Time: 08:33
 */

include'../conexion/conexion.php';

$codigo_curso=$_REQUEST['codigo_curso'];

$sqlEliminar="delete from cursos where codigo_curso=$codigo_curso";

$resultado=mysqli_query($conexion,$sqlEliminar);

if($resultado)
{
    echo"<h1>El registro se ha Eliminado</h1>";
}
else
{
    echo"<h1>El registro No se ha Eliminado</h1>";
}

echo"<a href='index.php'>Regresar</a>";

