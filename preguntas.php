<?php
include 'conexion.php';
if (!isset($_SESSION['user'])) {
	header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Administrador</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <style media="screen">
     html {
    font-family: GillSans, Calibri, Trebuchet, sans-serif;
  }
    .button-collapse{
    	display: none;
    }
    	header, main, footer {
      padding-left: 300px;
    }

    @media only screen and (max-width : 992px) {
      header, main, footer {
        padding-left: 0;
      }
      .button-collapse{
    	display: inherit;
    }
    }
    </style>
</head>
<body>


<main>

	  <nav class="#455a64 blue-grey darken-2">
	    <div class="nav-fixed">
	      <img src="images/logo.png" class="brand-logo right circle" width="80px" height="65px">
	      <a href="#" class="brand-logo center">PREGUNTAS</a>
	    </div>
	  </nav>



	  	<div class="container">
		  	<div class="row">
		  		<div class="col s12">
		  			<div class="card">
		  				<div class="card-content">
                    <span class="card-title">Ingresar nueva pregunta</span>
                    <form class="formulario" action="anade.php" method="post">
                      <div class="input-field">
                       <select required name="pr">
                         <option value="" disabled selected>Elegir materia</option>
                         <option value="1">Español</option>
                         <option value="2">Matematicas</option>
                         <option value="3">Ciencias</option>
                         <option value="4">Historia</option>
                       </select>
                       <label>Materia</label>
                     </div>
                     <div class="input-field">
                       <input type="text" name="pregunta" id="pregunta" required>
                       <label for="pregunta">Ingresa la pregunta</label>
                     </div>
                     <div class="input-field">
                       <input type="text" name="rc" id="rc" required>
                       <label for="rc">Ingresa la respuesta correcta</label>
                     </div>
                     <div class="input-field">
                       <input type="text" name="ri" id="ri" required>
                       <label for="ri">Ingresa la respuesta incorrecta 1</label>
                     </div>
                     <div class="input-field">
                       <input type="text" name="ri2" id="ri2" required>
                       <label for="ri2">Ingresa la respuesta incorrecta 2</label>
                     </div>
                     <div class="input-field">
                       <input type="text" name="ri3" id="ri3" required>
                       <label for="ri3">Ingresa la respuesta incorrecta 3</label>
                     </div>
                     <center>
                     <button class="btn waves-effect waves-light" type="submit" name="action">Añadir
                        <i class="material-icons right">note_add</i>
                      </button></center>
                    </form>
                    <br>
                    <center><a href="pdf2.php" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">picture_as_pdf</i></a></center>
		  				</div>
		  			</div>
		  		</div>
		  	</div>
		</div>



		<ul id="slide-out" class="side-nav fixed">
		    <li><div class="user-view">
		      <div class="background">
		        <img src="images/fondo.jpg">
		      </div>
		      <a><img  src="images/avatar.png" width="100px" height="100px"></a>
		      <a><span class="white-text name">Usuario: <?php echo $_SESSION['user'] ?></span></a>
		      <a><span class="white-text email">Tipo de cuenta: Administrador</span></a>
		    </div></li>

				<li><a href="index.php"><i class="material-icons">home</i>Inicio</a></li>
			 <li><a href="materias.php"><i class="material-icons">create</i>Materias</a></li>
			 <li><a href="preguntas.php"><i class="material-icons">assignment</i>Preguntas</a></li>
			 <li><a href="aspirantes.php"><i class="material-icons">assignment_ind</i>Aspirantes</a></li>
			 <li><a disabled><i class="material-icons">assessment</i>Resultados</a></li>
			 <li><a href="logout.php"><i class="material-icons">exit_to_app</i>Salir del sistema</a></li>

		    <li><div class="divider"></div></li>
		    <center><br><br><p><i class="material-icons">settings</i></p><p>ADMINISTRADOR</p></center>
 		</ul>
  		<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
 </div>
</main>
<script type="text/javascript">
$(document).ready(function() {
$('select').material_select();
});
</script>
</body>
</html>
