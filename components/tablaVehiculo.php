<table class="custom-table-1">
    <thead class="custom-th-1">
    <tr>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Placas</th>
    </tr>
    </thead>
    <tbody class="custom-table-body-1">


    <?php
    include ('../partials/conexion.php');
    include ('../partials/sesion.php');

    $id_usuario= $_SESSION['id_usuario'];
    $sql="SELECT marca,modelo,placa FROM vehiculos WHERE id_usuario = '$id_usuario'";
    $result=mysqli_query($conn, $sql);
    while($ver=mysqli_fetch_row($result)){
    $datos=$ver[0]."||".$ver[1]."||".$ver[2];


    ?>


    <tr>
        <td><?php   echo $ver[0]?></td>
        <td><?php   echo $ver[1]?></td>
        <td><?php   echo $ver[2]?></td>
    </tr>


    <?php
    }
    ?>
    </tbody>
</table>