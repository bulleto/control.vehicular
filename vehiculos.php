<?php
include_once 'partials/sesion.php';
include_once 'partials/utilities.php';
if(!(isset($_SESSION['usuario']))){
    redirectTo('login');;
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
        <img src="images/cerrar_sesion_lg.png" alt="logo image" style="width: 40px; height: 40px;">
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
<section id="testimonials" class="testimonials " style="background-image: url(images/vehiculos.png);background-repeat: no-repeat;background-size: cover;">
  <div class="container custom-container ">
    
  

    <!-- START THE CAROUSEL CONTENT  -->
    <div class="row align-items-center container" style="margin-left: 0.05rem;">
      <div class="custom-card-2" style="width: 30%; margin-left: 1rem;  font-size: 50px;background: rgba(0,0,0, 0.4); border-color: rgba(255,255,255, 0);">
      <i class="fas fa-user"></i>
     
      </div>
    </div>
   <!-- Solicitud de informacion  -->
   
  
    <!-- START THE CAROUSEL CONTENT  -->
    <div class="row container" style="margin-left: 0.05rem;">

    <!-- START FORMULARIO DE REGISTRO -->
      
      <form action=""class="custom-card-2" id="register" style=" background: rgba(250,250,250, 0); border-color: rgba(255,255,255, 0);">
        
        <div class="custom-card-2" style="width: 90%; margin-left: 1rem; padding-top: 10px;">
          <div class="" style=" text-align: left; margin-left: 10px;">
            <label for="user-title" >Usuario: </label>
              <?php echo $_SESSION['usuario']?>

          </div> 
          
      
       </div>
        <div style="width: 100%; ">
          <label for="titulo" ><h5>
            Vehiculos en Propiedad
          </label>
        </h5>
        </div> 
        <div style="overflow-y: auto; height: 90px; margin-top:10px; margin-bottom:10px" id="tabla">


            </div>
        
      
  

<!--Botones finales-->

  <a href="AltaVehiculo.php">
    <button style="width: 30%;" class="custom-card-2" type="button">Alta</button>
  </a>
  <a href="BajaVehiculo.php">
    <button style="width: 30%;" class="custom-card-2" type="button">Baja</button>
  </a>
  
</div>
     
     
    
    </form>

    </div>



  </div>
  </section>



<!-- BACK TO TOP BUTTON  -->




   
    <script src="assets/vendors/js/glightbox.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="js/jquery.min.js"></script> 
      <script src="js/jquery-3.0.0.min.js"></script>
     <script src="assets/js/bootstrap.bundle.min.js"></script>
     <script>  
     
     </script>
     <script type="text/javascript">
    $(document).ready(function(){
        $("#tabla").load("components/tablaVehiculo.php");
    });
    </script>
     
</body>
</html>