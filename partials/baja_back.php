<?php


$placas= $_POST['placas'];
$niv = $_POST['niv'];
@session_start();
$id_usuario= $_SESSION['id_usuario'];

include 'conexion.php';

try {
    //se realiza la consulta
    $stmt = $conn->prepare("DELETE FROM vehiculos WHERE placa = '$placas' AND id_usuario='$id_usuario'");
    $stmt->execute();
    //loguear el usuario


    if ($stmt->affected_rows) {
        $arreglo = array(
            'response'=>'dos'
        );
        unset($_SESSION['marca']);
        unset($_SESSION['modelo']);
        unset($_SESSION['combustible']);
        unset($_SESSION['tipo']);
        unset($_SESSION['cilindro']);
        unset($_SESSION['niv']);
        unset($_SESSION['motor']);
        unset($_SESSION['placa']);
        unset($_SESSION['seguro']);
        unset($_SESSION['propietario']);
        unset($_SESSION['poliza']);
        unset($_SESSION['engomado']);


    }else{

        $arreglo = array(
            'response' => 'sinresultados'
        );

    }


    $stmt->close();
    $conn->close();

} catch (Exception $e) {
    //se produce un error;
    $arreglo = array(
        'error' => $e->getMessage()
    );
}




/*$arreglo = array(
    'respuesta' => $usuario
);*/

die(json_encode($arreglo));
?>