<?php
include('class/classbd.php');
$usuario=$_POST['correo'];
$contraseña=$_POST['clave'];
session_start();
$_SESSION['usuario']=$usuario;

include('class/classbd.php');

$consulta="SELECT*FROM usuarios where correo='$usuario' and clave='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:admin/home.php");

}else{
    header("location: login.php?e=1");
   

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}