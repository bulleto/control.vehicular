<?php

$usuario = $_POST['usuario'];
$pass = $_POST['password'];
$vehiculos = $_POST['vehiculos'];
$licencia = $_POST['licencia'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$postal = $_POST['postal'];
$estado = $_POST['estado'];




include 'conexion.php';

try {
    //se realiza la consulta
    $stmt = $conn->prepare("SELECT id_usuario,usuario FROM usuarios WHERE usuario = '$usuario'");
    $stmt->execute();
    

    //loguear el usuario

    $stmt->bind_result($db_id,$db_usuario);
    $stmt->fetch();
    if ($db_usuario) {
        $arreglo = array(
            'response'=>'dos',
            'usuario'=>$db_usuario
        );
    }else{
        $inserta = $conn->prepare("INSERT INTO usuarios (id_usuario,usuario,pass,vehiculos,licencia,email,telefono,direccion,postal,estado) VALUES (0,'$usuario',md5('$pass'),'$vehiculos','$licencia','$email','$telefono','$direccion','$postal','$estado')");
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