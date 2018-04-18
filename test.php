<?php
	
	include('config.php');

	/**
	* 
		error_reporting mostrar o no errores de PHP
	*/

	error_reporting(MOSTRAR_ERRORES);

	class Revista 
	{
		
		function __construct()
		{			
		}


		function CrudRevista ($opcion = 0,$data){
			$datos = '';
			if($opcion == 1){
				for($i=0; $i<count($data); $i++){
					if($i == (Count($data)-1)){$datos .= $data[$i+1];}else{$datos .= $data[$i+1] .",";}
					$sql = "Insert Into Tabla(columnas) Values($datos)";
					$valida= array('Respuesta' => "Registro Creado.");
				}
			}elseif($opcion == 2){
				$sql = "Update Tabla Set Nombre= ". $data[1] . ", archivo = ". $data[2] . ", descripcion". $data[3] . " Where id = ". $data[0];
				$valida= array('Respuesta' => "Registro Actualizado.");
			}elseif($opcion == 3){
				$sql = "DELETE Tabla Where id = ". $data[0];
				$valida= array('Respuesta' => "Registro Eliminado.");
			}elseif($opcion == 4){
				$sql = "Select columns from Tabla";
				$valida= array('Respuesta' => "Regresa todos los registros.");
			}elseif($opcion == 5){
				$sql = "Select columns from Tabla where id=". $data[0];
				$valida= array('Respuesta' => "Regresa el registro buscado.");
			}else{
				$valida = array('Respuesta' => "no se puede realizar ninguna operacion ");
			}

			return json_encode($valida);
		}
	}	

?>