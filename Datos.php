
<?php
include_once 'partials/sesion.php';
include_once 'partials/utilities.php';
if(!(isset($_SESSION['usuario']))){
    redirectTo('login');
}else{

  include ('partials/conexion.php');    
    $id_usuario= $_SESSION['id_usuario'];
    $sql="";
    $stmt = $conn->prepare("SELECT telefono,email,usuario FROM usuarios WHERE id_usuario = '$id_usuario'");
    $stmt->execute();

    //loguear el usuario

    $stmt->bind_result($db_tel,$db_email,$db_usuario);
    $stmt->fetch();
    $stmt->close();
    $conn->close();
        
}
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Patrix, Bootstrap 5 Landing Page</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
<!-- ////////////////////////////////////////////////////////////////////////////////////////
                               START SECTION 1 - THE NAVBAR SECTION  
/////////////////////////////////////////////////////////////////////////////////////////////-->
<nav class="navbar navbar-expand-lg navbar-dark custom-menu shadow fixed-top" style="background: rgba(0, 0, 0, 0); padding-top: 1rem;">
    <div class="container ">      
      <a class="navbar-toggler" href="index3.php">
        <span ><i class="fas fa-arrow-alt-circle-left"></i>
        </span>
      </a>
      
      <a class="navbar-brand" href="">
        <img src="images/cerrar_sesion_lg.png" alt="logo image" style="width: 40px; height: 40px; font-size: 20px;">
      </a>
      
      <div class="collapse navbar-collapse justify-content-start" id="navbarNav" style="background:linear-gradient(to top, rgb(132, 91, 163), rgba(209, 34, 227,1));">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.html"> - Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#Services"> - Services</a></li>
          <li class="nav-item"><a class="nav-link" href="#testimonials"> - Testimonials</a></li>
          <li class="nav-item"><a class="nav-link" href="#faq"> - FAQ</a></li>
          <li class="nav-item"><a class="nav-link" href="#portfolio"> - Portafolio</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact"> - Contact</a></li>
          <li class="nav-item"></li>
        </ul>                
      </div>
    </div>
  </nav>



<!-- ////////////////////////////////////////////////////////////////////////////////////////////////
                               START SECTION 5 - THE TESTIMONIALS  
/////////////////////////////////////////////////////////////////////////////////////////////////////-->
<section id="testimonials" class="testimonials " style="background-image: url(images/Datos_bg.png);background-repeat: no-repeat;background-size: cover;">
  <form class="container custom-container" id="register">
    
  

   <!-- Informacion Personal  -->
   <div class="row align-items-center container" style="margin-left: 0.05rem;">
    <div class="custom-card-2" style="width: 90%; margin-left: 1rem;">
      <label for="datos"  style="margin-right: center;">DATOS PERSONALES</label>
       <!--Formulario Datos-->
   
  <!--Formulario telefono-->
    <div class="">
      <label for="tel"  style="margin-right: 0%;">TELEFONO</label>
      <input type="text" value="<?php echo $db_tel;?>" style="width: 70%; margin-top: 10px;" id="telefono" class="custom-input-2" readonly>
    </div>
   
      <!--Formulario E-MAIL-->
      <div class="">
        <label for="CORREO"  style="margin-right: 0%; margin-right: 10%;">E-MAIL</label>
        <input type="text" value="<?php echo $db_email;?>" style="width: 70%; margin-top: 10px;" id="email" class="custom-input-2" readonly>
      </div>      
    </div>
    
  </div>
  
<!-- Cuenta  -->
<div class="row align-items-center container" style="margin-left: 0.05rem;">
  <div class="custom-card-2" style="width: 90%; margin-left: 1rem; margin-top: 20px;">
    <label for="datosC"  style="margin-right: center;">CUENTA</label>
     <!--Formulario Datos-->
  <div class="">
    <label for="usuario"  style="margin-right: 0.7%;">N. USUARIO</label>
    <input type="text" value="<?php echo $db_usuario;?>" style="width: 70%; margin-left: 4%;" id="usuario" class="custom-input-2" readonly>
  </div>
<!--Formulario contraseña-->
  <div class="">
    <label for="contra"  style="margin-right: 0%;">CONTRASEÑA</label>
    <input type="text" value="**********" style="width: 70%; margin-top: 10px;" id="password" class="custom-input-2" readonly>
  </div>
 
    <!--Formulario E-MAIL-->
   
    <button style="position: absolute; top: 440px; left: 10%;background: rgba(251, 255, 4, 0.527);" class="custom-card-2" type="button" id="editar" >Editar 
  <span><i class="far fa-edit"></i></span></button>
  </div>
  
</div>
<!--Botones finales-->
     <button style="position: absolute; top: 500px; right: 35%; background: rgba(4, 255, 159, 0.527);" id="guardar" class="custom-card-2" type="submit" disabled hidden>GUARDAR</button>
     <a href="index3.php">
     <button style="position: absolute; top: 550px; right: 34%;" class="custom-card-2" type="button">CANCELAR</button>
     </a>
    
    </form>
    



  </div>
  </section>



<!-- BACK TO TOP BUTTON  -->




   
    <script src="assets/vendors/js/glightbox.min.js"></script>
     <script src="assets/js/bootstrap.bundle.min.js"></script>

     <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/jquery.min.js"></script> 
      <script src="js/jquery-3.0.0.min.js"></script>
      <script>
  document.getElementById('editar').onclick = function() {

    document.getElementById('guardar').disabled= false;
    document.getElementById('guardar').hidden= false;
    document.getElementById('telefono').value= "";
    document.getElementById('email').value= "";
    document.getElementById('usuario').value= "";    
    document.getElementById('password').value= "";

    
    document.getElementById('telefono').removeAttribute('readonly');
    document.getElementById('email').removeAttribute('readonly');
    document.getElementById('usuario').removeAttribute('readonly');
    document.getElementById('password').removeAttribute('readonly');
    
  };
      
    </script>

    
    <script src="js/perfil.js"></script>
    
     
     
</body>
</html>