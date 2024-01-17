<?php 

	class Tiraje {

		public function Listar_Tirajes(){

			$filas = TirajeModel::Listar_Tirajes();
			return $filas;
		
		}

		public function Listar_Comprobantes(){

			$filas = TirajeModel::Listar_Comprobantes();
			return $filas;
		
		}

		public function Insertar_Tiraje($fecha_resolucion, $numero_resolucion, $serie, $desde, $hasta, $disponibles, $idcomprobante, $fecha_inicio, $fecha_fin){

			$cmd = TirajeModel::Insertar_Tiraje($fecha_resolucion, $numero_resolucion, $serie, $desde, $hasta, $disponibles, $idcomprobante, $fecha_inicio, $fecha_fin);
			
		}

		public function Editar_Tiraje($idtiraje, $fecha_resolucion, $numero_resolucion, $serie, $desde, $hasta, $disponibles, $idcomprobante, $fecha_inicio, $fecha_fin){

			$cmd = TirajeModel::Editar_Tiraje($idtiraje, $fecha_resolucion, $numero_resolucion, $serie, $desde, $hasta, $disponibles, $idcomprobante, $fecha_inicio, $fecha_fin);
			
		}

	}


 ?>