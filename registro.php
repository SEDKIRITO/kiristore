<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>

<body>
    <div class="contenedor">
 <?php
  include("cabecera.php");
 ?>


        <div class="contenedor_menu">

            <h2>Registrate</h2>

            <form id="forma" name="forma" method="post">

                <div class="elemento">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>

                <div class="elemento">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" id="apellidos" name="apellidos" required>
                </div>

                <div class="elemento">
                    <label for="correo">Correo</label>
                    <input type="email" id="correo" name="correo" required>
                </div>

                <div class="elemento">
                    <label for="clave">Contraseña</label>
                    <input type="password" id="clave" name="clave" required>
                </div>

                <div class="elemento">
                    <label for="domicilio">Domicilio</label>
                    <input type="text" id="domicilio" name="domicilio" required>
                </div>

                <div class="elemento">
                    <label for="telefono">Telefono</label>
                    <input type="text" id="telefono" name="telefono" required>
                </div>

                <div class="elemento">
                    <label for="imagen">Imagen</label>
                    <input type="text" id="imagen" name="imagen" required>
                </div>

                <div class="elemento">
                    <input type="submit" value="Enviar" />
                </div>

                <div class="elemento">
                    <a href="login.html">Ya tengo una cuenta</a>
                </div>
            </form>
        </div><!-- contenedor_menu -->
    </div><!-- Contenedor -->
</body>

</html>
<?php
  include("pie.php");
?>