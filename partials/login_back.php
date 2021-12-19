<?php

$usuario = $_POST['usuario'];
$password = $_POST['password'];


include 'conexion.php';
try {
    //se realiza la consulta
    $stmt = $conn->prepare("SELECT id_usuario FROM usuarios WHERE usuario = '$usuario' AND pass='".md5($_POST['password'])."'");
    $stmt->execute();

    //loguear el usuario

    $stmt->bind_result($db_id);
    $stmt->fetch();
    if ($db_id) {
        @session_start();

        $_SESSION['id_usuario']=$db_id;
        $_SESSION['usuario']=$usuario;

        $arreglo = array(
            'response'=>'dos',
            'usuario'=>$usuario,
            'id_usuario'=>$db_id,
            'sesion'=>$_SESSION['usuario'],
            'vehiculo'=>'no'
        );

        //creamos avariables de session
    }else{
        $arreglo = array(
            'response'=>'valor',
            'usuario'=>$usuario,
            'nombre'=>$_POST['password']
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
include 'conexion.php';
try {
    //se realiza la consulta
    @session_start();
    $id_session= $_SESSION['id_usuario'];
    $stmt2 = $conn->prepare("SELECT id_vehiculo FROM vehiculos WHERE id_usuario= '$id_session' LIMIT 1");
    $stmt2->execute();

    //loguear el usuario

    $stmt2->bind_result($db_id_v);
    $stmt2->fetch();
    if ($db_id_v) {
        @session_start();
        $_SESSION['id_vehiculo']=$db_id_v;
        $arreglo['vehiculo']= $_SESSION['id_vehiculo'];


        //creamos avariables de session
    }else{
        $arreglo['vehiculo']= 'no';


    }
    $stmt2->close();
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