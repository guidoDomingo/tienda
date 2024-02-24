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
                        <img src="https://cms.eglobalt.com.py/eglobalt_si.png" width="100">
                        <h6 class="receipt-title">
                            <?php echo $datos['empresa']; ?>
                        </h6>
                    </th>
                    <th class="grid-item">
                        <h5 class="receipt-titulo">
                            Portales Web
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
                            <b class="datos"><?php echo $datos['ruc']; ?></b>
                        </h5>
                        <h5 class="receipt-detalle">
                            R.U.C. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                            <b class="datos"><?php echo $datos['ruc']; ?></b>
                        </h5>
                        <h5 class="receipt-detalle">
                            Nombre o Razón Social&nbsp;: <b class="datos"><?php echo $datos['ruc']; ?></b>
                        </h5>
                        <h5 class="receipt-detalle">
                            Credito Bancario &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                        </h5>
                        <h5 class="receipt-detalle">
                            Dirección &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                        </h5>
                    </th>
                    <th class="grid-detalle">
                        <h5 class="receipt-detalle">
                            CONDICION DE VENTA: CONTADO &nbsp;&nbsp;
                            <span id="orangeBox">X</span> &nbsp;&nbsp;&nbsp; CREDITO&nbsp;&nbsp;
                            <span id="orangeBox">&nbsp;&nbsp;&nbsp;</span>
                        </h5>
                        <h5 class="receipt-detalle">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vendedor&nbsp;:
                            <b class="datos">035 TESORERIA - CTA. C</b>
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