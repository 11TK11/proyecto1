<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="/Evaluacion_Docente/assets/css/bootstrap.css">
	<link rel="stylesheet" href="/Evaluacion_Docente/assets/css/estilos.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
	<title>Evaluación Docente</title>
</head>
<body>
	<nav class="navbar navbar-inverse">
 		<div class="container-fluid">
 			<a class="navbar-brand" href="#">Ing. de Sistemas e Ing. Informática</a>
     		<div class="navbar-header">
      			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span> 
			    </button>
     			 
    			<div class="collapse navbar-collapse" id="myNavbar">
      				<ul class="nav navbar-nav">
        				<li class="active"><a <?php echo 'href='.base_url().'Estudiante'; ?>>Inicio</a></li>
				        <li><a <?php echo 'href='.base_url().'Estudiante/'; ?>>Respuestas Actuales</a></li>
				        <li><a <?php echo 'href='.base_url().'Estudiante/'; ?>>Cuestionario Vigente</a></li>
				        <li><a <?php echo 'href='.base_url().'Estudiante/'; ?>>Descargas</a></li>
				        <li><a <?php echo 'href='.base_url().'Estudiante/salir'; ?>>Salir</a></li>
				      </ul>
				    </div>
    		</div>
    	</div>
    </nav>	
    <script src='/Evaluacion_Docente/assets/js/jquery.js'></script>
	<script src='/Evaluacion_Docente/assets/js/bootstrap.js'></script>	
	<script src='/Evaluacion_Docente/assets/js/extra.js' type="text/javascript"></script>
</body>
</html>