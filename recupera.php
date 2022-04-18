<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/normalize.css">
    <link rel="stylesheet" href="estilos/estilos.css">
    <title>Recuperar</title>
</head>

<body>
    <div class="contenedor">
        
  <?php
    include("cabecera.php");
  ?>

        <div class="contenedor_menu">
            <h2>Recuperar contraseña</h2>
            <form id="forma" name="forma" method="post">

                <div class="elemento">
                    <label for="correo">correo</label>
                    <input type="text" id="correo" name="correo" required>
                </div>

                <div class="elemento">
                    <input type="submit" value="Enviar" />
                </div>

                <div class="elemento">
                    <a href="login.html">Iniciar sesion</a>
                </div>
            </form>
        </div><!-- contenedor_menu -->
    </div><!-- Contenedor -->
</body>

</html>