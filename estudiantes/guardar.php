<?php
/**
 * Created by PhpStorm.
 * User: Jonatan Moncada
 * Date: 24/7/2019
 * Time: 20:40
 */
include "../conexion/conexion.php";

$nombre_completo=$_POST['nombre_completo'];
$identidad=$_POST['identidad'];
$sexo=$_POST['sexo'];
$ciudad=$_POST['ciudad'];
$edad=$_POST['edad'];
$correo=$_POST['correo'];
$codigo_curso=$_POST['codigo_curso'];
$fecha_registro=$_POST['fecha'];

if(empty($_POST['nombre_completo']) or empty($_POST['identidad']) or empty($_POST['edad']) or empty($_POST['correo']) or empty($_POST['fecha'])){
    echo "Campos vacios!";
}else {

    $query = "select * from alumno where identidad='$identidad'";
    $registros = mysqli_query($conexion, $query);
    $row = mysqli_fetch_array($registros);
    $validadoridentidad = $row['identidad'];
    if ($validadoridentidad == $identidad) {
        echo "El numero de identidad ingresado ya existe";
    } else {
        $sql = "insert into alumno(identidad,nombre_completo,correo,codigo_curso,sexo,edad,ciudad,fecha_registro) VALUES('$identidad','$nombre_completo','$correo',$codigo_curso,'$sexo','$edad','$ciudad','$fecha_registro')";

        $resultado = mysqli_query($conexion, $sql) or die("Problemas en el select" . mysqli_error($conexion));

        if ($resultado) {
            echo '<h2>Registro guardado exitosamente</h2>';
        } else {
            echo '<h2>Problemas al guardar</h2>';
        }
    }
}
?>
<br>
<button><a href="form_ingresar.php">Regresar</a></button>


