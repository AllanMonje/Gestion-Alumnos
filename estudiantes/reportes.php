<?php
/**
 * Created by PhpStorm.
 * User: Jonatan Moncada
 * Date: 29/7/2019
 * Time: 19:13
 */

include'../conexion/conexion.php';


$sql="select count(*) as Hombres from alumno where sexo='M'";
$sql2="select count(*) as Mujeres from alumno where sexo='F'";
$sql3="select count(*) as total from alumno";

$sql4="select count(*) as ceiba from alumno where ciudad='La Ceiba'";
$sql5="select count(*) as sps from alumno where ciudad='San Pedro Sula'";
$sql6="select count(*) as tegus from alumno where ciudad='Tegucigalpa'";

$sql7="select count(*) as edad1 from alumno where edad between 18 and 22";
$sql8="select count(*) as edad2 from alumno where edad between 23 and 26";
$sql9="select count(*) as edad3 from alumno where edad between 27 and 32";
$sql10="select count(*) as edad4 from alumno where edad >= 33";

$sql11="select count(*) as php from alumno where codigo_curso=1";
$sql12="select count(*) as asp from alumno where codigo_curso=2";
$sql13="select count(*) as js from alumno where codigo_curso=3";

$registro=mysqli_query($conexion,$sql);
$fila2 = mysqli_fetch_assoc($registro);
$registro2=mysqli_query($conexion,$sql2);
$fila = mysqli_fetch_assoc($registro2);
$registro3=mysqli_query($conexion,$sql3);
$total = mysqli_fetch_assoc($registro3);

$registro4=mysqli_query($conexion,$sql4);
$laceiba = mysqli_fetch_assoc($registro4);

$registro5=mysqli_query($conexion,$sql5);
$sps = mysqli_fetch_assoc($registro5);

$registro6=mysqli_query($conexion,$sql6);
$tegus = mysqli_fetch_assoc($registro6);

$registro7=mysqli_query($conexion,$sql7);
$edad1 = mysqli_fetch_assoc($registro7);
$registro8=mysqli_query($conexion,$sql8);
$edad2 = mysqli_fetch_assoc($registro8);
$registro9=mysqli_query($conexion,$sql9);
$edad3 = mysqli_fetch_assoc($registro9);
$registro10=mysqli_query($conexion,$sql10);
$edad4 = mysqli_fetch_assoc($registro10);

$registro11=mysqli_query($conexion,$sql11);
$php = mysqli_fetch_assoc($registro11);

$registro12=mysqli_query($conexion,$sql12);
$asp = mysqli_fetch_assoc($registro12);

$registro13=mysqli_query($conexion,$sql13);
$js = mysqli_fetch_assoc($registro13);
?>
<html>
<head>
    <title>Reportes</title>
</head>
<body>
    <div>
        <table align="center"  class="" border="1">
            <thead>
            <tr>
                <td colspan="2" style="text-align: center">Total registros</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><?php echo $total['total']; ?></td>
            </tr>
            </tbody>

        </table>
    </div>
    <div>
        <table align="center"  class="" border="1">
            <thead>

            <tr>
                <td >Hombres</td>
                <td>Mujeres</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><?php echo $fila2['Hombres'];?></td>
                <td><?php echo $fila['Mujeres']; ?></td>
            </tr>
            </tbody>
        </table>
    </div>

    <div>
        <table align="center"  class="" border="1">
            <thead>

            <tr>
                <td >Ubicacion</td>
                <td>numero</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><?php echo "La Ceiba";?></td>
                <td><?php echo $laceiba['ceiba']; ?></td>
            </tr>
            <tr>
                <td><?php echo "San Pedro Sula";?></td>
                <td><?php echo $sps['sps']; ?></td>
            </tr>
            <tr>
                <td><?php echo "Tegucigalpa";?></td>
                <td><?php echo $tegus['tegus']; ?></td>
            </tr>
            <tr>
                <td><?php echo "Total";?></td>
                <td><?php echo $total['total']; ?></td>
            </tr>
            </tbody>
        </table>
    </div>

    <div>
        <table align="center"  class="" border="1">
            <thead>

            <tr>
                <td >Edades</td>
                <td>numero</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><?php echo "18 - 22";?></td>
                <td><?php echo $edad1['edad1']; ?></td>
            </tr>
            <tr>
                <td><?php echo "23 - 26";?></td>
                <td><?php echo $edad2['edad2']; ?></td>
            </tr>
            <tr>
                <td><?php echo "27 - 32";?></td>
                <td><?php echo $edad3['edad3']; ?></td>
            </tr>
            <tr>
                <td><?php echo "33 - +";?></td>
                <td><?php echo $edad4['edad4']; ?></td>
            </tr>
            <tr>
                <td><?php echo "Total";?></td>
                <td><?php echo $total['total']; ?></td>
            </tr>
            </tbody>
        </table>
    </div>

    <div>
        <table align="center"  class="" border="1">
            <thead>

            <tr>
                <td >Cursos</td>
                <td>Numero</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><?php echo "PHP";?></td>
                <td><?php echo $php['php']; ?></td>
            </tr>
            <tr>
                <td><?php echo "ASP";?></td>
                <td><?php echo $asp['asp']; ?></td>
            </tr>
            <tr>
                <td><?php echo "JS";?></td>
                <td><?php echo $js['js']; ?></td>
            </tr>
            <tr>
                <td><?php echo "Total";?></td>
                <td><?php echo $total['total']; ?></td>
            </tr>
            </tbody>
        </table>
    </div>
<?php
include '../include/footer.php';
?>