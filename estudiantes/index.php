<?php
/**
 * Created by PhpStorm.
 * User: Jonatan Moncada
 * Date: 24/7/2019
 * Time: 19:42
 */

require '../include/header.php';

if(!empty($_REQUEST['buscar']))
{
    $buscar=$_REQUEST['buscar'];
    $query="select * from alumno where nombre_completo like'%$buscar%'";
    $registros=mysqli_query($conexion,$query);
}
else
{
    $query="select * from alumno";
    $registros=mysqli_query($conexion,$query);
}
?>

<button><a href="../estudiantes/form_ingresar.php">Ingresar</a></button>
<div align="center" >
    <form action="index.php" method="get">
        <div class="form-group">
            <label>Buscar:</label>
            <input type="text"  name="buscar">
            <button class="" type="submit" >Buscar</button>
        </div>
    </form>
</div>

    <table align="center"  class="">
        <thead>
        <tr>
            <td rowspan="2">Codigo Alumno</td>
            <td rowspan="2">Nombre Completo</td>
            <td rowspan="2">Correo</td>
            <td rowspan="2">Clase</td>
            <td rowspan="2">Sexo</td>
            <td rowspan="2">Edad</td>
            <td rowspan="2">Ciudad</td>
            <td rowspan="2">Fecha de registro</td>
            <td colspan="2" style="text-align: center">Acciones</td>
        </tr>
        <tr>
            <td >Modificar</td>
            <td>Eliminar</td>
        </tr>
        </thead>
        <tbody>
        <?php
        while($row=mysqli_fetch_array($registros))
        {
            ?>
            <tr>
                <td><?php echo $row['id_alumno'];?></td>
                <td><?php echo $row['nombre_completo'];?></td>
                <td><?php echo $row['correo'];?></td>
                <td><?php
                    switch ($row['codigo_curso'])
                    {
                        case 1:echo"PHP";
                            break;
                        case 2:echo"ASP";
                            break;
                        case 3:echo"Java Script";
                            break;
                    }
                    ?>
                </td>
                <td><?php echo $row['sexo'];?></td>
                <td><?php echo $row['edad'];?></td>
                <td><?php echo $row['ciudad'];?></td>
                <td><?php echo $row['fecha_registro'];?></td>
                <td>
                    <a title="Modificar" href="form_modificar.php?id_alumno=<?php echo $row['id_alumno']; ?>">
                        <img src="../img/modificar.png" width="30" height="30">
                    </a>
                </td>
                <td>
                    <a title="Eliminar" href="eliminar.php?id_alumno=<?php echo $row['id_alumno']; ?>">
                        <img src="../img/eliminar.png" width="30" height="30">
                    </a>
                </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
<?php
include '../include/footer.php';
?>