<?php
include 'conexion.php';
  $usuario = $_POST['usuario'];
  $pass = $_POST['contra'];
  $consulta = $con->query("SELECT * FROM administrador WHERE user = '$usuario' and pass = '$pass'");
  $num = mysqli_num_rows($consulta);
  if ($num == 1) {
    if ($var = $consulta->fetch_assoc()) {
      $user = $var['user'];
      $pasw = $var['pass'];
    }
    if ($user == $usuario && $pasw == $pass) {
      $_SESSION['user'] = $user;
      $_SESSION['pasw'] = $pasw;
      header('location: alerta.php?mensaje=Bienvenido&p=administrador&t=success');
    }
  }else {
    header('location: alerta.php?mensaje=Nombre de usuario o contraseña incorrectos&p=index&t=error');
  }
 ?>
