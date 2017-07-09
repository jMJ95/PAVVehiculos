<?php 
include('centroVe.php');
include('clasesCont.php');
	//$control = new control();
	$vehiculo = new vehiculo();
	$usuario = new usuario();
	if($_POST){	
		$usuario-> nombre = $POST['usrn'];
		$usuario-> teléfono = $POST['tels'];
		$usuario-> celular = $POST['cels'];
		$usuario-> email = $POST['emails'];
		$usuario-> clave = $POST['passs'];
		$usuario-> guardar();
	}
?>
<div class="cuadro">
	<div id="reg"> Registro de Cliente </div> 
	<form  id="registro"class="registro" action="" autocomplete="on"> 
		<p class="regi"> 
			<label style="font-size:17px;font-weigth:bold;"for="usernamesignup" data-icon="u">Nombre de usuario</label>
			<input id="usernamesignup" name="usrn" type="text" placeholder="Juan Jimenez" />
		</p >
		<p class="regi"> 
			<label style="font-size:17px;font-weigth:bold;"for="numbersignup" data-icon="p">Tu Telefono</label>
			<input id="numbersignup" name="tels" placeholder="809-000-0000"/>
		</p>
		<p class="regi"> 
			<label style="font-size:17px;font-weigth:bold;"for="passwordsignup" data-icon="p">Tu Celular</label>
			<input id="celsignup" name="cels"  placeholder="809-000-0000"/>
		</p>
		<p class="regi"> 
			<label style="font-size:17px;font-weigth:bold;"for="emailsignup" data-icon="e" >Tu email</label>
			<input id="emailsignup" name="emails" type="email" placeholder="tuemail@mail.com"/> 
		</p>
		<p class="regi"> 
			<label style="font-size:17px;font-weigth:bold;"for="passwordsignup" data-icon="p">Tu Clave</label>
			<input id="passwordsignup" name="passs" required="required" type="password" placeholder="*********"/>
		</p>
		<p class="signin button regi"> 
			<input type="submit" value="Registrar" name="dess"/> 
		</p>
</form>
</div>
