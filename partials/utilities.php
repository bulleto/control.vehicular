<?php
function signout(){
    unset($_SESSION['id_emp']);
    unset($_SESSION['usuario']);

    session_destroy();    
    redirectTo('login');
}

function redirectTo($page){
    header("Location: {$page}.php");
}

?>