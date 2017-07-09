<?php
require("conexion.php");


$usr = $_POST['usr_nombre'];
$ctr = $_POST['usr_pass'];

$con = mysql_query("SELECT * FROM publiccar WHERE nombre_usuario = '$usr'");
	if($f2 =mysql_fetch_array($con)){
		if($ctr == $f2['clave']){
			echo '<script>alert("Hola"'$usr')</script>';
			
			
		}
	}


