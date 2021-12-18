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
@session_start();
$id_usuario= $_SESSION['id_usuario'];





include 'conexion.php';

try {
    //se realiza la consulta
    $stmt = $conn->prepare("SELECT marca FROM vehiculos WHERE placa = '$placas'");
    $stmt->execute();
    

    //loguear el usuario

    $stmt->bind_result($db_marca);
    $stmt->fetch();
    if ($db_marca) {
        $arreglo = array(
            'response'=>'dos',
            'marca'=>$db_marca,
            'placas'=>$placas
        );
    }else{
        $inserta = $conn->prepare("INSERT INTO vehiculos (marca,modelo,combustible,tipo,cilindro,niv,motor,placa,seguro,propietario,poliza,id_usuario) VALUES ('$marca','$modelo','$combustible','$tipo','$cilindros','$niv','$motor','$placas','$seguro','$propietario','$poliza','$id_usuario');");
        $inserta->execute();
        

        

        if($inserta->affected_rows){
            $_SESSION['id_vehiculo']= $inserta->insert_id;
            $arreglo = array(
                'response' => 'sinresultados',
                'id_insertado' => $inserta->insert_id,
                'user_id' => $id_usuario
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