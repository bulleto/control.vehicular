<?php
function signout(){
    unset($_SESSION['']);

    session_destroy();
    session_regenerate_id(true);
    redirectTo('login');
}

function redirectTo($page){
    header("Location: {$page}.php");
}

?>