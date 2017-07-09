<?php
class usuario{
	private $nombre = '';
	private $teléfono = '';
	private $celular = '';
	private $email = '';
	private $clave = '';
	
	function guardar(){
		if($this->id > 0){
			//actualizar
		}else{
			//nuevo
			$sql = "INSERT INTO `usuario`
			(`id_administrador`,`nombre`,`nombre_usuario`,`clave`,`email`)
			VALUES
			('{$this->id_administrador}','{$this->nombre}','{$this->nombre_usuario}','{$this->clave}','{$this->email}')";
			
			$con = conexion::get();
			mysqli_query($con, $sql);
			$this->id = musqli_insert_id($con);
		}
		
	}
}	