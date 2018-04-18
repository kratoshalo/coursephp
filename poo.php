<?php

	Class OperacionesBasicas{

		public function __construct(){

		}


		public function operaciones($datos, $operacion = "suma"){
			if($operacion=="suma"){
				$resultado = $datos[0] + $datos[1] + $datos[2] + $datos[3];
			}
			elseif ($operacion=="resta") {
				$resultado = $datos[0] - $datos[1] - $datos[2] - $datos[3];
			} 
			elseif ($operacion=="multiplicacion") {
				$resultado = $datos[0] * $datos[1] * $datos[2] * $datos[3];
			}
			elseif ($operacion=="division") {
				$resultado = $datos[0] / $datos[1] /  $datos[2] / $datos[3];
			}	
			else{
				$resultado = "Estas loco!!! Error gigante en la operacion $operacion";
			}

			return $resultado;

		}

	}

	$datos = array(2,2,2,2);

	$obj = new OperacionesBasicas();
	echo "El resultado de la suma es: " . $obj ->operaciones($datos,"porcentaje") . " <br>";
	echo "El resultado de la resta es: " . $obj ->operaciones($datos,"resta") . " <br>";
	echo "El resultado de la multiplicacion es: " . $obj ->operaciones($datos,"multiplicacion") . " <br>";
	echo "El resultado de la division es: " . $obj ->operaciones($datos,"division") . " <br>";
?>