<?php
    include ('../partials/conexion.php');
    @session_start();
    $id_usuario= $_SESSION['id_usuario'];
    $sql="SELECT telefono,email,usuario FROM usuarios WHERE id_usuario = '$id_usuario'";
    $result=mysqli_query($conn, $sql);
    while($ver=mysqli_fetch_row($result)){
    $datos=$ver[0]."||".$ver[1]."||".$ver[2];
    }
    ?>