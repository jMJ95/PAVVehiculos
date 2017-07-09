<?php
include('libreria/motor.php');


$vehicplantilla011 = new plantilla();
class plantilla{
	
	function __construct(){
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
	
		<title>Centro PublicCar</title>
		
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/registro.css" rel="stylesheet">
		<link href="css/portfolio-item.css" rel="stylesheet">
	</head>
	<body>
		<!-- Navigation -->
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php">Pagina Principal</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li>
							<a href="#">Marcas</a>
						</li>
						<li>
							<a href="#">Modelos</a>
						</li>
						<li>
							<a href="#">A&ntilde;o</a>
						</li>
						<li>
							<a href="#">Kilometraje</a>
						</li>
						
						<li>
						<a href="administrarIndex.php">Administrador</a>
						</li>
						
					</ul>
					<ul id="regid" class="navbar-nav">
						<li>
						<a href="login.php">Iniciar Session </a>
						</li>
						<li>
						<a> </a>
						</li>
						<li>
						<a href="registroDatos.php"> Registrarse</a>
						</li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container -->
		</nav>
		<form class="fondcuerp">
	
<?php
}

function __destruct(){
?>
		</form>
		<hr/>
		<br/>
			<footer>
				<div class="row">
					<div class="col-lg-12 pie" style="background-color:gray;">
						<p>Hecho por: <a href="https://www.facebook.com/JIMJ200895">JIMJ</a> @2015</p>
					</div>
				</div>
			</footer>
		</div>
		
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
	
	</body>
</html>
<?php
}
}