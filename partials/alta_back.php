<?php

$marca = $_POST['marca'];
$combustible = $_POST['combustible'];
$modelo = $_POST['modelo'];
$tipo = $_POST['tipo'];
$placas= $_POST['placas'];
$cilindros = $_POST['cilindros'];
$niv = $_POST['niv'];
$motor = $_POST['motor'];
$poliza = $_POST['poliza'];
$propietario = $_POST['propietario'];
$seguro = $_POST['seguro'];
$id_usuario= $_SESSION['usuario'];





include 'conexion.php';

try {
    //se realiza la consulta
    $stmt = $conn->prepare("SELECT marca,placa FROM vehiculos WHERE placa = '$placas'");
    $stmt->execute();
    

    //loguear el usuario

    $stmt->bind_result($db_marca,$db_placa);
    $stmt->fetch();
    if ($db_placa) {
        $arreglo = array(
            'response'=>'dos',
            'placa'=>$db_placa,
            'marca'=>$db_marca
        );
    }else{
        $inserta = $conn->prepare("INSERT INTO vehiculos (marca,modelo,combustible,tipo,cilindro,niv,motor,placa,seguro,propietario,poliza,id_usuario) VALUES ('$marca','$combustible','$modelo','$tipo','$placas','$cilindros','$niv','$motor','$poliza','$propietario','$seguro','$id_usuario')");
        $inserta->execute();

        if($inserta->affected_rows){
            $arreglo = array(
                'response' => 'sinresultados',
                'id_insertado' => $inserta->insert_id     
            );

        }
        
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