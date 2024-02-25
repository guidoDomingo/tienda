<!DOCTYPE html>
<html>

<head>
    <title>Comprobante</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        .receipt-main {
            display: inline-block;
            width: 100%;
            font-size: 12px;
            /*border: 1px solid #000;*/
        }

        .receipt-title {
            text-transform: uppercase;
            font-size: 15px;
            font-weight: 500;
            margin: 0;
        }

        .receipt-titulo {
            text-transform: uppercase;
            margin: 0;
        }

        .receipt-detalle {
            margin: 5px;
        }

        .receipt-label {
            font-weight: 800;
            font-size: 15px;
        }

        .text-large {
            font-size: 16px;
        }

        .receipt-section {
            margin-top: 10px;
        }

        .container {
            border: 1px solid #000;
            border-radius: 5px;
        }

        .grid-container {
            border-bottom: 1px solid #000;
        }

        .grid-item {
            padding: 10px;
            font-size: 15px;
            text-align: center;
        }

        .grid-detalle {
            padding: 10px;
            font-size: 15px;
            text-align: left;
        }

        .grid-right {
            border-left: 1px solid #000;
        }

        .datos {
            font-weight: lighter;
        }

        #orangeBox {
            background: white;
            color: black;
            font-size: 1em;
            text-align: center;
            width: 50px;
            height: 40px;
            padding: 2px;
            padding-left: 5px;
            padding-right: 3px;
            border: 1px solid #000;
            border-left: 1px solid #000;
        }

        .table-datos {
            margin-top: 15px;
        }

        .border-titulo {
            border-right: 1px solid #000;
        }

        table {
            border-collapse: collapse;
        }

        .info {
            border-top: 0.5px solid #000;
            padding-top: 20px;
            padding-bottom: 180px;
        }

        .info_fac {
            border-top: 0.5px solid #000;
            padding-top: 5px;
            padding-bottom: 15px;
        }

        .subtotal {
            border-top: 0.5px solid #000;
            padding-top: 5px;
            padding-bottom: 5px;
            padding-left: 7px;
            text-align: left;
        }

        .informacion {
            border-top: 0.5px solid #000;
            padding-top: 20px;
            padding-bottom: 40px;
            padding-left: 10px;
            padding-right: 10px;
            text-align: left;
        }

        .subtotal-cantidad {
            border-top: 0.5px solid #000;
            padding-top: 5px;
            padding-bottom: 5px;
            padding-right: 5px;
            text-align: right;
        }

        .grid-firma {
            font-size: 15px;
            text-align: center;
        }

        .pull-left {
            text-align: center;
            padding-top: -20px;
            font-size: 10px;
        }
    </style>
</head>

<body>
    <div class="receipt-main">

        <div style="width:100%" class="container">
            <table style="width:100%" class="grid-container">
                <tr>
                    <th>
                        <img src="data:image/png;base64,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" width="100">
                        <h6 class="receipt-title">
                            <?php echo $datos['empresa']; ?>
                        </h6>
                    </th>
                    <th class="grid-item">
                        <h5 class="receipt-titulo">
                            Distribuidora 3S
                        </h5>
                        <h5 class="receipt-titulo">
                            Comercio al por menor y al por mayor
                        </h5>
                    
                        <br>
                        <h6 class="receipt-titulo">
                            <?php echo $datos['direccion']; ?>
                        </h6>
                        <h6 class="receipt-titulo">
                            Tel.: (021) 2376740
                        </h6>
                        <h6 class="receipt-titulo">
                            Asunción - Paraguay
                        </h6>
                    </th>
                    <th class="grid-item grid-right">
                        <div class="pull-right receipt-section">
                            <span>RUC: <?php echo $datos['ruc']; ?></span><br>
                            <span class="text-large"><strong>Timbrado Nº <?php echo $datos['numero_resolucion']; ?></strong></span>
                            <h6 class="receipt-titulo">
                                Válido desde: <?php echo $datos['fecha_inicio']; ?>
                            </h6>
                            <h6 class="receipt-titulo">
                                Válido hasta: <?php echo $datos['fecha_fin']; ?>
                            </h6>
                            <span class="text-large"><strong>F A C T U R A</strong></span><br>
                            <span class="text-large">Nº <?php echo $datos['serie'].'-'.strval($datos['numero_comprobante']); ?></span>
                        </div>
                    </th>
                </tr>
            </table>
            <table style="width:100%">
                <tr>
                    <th class="grid-detalle">
                        <h5 class="receipt-detalle">
                            Fecha de Emisión &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                            <b class="datos"><?php echo $datos['fecha_emision']; ?></b>
                        </h5>
                        <h5 class="receipt-detalle">
                            R.U.C. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                            <b class="datos"><?php echo $datos['numero_cedula_c']; ?></b>
                        </h5>
                        <h5 class="receipt-detalle">
                            Nombre o Razón Social&nbsp;: <b class="datos"><?php echo $datos['nombre_cliente']; ?></b>
                        </h5>
                        <h5 class="receipt-detalle">
                            Dirección &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                        </h5>
                    </th>
                    <th class="grid-detalle">
                        <h5 class="receipt-detalle">
                            CONDICION DE VENTA: CONTADO &nbsp;&nbsp;
                            <span id="orangeBox">&nbsp;&nbsp;&nbsp;</span> &nbsp;&nbsp;&nbsp; CREDITO&nbsp;&nbsp;
                            <span id="orangeBox">&nbsp;&nbsp;&nbsp;</span>
                        </h5>
                        <br>
                        <h5 class="receipt-detalle">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vendedor&nbsp;:
                            <b class="datos"><?php echo $datos['empleado']; ?></b>
                        </h5>
                        <h5 class="receipt-detalle">
                            &nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nota de Remisíon Nro.&nbsp;:
                        </h5>
                        <h5 class="receipt-detalle">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vencimiento&nbsp;:
                            <b class="datos"></b>
                        </h5>
                        <h5 class="receipt-detalle">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Teléfono&nbsp;:
                        </h5>
                    </th>
                </tr>
            </table>
        </div>
        <br>
        <div style="width:100%" class="container">
            <table style="width:100%">
                <tr>
                    <th class="border-titulo" width="15%">Código</th>
                    <th class="border-titulo" width="29%">Descripcion Mercaderia</th>
                    <th class="border-titulo" width="6%">Cantidad</th>
                    <th class="border-titulo" width="13%">Precio<br>Unitario</th>
                    <th width="36%" colspan="3">Valor de Ventas</th>
                </tr>
                <tr>
                    <th class="border-titulo" width="15%"></th>
                    <th class="border-titulo" width="29%"></th>
                    <th class="border-titulo" width="6%"></th>
                    <th class="border-titulo" width="13%"></th>
                    <th class="border-titulo" width="11%" style='border-top: 0.5px solid #000;'>Exentas</th>
                    <th class="border-titulo" width="11%" style='border-top: 0.5px solid #000;'>5 %</th>
                    <th width="14%" style='border-top: 0.5px solid #000;'>10 %</th>
                </tr>
                <!-- Aquí puedes agregar o modificar las líneas según tus necesidades -->
                 <!-- Aquí usamos un bucle for para recorrer los productos -->
                 <?php foreach ($datos['detalle'] as $producto) : ?>
                    <tr>
                        <th class="border-titulo info_fac datos" width="15%"><?php echo $producto['codigo'] ?? 'PROVEN01'; ?></th>
                        <th class="border-titulo info_fac datos" width="29%"><?php echo $producto['nombre_producto']; ?></th>
                        <th class="border-titulo info_fac datos" width="6%"><?php echo $producto['cantidad']; ?></th>
                        <th class="border-titulo info_fac datos" width="13%"><?php echo $producto['precio_unitario']; ?></th>
                        <th class="border-titulo info_fac datos" width="11%"><?php echo $producto['exentas'] ?? 0; ?></th>
                        <th class="border-titulo info_fac datos" width="11%"><?php echo $producto['impuesto_5'] ?? 0; ?></th>
                        <th class="info_fac datos" width="14%"><?php echo $producto['importe']; ?></th>
                    </tr>
                <?php endforeach; ?>
                <!-- Fin del bucle y las líneas de productos -->
                <!-- Puedes agregar más filas según tus productos -->

                <!-- Fin de las líneas de productos -->
                <tr>
                    <th class="border-titulo subtotal" width="66%" colspan="4">SUBTOTAL</th>
                    <th width="10%" class="border-titulo subtotal-cantidad datos">0.00</th>
                    <th width="10%" class="border-titulo subtotal-cantidad datos">0.00</th>
                    <th width="14%" class="subtotal-cantidad datos"><?php echo $datos['total'] ?? 0; ?></th>
                </tr>

                <tr>
                    <th class="border-titulo subtotal" width="86%" colspan="6">TOTAL A PAGAR &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <b class="datos" style="text-transform: uppercase;">GUARANIES <?php echo $datos['sonletras'] ; ?></b>
                    </th>
                    <th width="14%" class="subtotal-cantidad datos"><?php echo $datos['total'] ?? 0; ?></th>
                </tr>

                <tr>
                    <th class="subtotal" colspan="2">LIQUIDACION DEL IVA 5 %</th>
                    <th class="datos subtotal-cantidad border-titulo">0,00</th>
                    <th colspan="1" class="subtotal">10 %</th>
                    <th colspan="1" class="border-titulo subtotal datos"><?php echo $datos['iva'] ; ?></th>
                    <th colspan="1" class="subtotal">TOTAL IVA</th>
                    <th colspan="1" class="subtotal datos"><?php echo $datos['iva'] ; ?></th>
                </tr>
                
            </table>
        </div>

        
    </div>
</body>

</html>