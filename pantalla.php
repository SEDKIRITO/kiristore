<?php

include 'class/classbd.php'; 

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <title>Administrador</title>
</head>

<body>
  <div class="contenedor_admin">
    <div class="titulo">
      <h3>Usuarios registrados</h3>
    </div>

    <div class="registro">
      <a href="login.php"><button type="button" class="btn btn-success">NUEVO REGISTRO</button></a>
    </div>

    <div class="tabla">

      <div>
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellidos</th>
              <th scope="col">Correo</th>
              <th scope="col">Clave</th>
              <th scope="col">Genero</th>
              <th scope="col">Domicilio</th>
              <th scope="col">Telefono</th>
              <th scope="col">imagen</th>
              <th scope="col">Tipo</th>
            </tr>
          </thead>
          <tbody>
            <?php
               $sql = 'SELECT * from usuarios';
               $result = mysqli_query($conexion, $sql);
              while ($mostrar = mysqli_fetch_array($result)) { ?>
            <tr>
              <td>
                <?php echo $mostrar['id_usuario']; ?>
              </td>
              <td>
                <?php echo $mostrar['nombre']; ?>
              </td>
              <td>
                <?php echo $mostrar['apellidos']; ?>
              </td>
              <td>
                <?php echo $mostrar['correo']; ?>
              </td>
              <td>
                <?php echo $mostrar['clave']; ?>
              </td>
              <td>
                <?php echo $mostrar['genero']; ?>
              </td>
              <td>
                <?php echo $mostrar['domicilio']; ?>
              </td>
              <td>
                <?php echo $mostrar['telefono']; ?>
              </td>
              <td>
                <?php echo $mostrar['imagen']; ?>
              </td>
              <td>
                <?php echo $mostrar['id_tipo']; ?>
              </td>
            </tr>
         <?php 
           }
          ?>
          </tbody>
        </table>
      </div>
      <!--tabla-->

    </div>
    <!--Contenedor_admin-->
</body>

</html>