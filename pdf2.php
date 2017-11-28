<?php
include 'conexion.php';
if(!isset($_SESSION['user'])) {
	header('location: index.php');
}
$consulta = $con->query("SELECT * FROM materias");
ob_start();
?>
<style media="screen">
  p{
    color: #B1251E;
  }
  table {  color: #333; font-family: Helvetica, Arial, sans-serif; width: 640px; border-collapse: collapse;}
td, th { border: 1px solid transparent; height: 30px; }
th { background: #D3D3D3; font-weight: bold; }
td { background: #FAFAFA; text-align: center; }
tr:nth-child(even) td { background: #F1F1F1; }
tr:nth-child(odd) td { background: #FEFEFE; }
tr td:hover { background: #666; color: #FFF; }
</style>
	  	<div class="title">
	  		<center><h1><b>Preguntas de admisión</b></h1></center>
	  	</div>
        <p>Reporte descargado por: <?php echo $_SESSION['user']; ?></p>
                  <table cellpadding="3" border="2" width="100%">
                    <thead>
                      <th>Materia</th>
                      <th>Pregunta</th>
                      <th>Respuesta correcta</th>
                      <th>Respuesta incorrecta 1</th>
                      <th>Respuesta incorrecta 2</th>
                      <th>Respuesta incorrecta 3</th>
                    </thead>
                    <tbody>
                      <tr>

                      </tr>
                      <?php while ($variable = mysqli_fetch_array($consulta)) {?>
                        <tr>
                          <td><?php echo $variable['Materia']; ?></td>
                          <td><?php echo $variable['Pregunta']; ?></td>
                          <td><?php echo $variable['Respuesta_correcta']; ?></td>
                          <td><?php echo $variable['Respuesta_inc_1']; ?></td>
                          <td><?php echo $variable['Respuesta_inc_2']; ?></td>
                          <td><?php echo $variable['Respuesta_inc_3']; ?></td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>

<?php
require_once 'dompdf/autoload.inc.php';
 use Dompdf\Dompdf;
 $dompdf = new Dompdf();
 $dompdf->loadHtml(ob_get_clean());
 $dompdf->setPaper('A4', 'portrait');
 $dompdf->render();
 $dompdf->stream('reporte_preguntas');
 ?>
