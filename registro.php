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




<!-- ////////////////////////////////////////////////////////////////////////////////////////////////
                               START SECTION 5 - THE TESTIMONIALS  
/////////////////////////////////////////////////////////////////////////////////////////////////////-->
<section id="testimonials" class="testimonials " style="background-image: url(images/registro.png);background-repeat: no-repeat;background-size: cover;">
  <div class="container custom-container ">
    
  

    <!-- START THE CAROUSEL CONTENT  -->
    <div class="row align-items-center container" style="margin-left: 0.05rem;">
      <div class="custom-card-2" style="width: 90%; margin-left: 1rem;margin-top: -50px;">
        <label for="descripcion"><h3>Registro de usuario</h3> </label>
     
      </div>
    </div>
   <!-- Solicitud de informacion  -->
   
  
    <!-- START THE CAROUSEL CONTENT  -->
    <div class="row container" style="margin-left: 0.05rem;">

    <!-- START FORMULARIO DE REGISTRO -->
      
      <form action=""class="custom-card-2" id="register" style=" background: rgba(255,255,255, 0); border-color: rgba(255,255,255, 0);">
        
        <div class="custom-card-2" style="width: 90%; margin-left: 1rem; padding-top: 10px;">
          <div class="" style=" text-align: left; margin-left: 10px;">
            <label for="vehiculos" >No. de vehiculos</label>
            <input type="number" min="1" max="5" value="1" id="vehiculos" class="custom-input-2" style="width: 30%;">         
          </div> 
          <div class="" style=" text-align: left; margin-left: 10px;">
            <label for="licencia" >No. de licencia</label>
            <input type="text"  style="width: 55%;" id="licencia" class="custom-input-2">         
          </div> 
      
       </div>
        <div style="width: 100%; ">
          <label for="titulo" ><h5>
            Datos personales
          </label>
        </h5>
        </div> 
        <div class="custom-card-2" style="padding-top: 10px;">
          <div class="" style=" text-align: left; margin-left: 10px;">
            <label for="email" >Email</label>
            <input type="text" id="email" style="width: 80%;" class="custom-input-2">         
          </div>  
          <div class="" style="text-align: left;margin-left: 10px;">
            <label for="telefono" >Telefono</label>
            <input type="text"  style="width: 73%;" id="telefono" class="custom-input-2">
          </div>
          <div class="" style="text-align: left;margin-left: 10px;">
            <label for="direccion" >Direccion</label>
            <input type="text" id="direccion" style="width: 73%;" class="custom-input-2">
          </div>
          <div class="" style=" text-align: left;margin-left: 10px;">
            <label for="postal" >CP</label>
            <input type="text" id="postal" style="width: 20%;" class="custom-input-2">
            <label for="estado" >Estado</label>
            <input type="text" id="estado"  style="width: 50%;" class="custom-input-2">
          </div>
        </div>  
      <!--Formulario segundo div-->
      <div style="width: 100%; ">
        <label for="titulo" ><h5>
          Cuenta
        </label>
      </h5>
      </div> 
      <div class="custom-card-2" style="padding-top: 10px;">
        <div class="" style=" text-align: left; margin-left: 10px;">
          <label for="usuario" >Usuario</label>
          <input type="text" id="usuario"  style="width: 80%;" class="custom-input-2">         
        </div>
        <div class="" style=" text-align: left; margin-left: 10px;">
          <label for="password" >Contraseña</label>
          <input type="text" id="password" style="width: 73%;" class="custom-input-2">         
        </div>   
        
      </div>   
      
  

<!--Botones finales-->
<div>
  <button style="width: 30%; background: rgba(4, 255, 159, 0.527);" class="custom-card-2">Enviar</button>
</div>
<div>
  <a href="login.php">
    <button style="width: 30%; " class="custom-card-2" type="button">Cancelar</button>
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
     <script src="js/registro.js"></script>
     
</body>
</html>