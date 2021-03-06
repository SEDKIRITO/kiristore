<?php

include ('../class/classbd.php'); 
include ('cabecera_adm.php');

?>
<body>
  <div class="contenedor_admin">

    <div class="titulo">
      <h3>Usuarios registrados</h3>
    </div>

    <div class="agregar">
        <p>Agragar nuevo usuario</p>
        <a href="../admin/nuevo_usuario.php"><img src="../imagenes/add.png" alt="Agragar"></a>
    </div>

    <div class="tabla_usuarios">

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
              <th scope="col"></th>
              <th scope="col"></th>
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
              <td>
                <a href="admin/actualizar.php"><img src="../imagenes/editar.png" alt="editar"></a>
              </td>
              <td>
                <a href="admin/eliminar.php"><img src="../imagenes/eliminar.png" alt="eliminar"></a>
              </td>
            </tr>
            <?php 
           }
          ?>
          </tbody>
        </table>
      </div> <!--tabla-->

    </div><!--Contenedor_admin-->
</body>

</html>