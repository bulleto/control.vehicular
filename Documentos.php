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
        <span ><i class="fas fa-arrow-alt-circle-left" style="color: white;"></i>
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
<section id="testimonials" class="testimonials " style="background-image: url(images/Documentos_bg.png);background-repeat: no-repeat;background-size: cover;">
  <div class="container custom-container ">
    
  


    <!-- START THE CAROUSEL CONTENT  -->
    <div class="row container" style="margin-left: 0.05rem;">
      <form action=""class="custom-card-2">
        <label for="Tarjeta de circulacion"  style="margin-right: center;">TARJETA DE CIRCULACION</label>
        <div class="" style="padding-bottom: 5px;">
        <label for="auto" >Vehiculo</label>
        <input type="text" value="FORD" style="width: 20%;" class="custom-input-2"> 
        <label for="tarjeta" >No. de Tarjeta</label>
        <input type="text" value="176918361" style="width: 24%; margin-top: 1%;" class="custom-input-2">
      </div>
      <!--Formulario segundo div-->
      <div class="" style="padding-bottom: 5px;">
        <label for="fechaE" style="margin-left: 1%; margin-bottom: 1%;">Fecha expe</label>
        <input type="text" value="13-09-19" style="width: 20%; margin-right: 40px; margin-bottom: 1%;" class="custom-input-2"> 
        <label for="termino" style= "margin-right: center; margin-bottom: 1%;">Vigencia</label>
        <input type="text" value="24-09-22" style="width: 20%; margin-right: center;  margin-bottom: 1%;" class="custom-input-2">
      </div>
     <!--Formulario tercer div-->
      <div class="" style="padding-bottom: 5px;">
      <label for="ClaveVehicular" >Clave vehicular</label>
      <input type="text" value="2334698" style="width: 30%;" class="custom-input-2"> 
      <label for="REP" >REPUVE</label>
      <input type="text" value="176918361" style="width: 24%; margin-top: 10px;" class="custom-input-2">
    </div>
  <!--Formulario Serie vehicular-->
    <div class="">
      <label for="serie"  style="margin-right: 0%;">Serie vehicular</label>
      <input type="text" value="12721r383321fg" style="width: 60%; margin-right: 10%;" class="custom-input-2">
    </div>

  <!--Formulario No. de motor-->
      <div class="">
        <label for="motor"  style="margin-right: 0%;">No. de motor</label>
        <input type="text" value="rb26c647" style="width: 60%; margin-right: 10%;" class="custom-input-2">
      </div>

  <!--Formulario tercer div-->
    <div class="" style="padding-bottom: 5px;">
      <label for="PlacaNew" style="margin-right: 2%;">PLACA</label>
      <input type="text" value="CXV-22-34" style="width: 24%; margin-right: center;" class="custom-input-2"> 
      <label for="PlacaOld" style="margin-right: 0%;">Placa anterior</label>
      <input type="text" value="HTR-33-77" style="width: 24%; margin-right: center;" class="custom-input-2">
    </div>


<!--Botones finales-->
     <button style="position: absolute; top: 550px; right:35%;" class="custom-card-2">CONFIRMAR</button>
    </form>
    </div>



  </div>

  <!-- Licencia de conducir  -->
  <div class="row align-items-center container" style="margin-left: 0.05rem;">
    <div class="custom-card-2" style="width: 90%; margin-left: 1rem;">
      <label for="Tarjeta de circulacion"  style="margin-right: center;">LICENCIA DE CONDUCIR</label>
          <div class="" style="padding-bottom: 5px;">
          <label for="LIC" >Tipo</label>
          <input type="text" value="A" style="width: 10%;" class="custom-input-2"> 
          <label for="tarjeta" >No. Licencia</label>
          <input type="text" value="176918361" style="width: 30%; margin-top: 1%;" class="custom-input-2">
        </div>
        <!--Formulario segundo div-->
        <div class="" style="padding-bottom: 5px;">
          <label for="fechaE" style="margin-left: 1%; margin-bottom: 1%;">Expe</label>
          <input type="text" value="21-07-19" style="width: 20%; margin-right: 40px; margin-bottom: 1%;" class="custom-input-2"> 
          <label for="termino" style= "margin-right: center; margin-bottom: 1%;">Vigencia</label>
          <input type="text" value="13-04-22" style="width: 20%; margin-right: 10%;  margin-bottom: 1%;" class="custom-input-2">
        </div>
  </section>
   

<!-- BACK TO TOP BUTTON  -->




   
    <script src="assets/vendors/js/glightbox.min.js"></script>


     <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>