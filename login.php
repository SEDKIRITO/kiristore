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
  <title>Login</title>
</head>

<body>
  <div class="contenedor">
  
  <?php
  include("cabecera.php");
  ?>


    <div class="contenedor_menu">

      <h2>Iniciar sesion</h2>

      <div class="icono">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-circle" width="100" height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00b341" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
          <circle cx="12" cy="12" r="9" />
          <circle cx="12" cy="10" r="3" />
          <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
        </svg>
      </div>

      <form id="forma" name="forma" action="validar.php" method="post">
        <div class="elemento">
          <label for="nombre">nombre</label>
          <input type="text" id="nombre" name="usuario" required>
        </div>
        <div class="elemento">
          <label for="password">Contraseña</label>
          <input type="password" id="password" name="clave" required>
        </div>

        <div class="elemento">
          <input type="submit" value="Enviar">
        </div>

        <div class="elemento">
          <a href="recupera.html">Olvide mi contraseña</a>
        </div>
      </form>
    </div><!-- contenedor_menu -->
  </div><!-- Contenedor -->
</body>

</html>