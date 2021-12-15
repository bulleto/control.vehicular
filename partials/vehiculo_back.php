<?php


if(isset($_GET['id'])) {
    include_once 'conexion.php';   

    try {
        $usuario=$_SESSION['usuario'];

        //se realiza la consulta        

        //loguear el usuario
        $query = "SELECT marca,modelo,combustible,tipo,cilindro,niv,motor,placa,seguro,propietario,poliza FROM vehiculos WHERE id_usuario='$usuario';";
        $result = $sql->query($query);

        
        return $result->fetch_all(MYSQLI_ASSOC);


        $stmt->close();
        $conn->close();

    } catch (Exception $e) {
        //se produce un error;
        $arreglo = array(
            'error' => $e->getMessage()
        );
    }
}

?>