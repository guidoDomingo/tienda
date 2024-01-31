<?php
session_start();
require_once("../../config/money_string.php");

function __autoload($className)
{
	$model = "../../model/" . $className . "_model.php";
	$controller = "../../controller/" . $className . "_controller.php";

	require_once($model);
	require_once($controller);
}


$funcion = new Cotizacion();

if (!empty($_POST)) {
	try {

		$proceso = $_POST['proceso'];

		switch ($proceso) {

			case 'Generar':
				$cuantos = $_POST['cuantos'];
				$stringdatos = $_POST['stringdatos'];
				$listadatos = explode('#', $stringdatos);
				$a_nombre = trim($_POST['a_nombre']);
				$pagado = trim($_POST['pagado']);
				$tipo_entrega = trim($_POST['tipo_entrega']);
				$idcliente = trim($_POST['idcliente']);
				$sumas = trim($_POST['sumas']);
				$iva = trim($_POST['iva']) ?? 0.00;;
				$exento = trim($_POST['exento']);
				$retenido = trim($_POST['retenido']);
				$descuento = trim($_POST['descuento']);
				$total = trim($_POST['total']);
				$sonletras = num2letras($total);

				// Imprimir los datos usando echo o print
				// echo "cuantos: $cuantos\n";
				// echo "stringdatos: $stringdatos\n";
				// echo "listadatos: " . print_r($listadatos, true) . "\n";
				// echo "a_nombre: $a_nombre\n";
				// echo "pagado: $pagado\n";
				// echo "tipo_entrega: $tipo_entrega\n";
				// echo "idcliente: $idcliente\n";
				// echo "sumas: $sumas\n";
				// echo "iva: $iva\n";
				// echo "exento: $exento\n";
				// echo "retenido: $retenido\n";
				// echo "descuento: $descuento\n";
				// echo "total: $total\n";
				// echo "sonletras: $sonletras\n";

				if ($tipo_entrega == '1') {
					$entrega = 'INMEDIATA';
				} else if ($tipo_entrega == '2') {
					$entrega = 'POR PEDIDO';
				}

				if ($pagado == '1') {
					$funcion->Insertar_Cotizacion(
						$a_nombre,
						'AL CONTADO',
						$entrega,
						$sumas,
						$iva,
						$exento,
						$retenido,
						$descuento,
						$total,
						$sonletras,
						$_SESSION['user_id'],
						$idcliente
					);
				} else if ($pagado == '0') {
					$funcion->Insertar_Cotizacion(
						$a_nombre,
						'AL CREDITO',
						$entrega,
						$sumas,
						$iva,
						$exento,
						$retenido,
						$descuento,
						$total,
						$sonletras,
						$_SESSION['user_id'],
						$idcliente
					);
				}

				for ($i = 0; $i < $cuantos; $i++) {

					list($idproducto, $cantidad, $precio_unitario, $exentos, $descuento, $disponible, $importe) = explode('|', $listadatos[$i]);


					if ($disponible == 'SI') {
						$disponible = 1;
					} else {

						$disponible = 0;
					}

					$funcion->Insertar_DetalleCotizacion($idproducto, $cantidad, $disponible, $precio_unitario, $exentos, $descuento, $importe);
				}
				break;

			case 'Borrar':
				$numero_transaccion = trim($_POST['numero_transaccion']);
				$funcion->Borrar_Cotizacion($numero_transaccion);
				break;

			default:
				$data = "Error";
				echo json_encode($data);
				break;
		} // Fin switch





	} catch (Exception $e) {
		$data = "Error";
		echo json_encode($data);
	}
}
