<?php 

class vehiculo{
	private $marca = '';
	private $modelo = '';
	private	$año='';
	private	$color='';
	private	$precio='';
	private	$kilometraje=''; 
	private	$descripción='';
	
	function __set($prop, $val){
		if(isset($this->$prop)){
			$this->$prop = $val;
		}		
		else{
			echo "La propiedad {$prop} no existe";
		}
	}
	function __get($prop){
		if(isset($this->$prop)){
			return $prop;
		}		
		else{
			echo "La propiedad {$prop} no existe";
		}
	}
	
}
class adprog{
	public $vehiculos;
	public $usuarios;
	function __construct(){
		$this->vehiculos = array();
		$this->usuarios = array();
	}
}
class control{
	private $instancia;
	function __construct(){
		$this->instancia = new adprog();
	}
	function agregar($vehi){
		$clase = get_class($vehi);
		if($clase == 'usuario'){
			$this->instancia->usuarios[$vehi->usuario] = $vehi;
		}else if($clase == 'vehiculo'){
			$this->instancia->vehiculos[$vehi->simbolo] = $vehi;
		}else{
			echo "Objeto Invalido";
			return false;
		}
	}
}	




?>