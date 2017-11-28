<?php
include 'conexion.php';
$sel = $_POST['pr'];
$pregunta = $_POST['pregunta'];
$rescor = $_POST['rc'];
$resin = $_POST['ri'];
$resin2 = $_POST['ri2'];
$resin3 = $_POST['ri3'];
$materia = "default";
switch ($sel) {
  case '1':
        $materia = "Espanol";
    break;
    case '2':
        $materia = "Matematicas";
      break;
    case '3':
        $materia = "Ciencias";
      break;
    case '4':
        $materia = "Historia";
      break;
  default:
      $materia = "default";
    break;
}
  $insertar = $con->query("INSERT INTO materias (Id_materia, Materia, Pregunta, Respuesta_correcta, Respuesta_inc_1, Respuesta_inc_2, Respuesta_inc_3) VALUES ('$sel', '$materia', '$pregunta', '$rescor', '$resin', '$resin2', '$resin3')");
  header('location: alerta.php?mensaje=Pregunta insertada correctamente&p=anade&t=success');

?>
