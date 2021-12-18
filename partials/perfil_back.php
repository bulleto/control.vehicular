<?php
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$email =  $_POST['email'];
$telefono =  $_POST['telefono'];
@session_start();
$id_usuario=$_SESSION['id_usuario'];


include 'conexion.php';
try {

    $stmt = $conn->prepare("SELECT id_usuario,usuario FROM usuarios WHERE usuario = '$usuario'");
    $stmt->execute();
    

    //loguear el usuario

    $stmt->bind_result($db_id,$db_usuario);
    $stmt->fetch();
    if ($db_usuario) {
        $arreglo = array(
            'response'=>'tres',
            'usuario'=>$db_usuario
        );
    }
    else{
        //se realiza la consulta
    $sql =("UPDATE usuarios SET usuario='$usuario',pass='".md5($_POST['password'])."',email='$email',telefono='$telefono' WHERE id_usuario = '$id_usuario'");    
    mysqli_query($conn, $sql);  
        $arreglo = array(
            'response' => 'dos',
            'correcto' => 'si'
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

die(json_encode($arreglo));
?>