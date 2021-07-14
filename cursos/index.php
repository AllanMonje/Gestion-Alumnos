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
    $query="select * from cursos where nombre_curso like'%$buscar%'";
    $registros=mysqli_query($conexion,$query);
}
else
{
    $query="select * from cursos";
    $registros=mysqli_query($conexion,$query);
}
?>

<button><a href="../cursos/form_ingresar.php">Ingresar</a></button>
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
            <td rowspan="2">Codigo del curso</td>
            <td rowspan="2">Nombre del curso</td>
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
                <td><?php echo $row['codigo_curso'];?></td>
                <td><?php echo $row['nombre_curso'];?></td>

                <td>
                    <a title="Modificar" href="form_modificar.php?codigo_curso=<?php echo $row['codigo_curso']; ?>">
                        <img src="../img/modificar.png" width="30" height="30">
                    </a>
                </td>
                <td>
                    <a title="Eliminar" href="eliminar.php?codigo_curso=<?php echo $row['codigo_curso']; ?>">
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