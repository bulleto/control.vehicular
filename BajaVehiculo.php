<?php
include_once 'partials/sesion.php';
include_once 'partials/utilities.php';
$redirect = false;
if(!(isset($_SESSION['niv']))){
    $redirect = true;
    $opcion = 'vehiculos';

}
if($redirect==true){
    redirectTo($opcion);
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
      <a class="navbar-toggler" href="vehiculos.php">
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
<section id="testimonials" class="testimonials " style="background-image: url(images/AltayBaja_bg.png);background-repeat: no-repeat;background-size: cover;">
  <div class="container custom-container ">
    
  

    <!-- START THE CAROUSEL CONTENT  -->
    <div class="row align-items-center container" style="margin-left: 0.05rem;">
      <div class="custom-card-2" style="width: 90%; margin-left: 1rem;">
        <label for="descripcion"><h3>BAJA DE VEHICULO</h3> </label>
     
      </div>
    </div>
   <!-- Solicitud de informacion  -->
   <form id="register" class="row align-items-center container" style="margin-left: 0.05rem;">
    <div class="custom-card-2" style="width: 90%; margin-left: 1rem;">
       <!--Formulario NIV-->
    <div class="">
      <label for="niv"  style="margin-right: 0.7%;">NIV</label>
      <input type="text" value="<?php
      if(isset($_SESSION['niv'])){
          echo $_SESSION['niv'];
      }else{
          echo "";

      }
      ?>" style="width: 70%; margin-left: 12%;" class="custom-input-2" id="niv">
    </div>
  <!--Formulario No. de motor-->
    <div class="">
      <label for="motor"  style="margin-right: 0%;">Placas</label>
      <input type="text" value="<?php
      if(isset($_SESSION['placa'])){
          echo $_SESSION['placa'];
      }else{
          echo "";

      }
      ?>" style="width: 70%; margin-top: 10px;" class="custom-input-2" id="placas">
    </div>
   
    </div>
       <button style="position: absolute; top: 500px; right: 26%; width: 50%" type="submit" class="custom-card-2">Confirmar Baja de Vehiculo</button>
       <a href="vehiculos.php">
           <button style="position: absolute; top: 550px; right: 41%;" type="button" class="custom-card-2">Cancelar</button>
       </a>
  </form>
  
    <!-- START THE CAROUSEL CONTENT  -->
    

 

<!--Botones finales-->





  </div>
  </section>



<!-- BACK TO TOP BUTTON  -->




   
    <script src="assets/vendors/js/glightbox.min.js"></script>
     <script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="js/jquery.min.js"></script>
<script src="js/jquery-3.0.0.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="js/baja.js"></script>
</body>
</html>