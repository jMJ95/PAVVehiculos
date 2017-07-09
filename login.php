<?php 
include('centroVe.php');

?>
<div class="cualog" border="none">
		<div id="tit">Iniciar Sesion</div>
		<div></div>
	<form id="login" name="login" action="validar.php" method="POST"> 
		<label style="font-size:15px;">Nombre</label >
		<br/>
		<input type="text" id="nombre" name="usr_nombre" placeholder="Usuario" style="width:200px;"/>
		<br/>
		<label style="font-size:15px;">Contraseña</label>	
		<br/>
		<input type="password" id="pass" name="usr_pass" placeholder="Contraseña"/>
		<br/>
		<button type="submit"  id="enviar" style="font-size:15px;">Entrar</button>
	</form>
	
	
</div>