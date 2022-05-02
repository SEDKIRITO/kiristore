<?php
include ('../class/classbd.php'); 
session_start();
include ('cabecera_adm.php');
?>
<?php

if(isset($_POST['insertar'])){

    $nombres=$_POST['nombres'];
    $apellidos=$_POST['apellidos'];
    $correo=$_POST['correo'];
    $clave=$_POST['clave'];
    $domicilio=$_POST['domicilio'];
    $telefono=$_POST['telefono'];
    $imagen=$_POST['imagen'];
    
    
 
$sql="INSERT INTO usuarios VALUES('nombre','apellidos','correo','clave','domicilio','telefono','imagen')";
$query= mysqli_query($conexion,$sql);


$sql = $connect->prepare($sql);
    
$sql->bindParam(':nombres',$nombres,PDO::PARAM_STR, 30);
$sql->bindParam(':apellidos',$apellidos,PDO::PARAM_STR, 30);
$sql->bindParam(':correo',$profesion,PDO::PARAM_STR,80);
$sql->bindParam(':domicilio',$domicilio,PDO::PARAM_STR,15);
$sql->bindParam(':telefono',$telefono,PDO::PARAM_STR,4);
$sql->bindParam(':imagen',$imagen,PDO::PARAM_STR,11);
 
$sql->execute();

$lastInsertId = $connect->lastInsertId();
if($lastInsertId>0){

echo "<div class='content alert alert-primary' > Gracias .. Tu Nombre es : $nombres  </div>";
}
else{
    echo "<div class='content alert alert-danger'> No se pueden agregar datos, comuníquese con el administrador  </div>";

print_r($sql->errorInfo()); 
}
}// Cierra envio de guardado
?>

<div class="contenedor_menu">

<h2>Registrate</h2>

<form id="forma" name="forma" method="post" action="nuevo_usuario.php">

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
        <label for="tipo_usuario">Tipo Usuario</label>
        <html>
</br>
            <select name="tipo_usuario" id="tipo_usuario">Tipo1
            <option>tipo1</option>
            <option>Tipo2</option>
            </select>
        </html>
       
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
include("../pie.php");
?>