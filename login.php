<?php ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta content="width=device=width, initial-scale=1" name="viewport">
    <title>Pagina de ejemplo</title>

    <link rel="stylesheet" href="assets/css/estiloIS.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        body {
            background-image: url('images/inicioSesion.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
    </style>
</head>

<body>
    <!-- Formularios -->
    <div class="contenedor-formularios">
        <!-- Logo -->
        <div class="container"  align="center">
            <img src="images/logo.png" alt="logo image" width="150" height="150">
        </div>
        <!-- Contenido de los Formularios -->
        <div class="contenido-tab">
            <!-- Iniciar Sesion -->
            <div id="iniciar-sesion">
                <h1>¡Te damos la bienvenida!</h1>
                <form id="login">
                    <div class="contenedor-input">
                        <input type="text" placeholder="Usuario" id="usuario" required>
                    </div>
                    <div class="contenedor-input">
                        <input type="password" placeholder="Contraseña" id="password" required>
                    </div>

                    <input type="submit" class="button button-block" value="Iniciar Sesión">
                </form>
            </div>
        </div>
        <h1>
            <p class="Regis">Si aun no tienes cuenta <a href="registro.php"><u>Registrate</u></a>
        </h1>


    </div>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="js/login.js"></script>

</body>

</html>