<?php
include_once 'partials/sesion.php';
include_once 'partials/utilities.php';
$redirect = false;
if(!(isset($_SESSION['usuario']))){
  $redirect = true;
  $opcion = 'login';
    
}
if(!(isset($_SESSION['id_vehiculo'])) && isset($_SESSION['usuario'])){
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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Patrix, Bootstrap 5 Landing Page</title>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css"
    />
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body >
    <!-- ////////////////////////////////////////////////////////////////////////////////////////
                               START SECTION 1 - THE NAVBAR SECTION  
/////////////////////////////////////////////////////////////////////////////////////////////-->
    <nav
      class="navbar navbar-expand-lg navbar-dark custom-menu shadow fixed-top"
      
      
    >
      <div class="container">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
          <select
                  name="cars"
                  id="cars"
                  class="custom-select-1"
                  style="width: 50%"
          >
              <option selected="selected">Elegir vehiculo...</option>

          <?php
          include ('partials/conexion.php');
          @session_start();
          $id_usuario= $_SESSION['id_usuario'];
          $sql="SELECT marca,placa FROM vehiculos WHERE id_usuario = '$id_usuario'";
          $result=mysqli_query($conn, $sql);
          while($ver=mysqli_fetch_row($result)){
              $datos=$ver[0]."||".$ver[1];


              ?>
              <option value="<?php   echo $ver[1]?>"><?php   echo $ver[0]?></option>
              <?php
          }
          ?>

        </select>
        <a class="navbar-brand" href="logout.php">
          <img
            src="images/cerrar_sesion_lg.png"
            alt="logo image"
            style="width: 40px; height: 40px"
          />
        </a>

        <div
          class="collapse navbar-collapse justify-content-start"
          id="navbarNav"
        >
          <ul class="navbar-nav" style="margin-top: 10px">
            <li class="nav-item custom-nav-item">
              <a class="nav-link" href="Documentos.php">Documentos</a>
            </li>
            <li class="nav-item custom-nav-item">
              <a class="nav-link" href="Datos.php">Perfil</a>
            </li>
            <li class="nav-item custom-nav-item">
              <a class="nav-link" href="vehiculos.php">Vehículo/s</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////////////////////////
                               START SECTION 5 - THE TESTIMONIALS  
/////////////////////////////////////////////////////////////////////////////////////////////////////-->
    <section
      id="testimonials"
      class="testimonials"
      style="
        background-image: url(images/pag_principal_bg.png);
        background-repeat: no-repeat;
        background-size: cover;
      "
    >
      <!-- START CUSTOM CONTAINER  -->
      <div class="container custom-container">
        <!-- START THE CAROUSEL CONTENT  -->

        <!-- START CARD CONTENT  -->
        <div class="row container" style="margin-left: 0.05rem">
          <div class="custom-card" style="padding: 0.2rem 0.2rem">
            <div class="" style="padding-bottom: 5px">
              <label for="marca">Marca</label>
              <input
                type="text"
                value="<?php
                if(isset($_SESSION['marca'])){
                    echo $_SESSION['marca'];
                }else{
                    echo "";

                }
                ?>"
                style="width: 30%"
                class="custom-input-1"
                id="marca"
                readonly
              />
              <label for="modelo">Modelo</label>
              <input
                type="text"
                value="<?php
                if(isset($_SESSION['modelo'])){
                    echo $_SESSION['modelo'];
                }else{
                    echo "";

                }
                ?>"
                style="width: 24%; max-width: 34%"
                class="custom-input-1"
                id="modelo"
                readonly
              />
            </div>
            <div class="">
              <label for="placas">Placas</label>
              <input
                type="text"
                value="<?php
                if(isset($_SESSION['placa'])){
                    echo $_SESSION['placa'];
                }else{
                    echo "";

                }
                ?>"
                style="width: 29%"
                class="custom-input-1"
                id="placas"
                readonly
              />
              <label for="engomado">Engomado</label>
              <input
                type="text"
                value="<?php
                if(isset($_SESSION['engomado'])){
                    echo $_SESSION['engomado'];
                }else{
                    echo "";

                }
                ?>"
                style="width: 23%"
                class="custom-input-1"
                id="engomado"
                readonly
              />
            </div>
          </div>
        </div>
        
        <!-- START CARD CALENDARIO CONTENT  -->
        <div class="row container" style="margin-left: 0.05rem">
          <div class="custom-card" style="text-align: center; height: 160px"  id="calendarioC">

              <?php
              if(isset($_SESSION['engomado'])){
                  if ($_SESSION['engomado']=="verde"){
                      include_once 'components/cal_verde.php';

                  }else if ($_SESSION['engomado']=="azul"){
                      include_once 'components/cal_azul.php';

                  }else if ($_SESSION['engomado']=="amarillo"){
                      include_once 'components/cal_amarillo.php';

                  }else if ($_SESSION['engomado']=="rojo"){
                      include_once 'components/cal_rojo.php';

                  }else{
                      include_once 'components/cal_rosa.php';
                  }

              }else{ ?>
                  <strong>
                      <label for="" style="font-size: 13px"
                      >Calendario</label
                      >
                  </strong>
                  <div><label for="" style="font-size: 13px"
                      >Diciembre</label
                      ></div>

                  <div class="calendar-container">


                      <div class="calendar">
                          <div class="calendar__date">
                              <div class="calendar__day">L</div>
                              <div class="calendar__day">M</div>
                              <div class="calendar__day">X</div>
                              <div class="calendar__day">J</div>
                              <div class="calendar__day">V</div>
                              <div class="calendar__day">S</div>
                              <div class="calendar__day">D</div>
                              <div class="calendar__number"></div>
                              <div class="calendar__number"></div>
                              <div class="calendar__number">1</div>
                              <div class="calendar__number">2</div>
                              <div class="calendar__number">3</div>
                              <div class="calendar__number">4</div>
                              <div class="calendar__number">5</div>
                              <div class="calendar__number">6</div>
                              <div class="calendar__number">7</div>
                              <div class="calendar__number">8</div>
                              <div class="calendar__number">9</div>
                              <div class="calendar__number">10</div>
                              <div class="calendar__number">11</div>
                              <div class="calendar__number">12</div>
                              <div class="calendar__number">13</div>
                              <div class="calendar__number">14</div>
                              <div class="calendar__number">15</div>
                              <div class="calendar__number">16</div>
                              <div class="calendar__number">17</div>
                              <div class="calendar__number">18</div>
                              <div class="calendar__number">19</div>
                              <div class="calendar__number">20</div>
                              <div class="calendar__number">21</div>
                              <div class="calendar__number">22</div>
                              <div class="calendar__number">23</div>
                              <div class="calendar__number">24</div>
                              <div class="calendar__number">25</div>
                              <div class="calendar__number">26</div>
                              <div class="calendar__number">27</div>
                              <div class="calendar__number">28</div>
                              <div class="calendar__number">29</div>
                              <div class="calendar__number">30</div>
                              <div class="calendar__number">31</div>
                          </div>
                      </div>
                  </div>
              <?php } ?>

          </div>
        </div>
        <!-- START CARD MULTAS CONTENT  -->
        <div class="row container" style="margin-left: 0.05rem">
          <div class="custom-card" style="text-align: center; height: 120px">
            <strong>
              <label for="" style="font-size: 13px"
                >Control de multas obtenidas</label
              >
            </strong>
            <div style="overflow-y: auto; height: 90px">
              <table class="custom-table-1">
                <thead class="custom-th-1">
                  <tr>
                    <th>Concepto</th>
                    <th>Fecha</th>
                    <th>Monto</th>
                    <th>Pagado</th>
                  </tr>
                </thead>
                <tbody class="custom-table-body-1">
                  <tr>
                    <td>1</td>
                    <td>Valor 1</td>
                    <td>Valor 2</td>
                    <td>Valor 3</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Valor 1</td>
                    <td>Valor 2</td>
                    <td>Valor 3</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Valor 1</td>
                    <td>Valor 2</td>
                    <td>Valor 3</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Valor 1</td>
                    <td>Valor 2</td>
                    <td>Valor 3</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- END CUSTOM CONTAINER  -->
      </div>
    </section>

    <script src="assets/vendors/js/glightbox.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>

    <script src="js/index.js"></script>
  </body>
</html>
