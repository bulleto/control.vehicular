<?php

$usuario = $_POST['usuario'];
$password = $_POST['password'];


include 'conexion.php';
try {
    //se realiza la consulta
    $stmt = $conn->prepare("SELECT id_usuario,usuario,telefono,email FROM usuarios WHERE usuario = '$usuario';");
    $stmt->execute();

    //loguear el usuario

    $stmt->bind_result($db_id,$db_usuario,$db_telefono,$db_email);
    $stmt->fetch();
    if ($db_usuario) {
        @session_start();

        $_SESSION['id_emp']=$db_id;
        $_SESSION['usuario']=$db_usuario;

        $arreglo = array(
            'response'=>'dos',
            'usuario'=>$db_usuario,
            'id_usuario'=>$db_id,
            'sesion'=>$_SESSION['usuario']
        );

        //creamos avariables de session




    }else{
        $arreglo = array(
            'response'=>'valor',
            'usuario'=>$usuario,
            'nombre'=>$password
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