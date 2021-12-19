<?php 
$placas=$_POST['opcion'];
include 'conexion.php';
try {
    @session_start();
    //se realiza la consulta
    $stmt = $conn->prepare("SELECT id_vehiculo,marca,modelo,combustible,tipo,cilindro,niv,motor,placa,seguro,propietario,poliza FROM vehiculos WHERE placa = '$placas' AND id_usuario='".$_SESSION['id_usuario']."'");
    $stmt->execute();

    //loguear el usuario

    $stmt->bind_result($db_id_v,$db_marca,$db_modelo,$db_combu,$db_tipo,$db_cil,$db_niv,$db_motor,$db_placa,$db_seguro,$db_prop,$db_poliza);
    $stmt->fetch();
    if ($db_id_v) {
        @session_start();


        $_SESSION['id_vehiculo']=$db_id_v;
        $_SESSION['marca']=$db_marca;
        $_SESSION['modelo']=$db_modelo;
        $_SESSION['combustible']=$db_combu;
        $_SESSION['tipo']=$db_tipo;
        $_SESSION['cilindro']=$db_cil;
        $_SESSION['niv']=$db_niv;
        $_SESSION['motor']=$db_motor;
        $_SESSION['placa']=$db_placa;
        $_SESSION['seguro']=$db_seguro;
        $_SESSION['propietario']=$db_prop;
        $_SESSION['poliza']=$db_poliza;

        if (substr($db_placa,-1)=="1" || substr($db_placa,-1)=="2"){
            $_SESSION['engomado']="verde";
        }elseif (substr($db_placa,-1)=="3" || substr($db_placa,-1)=="4"){
            $_SESSION['engomado']="rojo";
        }elseif (substr($db_placa,-1)=="5" || substr($db_placa,-1)=="6"){
            $_SESSION['engomado']="amarillo";
        }elseif (substr($db_placa,-1)=="7" || substr($db_placa,-1)=="8"){
            $_SESSION['engomado']="rosa";
        }else{
            $_SESSION['engomado']="azul";
        }



        $arreglo = array(
            'response'=>'dos',
            'marca'=>$db_marca,
            'id_vehiculo'=>$db_id_v
        );

        //creamos avariables de session
    }else{
        $arreglo = array(
            'response'=>'valor',
            'opcion'=>$_POST['opcion']
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

